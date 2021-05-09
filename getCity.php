<?php 
require_once('DB_conntect.php');
$state_name = $_POST['state_name'];
if( ! empty($state_name)){
    $db_handle = new DBcontrroler();
    $query = "SELECT * FROM `city` WHERE `state_name` = '$state_name'";
    $result = $db_handle->runQuery($query);
    ?>
    <option  value="">select your city</option>
    <?php

    foreach($result as $con_state){
    ?>
    <option  value="<?= $con_state['city']; ?>"><?= $con_state['city']; ?></option>
    
    <?php } 
}else{
?>
<option  value="">select your city</option>
<?php } ?>