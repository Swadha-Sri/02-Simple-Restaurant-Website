<?php
session_start();
include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Home</title>

</head>
<body>
    <div style="text-align:centre; padding:15%;">
        <p style="font-size:50px;fint-wight:bold;">
        WELCOME USER    <?php
        if(isset($_SESSION['EmailAddress']))
        {
            $EmailAddress=$_SESSION['EmailAddress'];
            $query=mysqli_query($conn, "SELECT form.* FROM 'form' WHERE form.EmailAddress='$EmailAddress'");
            while($rwo=mysqli_fetch_array($query))
            {
                echo $row['Username'];
            }
        }
        ?>
        :)
        </p>
    </div>
</body>
</html>