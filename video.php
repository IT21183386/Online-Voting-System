<?php
session_start();
error_reporting(0);
include('db/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/video.css">

    </head>
    <body>
        <?php
        include('header.php');
        ?>
        <div class="row" style="padding-top: 30px">
            <h2 style="text-align: center;text-decoration-line: underline;text-decoration-style: solid;padding-bottom: 20px;color: #990000">Episodes</h2>

        </div>
        <div class="row" style="padding: 10px">
             <?php
                    $sqlsds = mysqli_query($con, "SELECT * from video");
                    while ($row = mysqli_fetch_array($sqlsds)) {
                        ?> 
            <div class="gallery">
                <a>
                    <iframe width="100%" height="315" src="<?php echo $row['link'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </a>
                <div class="desc"><b style="color: #333333"><?php echo $row['name'] ?></b></div>
            </div>
                    <?php } ?>

           
        </div>
        <?php
        include('footer.php');
        ?>

    </body>
</html>