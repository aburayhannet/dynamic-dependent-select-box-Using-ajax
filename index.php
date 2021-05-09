<?php 
require_once('DB_conntect.php');
$db_handle = new DBcontrroler();
$query = "SELECT * FROM `countray`";
$result = $db_handle->runQuery($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajax</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
<div class="container">
    <div>
        <h1 class="text-center" >Document dropdown list ,countray ,atate ,city select</h1>
    </div>

    <div class="form-group">
        <label for="contray">countray</label>
        <select class="form-control" name="" id="contray">
            <option value="">select your countray</option>
            <?php foreach($result as $content){ ?>
                <option value="<?= $content['countray']; ?>"><?= $content['countray']; ?></option> 
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="state">state</label>
        <select class="form-control" name="" id="state">
        <option  value="">select your state</option>
        </select>
    </div>
    <div class="form-group">
        <label for="city">city</label>
        <select class="form-control" name="" id="city">
            <option value="">select your city</option>
        </select>
    </div>
</div>
</body>
</html>