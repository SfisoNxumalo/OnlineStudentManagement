<?php
session_start();
if(isset($_SESSION['Lusername']) )
{

    $_SESSION['Lusername'];
    $_SESSION['usersid'];

    // $pID = $_GET['idnumber'];
    // $ui = $_GET['ui'];
    
    $IDnum = $_GET['id'];

    if(!empty($IDnum))
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
                $sql = "UPDATE tblapplications SET status = 'Accepted' WHERE idnumber = '$IDnum'";		//SQL code that writes data into the database.

                if($conn->query($sql))
                {
                    echo '<script>alert("Application Accepted")</script>';
                    header( "Refresh:2; url=AdmissionCoDash.php", true, 303);
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

