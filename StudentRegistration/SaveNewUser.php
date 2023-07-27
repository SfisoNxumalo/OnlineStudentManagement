<?php
session_start();
if(isset($_SESSION['Lusername']) )
{

    $_SESSION['Lusername'];
    $_SESSION['usersid'];
    
    $uname = Filter_input(INPUT_POST, 'uname');
    $password = Filter_input(INPUT_POST, 'password');
    $role = Filter_input(INPUT_POST, 'role');

    if(!empty($uname) && !empty($password) && !empty($role))
    {	
                $host = "localhost";
                $dbusername = "root";
                 $dbpassword = "password";
                $dbname = "studentonline";

                $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

                if(mysqli_connect_error())
                {
                        die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
                }
                else
                { 
                        $sql = "INSERT INTO tblusers(username, password,role) VALUES ('$uname', '$password', '$role')";		//SQL code that writes data into the database.

                        if($conn->query($sql))
                        {
                           echo "<script>alert(New $role user)</script>";

                            header( "Refresh:0; url=NewUser.php", true, 303);
                        }   
                        else
                        {
                                echo "Error: ". $sql . "<br>" . $conn->error;
                        }
                        $conn->close(); 

                }
    }
    else 		
    {
        echo "Fields Cannot be empty";
        die();
    }




}
else
{
    echo '<script>alert("Access denied please login")</script>';

   echo header("Location: index.php");
}

