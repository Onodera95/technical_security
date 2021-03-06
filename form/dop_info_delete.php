<?php
/**
 * Created by PhpStorm.
 * User: stud03
 * Date: 19.05.2017
 * Time: 15:21
 */
require_once "../class/dop_info.php";

$ob = new \form\dop_info();
$data = $ob->delete();
if (is_bool($data)){
    header("Location: ../tables/dop_info.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet"/>
    <script src="../bootstrap/js/jquery-3.2.1.min.js" > </script>
    <script src="../bootstrap/js/bootstrap.min.js" > </script>
</head>

<body>
<div class="container">

    <div class="span10 offset1">
        <div class="row">
            <h3>Удалить</h3>
        </div>

        <form class="form-horizontal" action='../form/dop_info_delete.php' method="post">
            <input type="hidden" name="id" value="<?= $data['id']?>"/>
            <p class="alert alert-error">Вы действительно хотите удалить запись "<?=$data['date']?>" ?</p>
            <div class="form-actions">
                <button type="submit" class="btn btn-danger">Да</button>
                <a class="btn" href="../tables/dop_info.php">Нет</a>
            </div>
        </form>
    </div>

</div> <!-- /container -->
</body>
</html>