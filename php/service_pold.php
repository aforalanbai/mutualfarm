<?php
include "../includes/conn.php";

if($_REQUEST['action']=="login"){
    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];

    $query= $pdo->prepare("SELECT * FROM user WHERE (username= :username OR email=:email) AND password= :password");
    $query->execute(
        array(
            ':username' => $username,
            ':email' => $username,
            ':password' => $password,
        ));
    $result=$query->fetch(PDO::FETCH_ASSOC);
    $row=$query->rowCount();
    if($row==1){
        $_SESSION['user']=$result;
        echo "success";
    }
    else{
        echo "fail";
    }

}

if($_REQUEST['action']=="checkuser"){
    $username=$_REQUEST['username'];

    $query=$pdo->prepare("SELECT COUNT(*) AS stat FROM user WHERE username=:username");
    $query->execute(array(
        ':username'       =>       $username,
    ));
    $res=$query->fetch(PDO::FETCH_ASSOC);
    if($res['stat']>0)
        echo "fail";
    else
        echo "success";
}

if($_REQUEST['action']=="checkemail"){
    $email=$_REQUEST['email'];

    $query=$pdo->prepare("SELECT COUNT(*) AS stat FROM user WHERE email=:email");
    $query->execute(array(
        ':email'       =>       $email,
    ));
    $res=$query->fetch(PDO::FETCH_ASSOC);
    if($res['stat']!=0 || $res['stat']!='0')
        echo "fail";
    else
        echo "success";
}

if($_REQUEST['action']=="register"){
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $address = $_REQUEST['address'];
    $cart_stat=0;
    $image="default.jpg";

    $pdo->beginTransaction();

    $query=$pdo->prepare("INSERT INTO user () VALUES ()");
    $query->execute();
    $id=$pdo->lastInsertId();
    $query=$pdo->prepare("UPDATE user SET username=:username, password=:password, firstname=:firstname, lastname=:lastname, email=:email, phone=:phone, address=:address, image=:image, cart_stat=:cart_stat WHERE uid=:uid");
    $statusdbentry=$query->execute(array(
        ':uid'       =>       $id,
        ':username'       =>       $username,
        ':password'       =>       $password,
        ':firstname'       =>       $firstname,
        ':lastname'       =>       $lastname,
        ':email'       =>       $email,
        ':phone'       =>       $phone,
        ':address'       =>       $address,
        ':image'       =>       $image,
        ':cart_stat'       =>       $cart_stat,
    ));

        $query = $pdo->prepare("INSERT INTO userfarms (farm_name,userid,purchase_date,status,background,displaytext) VALUES
                        (:farm_name,:userid,:purchase_date,:status,:background,:displaytext),(:farm_name2,:userid2,:purchase_date2,:status2,:background2,:displaytext2),(:farm_name3,:userid3,:purchase_date3,:status3,:background3,:displaytext3)");
        $statusdbentry2 = $query->execute(array(
            ':farm_name' => "Free Farm",
            ':userid' => $id,
            ':purchase_date' => date("Y-m-d H:i:s"),
            ':status' => "free",
            ':background' => "cultivate.jpg",
            ':displaytext' => "Select me and add any farm of your choice",

            ':farm_name2' => "Free Farm",
            ':userid2' => $id,
            ':purchase_date2' => date("Y-m-d H:i:s"),
            ':status2' => "free",
            ':background2' => "cultivate.jpg",
            ':displaytext2' => "Select me and add any farm of your choice",

            ':farm_name3' => "Free Farm",
            ':userid3' => $id,
            ':purchase_date3' => date("Y-m-d H:i:s"),
            ':status3' => "free",
            ':background3' => "cultivate.jpg",
            ':displaytext3' => "Select me and add any farm of your choice",
        ));

    if($statusdbentry && $statusdbentry2){
        $pdo->commit();
        $query= $pdo->prepare("SELECT * FROM user WHERE username= :username AND password= :password ");
        $query->execute(
            array(
                ':username' => $username,
                ':password' => $password,
            ));
        $result=$query->fetch(PDO::FETCH_ASSOC);
        $row=$query->rowCount();
        if($row==1){
            $_SESSION['user']=$result;
            header("Location:../myfarm.php");
        }
    }
    else{
        $pdo->rollBack();
        ?>
        <script>
            alert("Something Went Wrong");
            window.history.back();
        </script>
    <?php
    }
}

if($_REQUEST['action']=="cartlist"){
    $query=$pdo->prepare("SELECT * FROM cart WHERE uid=:uid");
    $query->execute(array(
        ':uid' => $_SESSION['user']['uid'],
    ));
    $res=$query->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($res);
}

if($_REQUEST['action']=="tocart"){
    $uid = $_SESSION['user']['uid'];
    $pid = $_REQUEST['pid'];
    $pname = $_REQUEST['pname'];
    $pprice = $_REQUEST['pprice'];
    $quantity= $_REQUEST['qnty'];
    $netprice=$pprice*$quantity;
    $pimage=$_REQUEST['pimage'];

    $query=$pdo->prepare("INSERT INTO cart () VALUES ()");
    $query->execute();
    $id=$pdo->lastInsertId();

    $query=$pdo->prepare("UPDATE cart SET uid=:uid,pid=:pid, pname=:pname, pprice=:pprice, pquantity=:pquantity, netprice=:netprice, pimage=:pimage WHERE cid=:cid");
    $statusdbentry=$query->execute(array(
        ':cid'       =>       $id,
        ':uid'       =>       $uid,
        ':pid'       =>       $pid,
        ':pname'       =>       $pname,
        ':pprice'       =>       $pprice,
        ':pquantity'       =>    $quantity,
        ':netprice'       =>    $netprice,
        ':pimage'       => $pimage,
    ));
    if($statusdbentry) {
        $query = $pdo->prepare("UPDATE product SET pavailable=pavailable-:point WHERE pid=:pid");
        $statusdbentry = $query->execute(array(
            ':pid' => $pid,
            ':point' => $quantity,
        ));
        if ($statusdbentry) {
                echo "success";
        } else {
            echo "fail";
        }
    }
    else{
        echo "fail";
    }


}

if($_REQUEST['action']=="outcart"){

    $id=$_REQUEST['cid'];

    $query=$pdo->prepare("DELETE FROM cart WHERE cid=:id");

    $statusdbentry=$query->execute(array(
        ':id'       =>       $id,
    ));
    if($statusdbentry){

        $query=$pdo->prepare("UPDATE product SET pavailable=pavailable+:point WHERE pid=:pid");

        $statusdbentry=$query->execute(array(
            ':point'       =>       $_REQUEST['qntyty'],
            ':pid'         =>       $_REQUEST['pid'],
        ));

        if($statusdbentry)
            echo "success";
        else
            echo "fail";
    }
    else{
        echo "fail";
    }
}

if($_REQUEST['action']=="checkout"){

    $uid=$_SESSION['user']['uid'];

    $order_id="ORD".$uid.rand(100,999);

    $pdo->beginTransaction();

    $q2=$pdo->prepare("SELECT * FROM cart WHERE uid=:uid");

    $statusdbentry=$q2->execute(array(
        ':uid'       =>       $uid,
    ));
    while($res=$q2->fetch(PDO::FETCH_ASSOC)) {

        $query = $pdo->prepare("INSERT INTO orders () VALUES ()");
        $query->execute();
        $id = $pdo->lastInsertId();

        $query = $pdo->prepare("UPDATE orders SET
order_id=:order_id,pid=:pid, pname=:pname, oprice=:oprice,
pquantity=:pquantity, ufname=:ufname,ulname=:ulname, uemail=:uemail,uphone=:uphone,
uaddress=:uaddress,udate=:udate WHERE oid=:oid");
        $statusdbentry = $query->execute(array(
            ':oid' => $id,
            ':order_id' => $order_id,
            ':pid' => $res['pid'],
            ':pname' => $res['pname'],
            ':oprice' => $res['netprice'],
            ':pquantity' => $res['pquantity'],
            ':ufname' => $_SESSION['user']['firstname'],
            ':ulname' => $_SESSION['user']['lastname'],
            ':uemail' => $_SESSION['user']['email'],
            ':uphone' => $_SESSION['user']['phone'],
            ':uaddress' => $_SESSION['user']['address'],
            ':udate' => date("Y-m-d H:i:s"),
        ));
    }

    if($statusdbentry){

        $q3=$pdo->prepare("DELETE FROM cart WHERE uid=:id");

        $statusdbentry2=$q3->execute(array(
            ':id'       =>       $uid,
        ));

        if($statusdbentry2){
            $pdo->commit();
            $result['status']="success";
            $result['orderid']=$order_id;
            }
        else{
            $pdo->rollBack();
            $result['status']="fail";
            }

    }

    else{
        $pdo->rollBack();
        $result['status']="fail";
    }
echo json_encode($result);
}
?>