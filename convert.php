<!DOCTYPE html>
<html>
    <head>
        <title>小轉轉</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>

<?php
if ($_FILES["file"]["error"] == 0) {
    $name = $_FILES["file"]["name"];
    $name = str_replace(' ', '-', $name);
    $name = str_replace('.pdf', '', $name);
    $name = str_replace('.PDF', '', $name);
    system('convert ' . $_FILES["file"]["tmp_name"] . ' -append -define jpg:extent=500kb ./results/' . $name . '.jpg', $ret);
}
?>

        <p>現在這張是 <?php echo $name; ?>.jpg</p>
        <p><a href="http://disa.csie.org/~averangeall/pdf-to-jpg/">再轉其他pdf檔</a></p>
        <img src="./results/<?php echo $name; ?>.jpg" />
    </body>
</html>
