<?php
session_start();
if(isset($_SESSION['Lusername']) )
{

    $_SESSION['Lusername'];
    $_SESSION['usersid'];

    // $pID = $_GET['idnumber'];
    // $ui = $_GET['ui'];
    
    $IDnum = $_GET['id'];
    $name = Filter_input(INPUT_POST, 'name');
    $cardnum = Filter_input(INPUT_POST, 'cardnum');
    $expdate = Filter_input(INPUT_POST, 'expdate');
    $cvv = Filter_input(INPUT_POST, 'cvv');

    if(!empty($IDnum) || !empty($name) || !empty($cardnum) || !empty($expdate) || !empty($cvv))
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
                        $sql = "UPDATE tblapplications SET paid = 'Yes' WHERE idnumber = '$IDnum'";		//SQL code that writes data into the database.

                        if($conn->query($sql))
                        {
                           echo '<script>alert("Payment Success")</script>';
                            header( "Refresh:2; url=StudentDash.php", true, 303);
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

