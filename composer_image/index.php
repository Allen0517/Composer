<?php
require_once "../vendor/autoload.php";
use Imagine\Image\Box;

if ($_POST['submit']){

    $file_image = $_FILES['image']['tmp_name'];
    $imagine = new Imagine\Gd\Imagine();
    $image = $imagine->open($file_image);
//    $image->resize(new Box(100, 100));
    $size    = new Imagine\Image\Box(100, 100);

    $mode1    = Imagine\Image\ImageInterface::THUMBNAIL_INSET;
// or
    $mode    = Imagine\Image\ImageInterface::THUMBNAIL_OUTBOUND;
    $image->thumbnail($size, $mode)->save("image/".time().".jpeg",array('jpeg_quality' => 50));
//    $image->save("image/".time().".jpeg",array('jpeg_quality' => 50));

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Contact Form</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>



<div class="container">
        <div class="row">
            <form role="form" class="form col-sm-10 col-sm-offset-1" method="post" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label class="col-sm-1  " for="cover-image">Image</label>
            <div class="col-sm-10">
                <input type="file" style="height:auto;" name="image" class="form-control" id="cover-image" placeholder="Cover Image"/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2 col-sm-offset-1">
                <button name="submit" type="submit" value="submit" class="btn btn-default ">Submit</button>
            </div>
        </div>

            </form>
        </div>
</div><!-- /.container -->



</body>
</html>
