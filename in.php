<?php
    include('db.php');

    if(isset($_POST['Sign Up']))
    {
        $Username = $_POST['Username'];
        $EmailAddress = $_POST['EmailAddress'];
        $Password = $_POST['Password'];
        $ConfirmPassword = $_POST['ConfirmPassword'];

        if(!empty($EmailAddress) && !empty($Password) && !empty($ConfirmPassword)  && !is_numeric($EmailAddress))
        {
            $query = "INSERT INTO form (Username, EmailAddress, Password, ConfirmPassword)  VALUES ('$Username','$EmailAddress','$Password','$ConfirmPassword')";

            if($conn->query($query)==TRUE)
            {
                header("location: db.php");
            }
            else{
                echo "Error: ".$conn->error;
            }
        }
        else
        {
            echo "<script type='text/javascript'> alert('Unsuccessfull')</script>";
        }
    }

    if(isset($_POST['Login']))
    {
        $Username = $_POSS['Username'];
        $Password = $_POSS['Password'];

        if(!empty($Username) && !empty($Password)  && !is_numeric($Username))
        {

            $sqlquery = "SELECT * FROM form WHERE EmailAddress = '$Username' limit 1";
            $result = $conn->query($sqlquery);

            if($result->num_rows > 0)
            {
                session_start();
                $row=$result->fetch_assoc();
                $_SESSION['Username']=$row['Username'];
                header("Location: home.php");
                exit(); 
            }
            else
            {
                echo "Not Found, Incoreect Email or Password";
            }
        }
        else
        {
            echo "<script type='text/javascript'> alert('Unsuccessfull')</script>";
        }
    }
?>
