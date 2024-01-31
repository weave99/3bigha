<?php
include_once("../db/conn.php");
$flag=$_POST['flag']; ?>
<!--<option value="0">None</option>-->
<?php if($flag==1){
    //`variation_id`, `variation_name`SELECT * FROM `users_services_supplier_variation` WHERE 1
$sql50="SELECT * FROM users_services_supplier_variation";
$res50=mysqli_query($conn,$sql50);
while($row50=mysqli_fetch_array($res50)){ ?>
    <option value="<?php echo $row50['variation_id']; ?>"><?php echo $row50['variation_name'];?></option>
<?php }}else{
    //`subvariation_id`, `variation_id`, `subvariation_name`SELECT * FROM `users_services_supplier_sub_variation` WHERE 1
    $variation=$_POST['variation'];
    $sql51="SELECT * FROM users_services_supplier_sub_variation WHERE variation_id=$variation";
    $res51=mysqli_query($conn,$sql51);
    while($row51=mysqli_fetch_array($res51)){ ?>
    <option value="<?php echo $row51['subvariation_id']; ?>"><?php echo $row51['subvariation_name'];?></option>
    <?php }
}
?>