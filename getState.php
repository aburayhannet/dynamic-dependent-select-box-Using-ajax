<?php 
require_once('DB_conntect.php');
$coutray_name = $_POST['countray_name'];
if( ! empty($coutray_name)){
    $db_handle = new DBcontrroler();
    $query = "SELECT * FROM `state` WHERE `countray_name` = '$coutray_name'";
    $result = $db_handle->runQuery($query);
?>
<option  value="">select your state</option>
<?php
    foreach($result as $con_state){
    ?>
    <option  value="<?= $con_state['state']; ?>"><?= $con_state['state']; ?></option>
    
    <?php } 
}else{
?>
<option  value="">select your state</option>
<?php } ?>




