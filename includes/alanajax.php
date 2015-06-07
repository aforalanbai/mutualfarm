<?php
include_once("conn.php");
$action = $_REQUEST['action'];
$userid = $_SESSION['user']['uid'];
$result = array();
if($action == "purchasefarms")
{
    $userid       = $_REQUEST['userid'];
    $findquery   = $db->query("select * from cartfarms where userid = '$userid'");
    $purchaseddate = date("Y-m-d H:i:s",time());
    while($finfindquery = $findquery->fetch(PDO::FETCH_ASSOC))
    {
        $farmidinside   = $finfindquery['farmid'];
        $productid      = $finfindquery['productid'];
        $deleteid       = $finfindquery['id'];
        $findquery2     = $db->query("select * from individualfarms where id = '$farmidinside'");
        $finfindquery2  = $findquery2->fetch(PDO::FETCH_ASSOC);
        $cost           = $finfindquery2['cost'];
        $farm_name      = $finfindquery2['farm_name'];
        $insertquery = $db->prepare("insert into purchasecartfarms (userid,productid,farmid,status,purchased_date,purchased_price)
values (:userid,:productid,:farmid,:status,:purchased_date,:purchased_price)");
        $variable = array(":userid" => $userid , ":productid" => $productid,":farmid" => $farmidinside,":status" => "cultivating",
        ":purchased_date" => $purchaseddate,":purchased_price" => $cost);
        $insertquery->execute($variable);
        $updatequery = $db->query("update userfarms set status = 'cultivation',displaytext = '$farm_name', farm_name = '$farm_name' where id = '$productid'");
        $deletequery = $db->query("delete  from cartfarms where id = '$deleteid'");
    }
    echo "success";
}
if($action == "addcultivatablelands")
{
    $quantity  = $_REQUEST['quantity'];
    for($i=0;$i<$quantity;$i++)
    {
        $query = $pdo->prepare("INSERT INTO userfarms (farm_name,userid,purchase_date,status,background,displaytext) VALUES
                        (:farm_name3,:userid3,:purchase_date3,:status3,:background3,:displaytext3)");
        $statusdbentry2 = $query->execute(array(
            ':farm_name3' => "Free Farm",
            ':userid3' => $userid,
            ':purchase_date3' => date("Y-m-d H:i:s"),
            ':status3' => "free",
            ':background3' => "cultivate.jpg",
            ':displaytext3' => "Select me and add any farm of your choice",
        ));
    }
    echo "success";
}
if($action == "deletecartfarm")
{
$userid       = $_REQUEST['userid'];
$productid    = $_REQUEST['productid'];
$query        = $db->prepare("delete from  cartfarms  where userid = :userid and productid = :productid");
$variable     = array(":userid" => $userid,":productid" => $productid);
$query->execute($variable);
$totalprice  = 0;
$findquery   = $db->query("select * from cartfarms where userid = '$userid'");
$totalcount  = $findquery->rowCount();
while($finfindquery = $findquery->fetch(PDO::FETCH_ASSOC))
{
    $farmidinside = $finfindquery['farmid'];
    $findquery2  = $db->query("select * from individualfarms where id = '$farmidinside'");
    $finfindquery2 = $findquery2->fetch(PDO::FETCH_ASSOC);
    $totalprice  = $totalprice + intval($finfindquery2['cost']);
}
    $result['totalprice'] = $totalprice;
    $result['totalcount'] = $totalcount;
    $result['farmname']   = "Select me and add any farm of your choice";
    echo json_encode($result);
}
if($action == "outcartfarm")
{
    $userid       = $_REQUEST['userid'];
    $productid    = $_REQUEST['productid'];
    $farmid       = $_REQUEST['farmid'];
    $findrepeatation = $db->query("select * from cartfarms where userid = '$userid' and productid  = '$productid' and farmid = '$farmid'");
    if($findrepeatation->rowCount()==0)
    {
        $query        = $db->prepare("insert into cartfarms (userid,productid,farmid) values (:userid,:productid,:farmid)");
        $variable     = array(":userid" => $userid,":productid" => $productid,":farmid" => $farmid);
    }
    else
    {
        $finfindrepeation = $findrepeatation->fetch(PDO::FETCH_ASSOC);
        $repeatid         = $finfindrepeation['id'];
        $query        = $db->prepare("update  cartfarms set userid = :userid,productid = :productid,
farmid = :farmid where id = :id");
        $variable     = array(":userid" => $userid,":productid" => $productid,":farmid" => $farmid, ":id" => $repeatid);
    }
    $query->execute($variable);
    $totalprice  = 0;
    $findquery   = $db->query("select * from cartfarms where userid = '$userid'");
    $totalcount  = $findquery->rowCount();
    while($finfindquery = $findquery->fetch(PDO::FETCH_ASSOC))
    {
        $farmidinside = $finfindquery['farmid'];
        $findquery2  = $db->query("select * from individualfarms where id = '$farmidinside'");
        $finfindquery2 = $findquery2->fetch(PDO::FETCH_ASSOC);
        if($farmidinside == $farmid)
        {
            $farmname      = $finfindquery2['farm_name'];
        }
        $totalprice  = $totalprice + intval($finfindquery2['cost']);
    }
    $result['totalprice'] = $totalprice;
    $result['totalcount'] = $totalcount;
    $result['farmname']   = $farmname;
    echo json_encode($result);
}
else if($action == "replacepopupform2")
{
?>
    <div class="modal-dialog">
        <div class="container">
            <div class="cart-items">
                <div class="cart-items-inner">
                    <?php
                    $totalprice  = 0;
                    $userid = $_SESSION['user']['uid'];
                    $findquery   = $db->query("select * from cartfarms where userid = '$userid'");
                    while($finfindquery = $findquery->fetch(PDO::FETCH_ASSOC))
                    {
                        $farmidinside   = $finfindquery['farmid'];
                        $findquery2     = $db->query("select * from individualfarms where id = '$farmidinside'");
                        $finfindquery2  = $findquery2->fetch(PDO::FETCH_ASSOC);
                        $farmname       = $finfindquery2['farm_name'];
                        $totalprice     = $totalprice + intval($finfindquery2['cost']);
                        ?>
                        <div class="media">
                            <a class="pull-left" href="javascript:void(0)"><img class="media-object item-image" style="width:32px;heigth:32px"  src="assets/img/<?php echo $finfindquery2['thumb'] ?>" alt=""></a>
                            <p class="pull-right item-price">₹<?php echo $finfindquery2['cost'] ?></p>
                            <div class="media-body">
                                <h4 class="media-heading item-title"><a href="javascript:void(0)"><?php echo $finfindquery2['farm_name'] ?></a></h4>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="media">
                        <p class="pull-right item-price">₹<?php echo $totalprice ?></p>
                        <div class="media-body">
                            <h4 class="media-heading item-title summary">Subtotal</h4>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <div>
                                <a href="#" class="btn btn-theme btn-theme-dark" data-dismiss="modal">Close</a><!--
                                    --><a href="farm-cart.php" class="btn btn-theme btn-theme-transparent btn-call-checkout">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
}
?>
