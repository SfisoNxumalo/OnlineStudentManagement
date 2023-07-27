<?php

$username = Filter_input(INPUT_POST, 'Username');
$password = Filter_input(INPUT_POST, 'Password');

if(!empty($username) || !empty($password))
{	
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "password";
    $dbname = "studentonline";

    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname, 3306);		//makes connection to the database, using the provided database information.

    if(mysqli_connect_error())
    {
            die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error()); 		// Error message to be shown when connection to the database fails, "die" kills the connection.
    }
    else 	//if connection to the database is successful the php file will write data into the database.
    { 

        $sql = "SELECT * FROM tblStudents WHERE USERNAME = '$username' AND PASSWORD = '$password'";		
        $result = mysqli_query($conn, $sql);

            if($conn->query($sql))		
            {

                $count = mysqli_num_rows($result);

                if($count != 0)
                {
                                      
                    session_start();
                    $pID = '';
                    $pIDnum = '';
                    
                    while($row = mysqli_fetch_array($result))
                    {
                        $pID = $row['ID'];
                        $pIDnum = $row['idnumber'];
                    }
                    
                        header("Location: StudentDash.php");

                        $_SESSION['Lusername'] = $username;
                        $_SESSION['usersid'] = $pID;
                        $_SESSION['usersidnum'] = $pIDnum;
                  
                        
                }
                else
                {
                   echo '<script>alert("Login failed, student not found.")</script>';

                    header( "Refresh:0; url=LoginStudent.php", true, 303);
                }     			
            }
            else
            {
                    echo "Error: ". $sql . "<br>" . $conn->error;
            }
            $conn->close(); 	 	//This ends the connection between the database and the website.
    }
}
else 		//if any info is missing on the "I GET INVOLVED" form, error message to be shown. 
{
	echo "One of the fields is empty, Please provide the required information.";
	die();		//kills connection.
}

// function sanitizeString($var)
//         {
//             if(get_magic_quotes_gpc())
//             {
//                 $var = stripslashes($var);
//                 $var = strip_tags($var);
//                 $var = htmlentities($var);
//             }
            
//             return $var;
//         }

                ?>