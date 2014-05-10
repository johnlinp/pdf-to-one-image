<!DOCTYPE html>
<html>
    <head>
        <title>PDF 2 Image</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="css/flat-ui.css" rel="stylesheet">
        <link href="css/index.css" rel="stylesheet">
    </head>

    <body>
        <h1>PDF <span class="green">2</span> Image</h1>
        <form method="post" enctype="multipart/form-data">
            <h4 class="step">Step 1: Choose your PDF file</h4>
            <input type="file" name="file"><br>
            <h4 class="step">Step 2: Convert it</h4>
            <input type="submit" class="btn btn-primary hand" value="Go!">
        </form>
<?php
if(count($_FILES) != 0 && $_FILES["file"]["error"] == 0) {
    $name = $_FILES["file"]["name"];
    $name = str_replace(' ', '-', $name);
    $name = str_replace('.pdf', '', $name);
    $name = str_replace('.PDF', '', $name);
    system('convert ' . $_FILES["file"]["tmp_name"] . ' -append -define jpg:extent=500kb ./results/' . $name . '.jpg', $ret);

    echo '<h4 class="step">Step 3: Download the image file</h4>';
    echo '<a class="btn btn-primary" href="download.php?fname=' . $name . '.jpg">Download!</a>';
}
?>
    </body>
</html>
