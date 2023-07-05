<?php
include('db/dbconnection.php');

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $link = $_POST['link'];
    
    $sql = mysqli_query($con, "insert into video(name,link) values ('$name','$link')");

    if ($sql) {
        echo "<script>alert('Success');</script>";
    } else {

        echo "<script>alert('Invalid Details');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/crudvideo.css">
    </head>
    <body>
        <div class="row">
            
                <h2 style="text-align: center;text-decoration-line: underline;text-decoration-style: solid;">Dashboard Video</h2>
        
        </div>
        <div class="row">
            <div class="column">
                <table id="customers">
                    <tr>

                        <th>Name</th>
                        <th>Position</th>
                        <th>Action</th>
                    </tr>

                    <?php
                    $sqlsds = mysqli_query($con, "SELECT * from video");
                    while ($row = mysqli_fetch_array($sqlsds)) {
                        ?> 
                        <tr>
                            <td><?php echo $row['name'] ?></td>

                            <td><?php echo $row['link'] ?></td>


                            <td><a class="button button2" href="crudvideoupdate.php?a=<?php echo $row['id'] ?>">Update</a>
                                <a class="button button1" href="deletevideo.php?a=<?php echo $row['id'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>


                </table>


            </div>
            <div class="column2">
                <div class="container">
                    <div class="row">
                        <h3 style="text-align: center">Add New Video</h3>
                    </div>
                    <form action="" method="post">
                        
                        <div class="row">
                            <div class="col-25">
                                <label for="name">Name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="name" name="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="link">Position</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="link" name="link" placeholder="Link">
                            </div>
                        </div>
                        
                        <br>
                        <div class="row">
                            <input name="add" type="submit" value="Add New Video">
                        </div>
                    </form>
                </div>
            </div>

            

        </div>

    </body>
</html>


