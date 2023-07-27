<?php

$firstname = Filter_input(INPUT_POST, 'firstname');
$lastname = Filter_input(INPUT_POST, 'lastname');

$idnumber = Filter_input(INPUT_POST, 'idnumber');
$gender = Filter_input(INPUT_POST, 'gender');

$disability = Filter_input(INPUT_POST, 'disability');
$allergies = Filter_input(INPUT_POST, 'allergies');

$disa = Filter_input(INPUT_POST, 'disa');
$alle = Filter_input(INPUT_POST, 'alle');


if(!empty($firstname) || !empty($lastname)  || !empty($idnumber) || !empty($gender)  || !empty($disability) || !empty($allergies) || ($allergies === "Yes" && !empty($alle)) || ($disability === "Yes" && !empty($disa)))
{	

    if($disability === "No")
    {
        $disa = "None";
    }

    if($allergies === "No")
    {
        $alle = "None";
    }

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

        $sql = "SELECT * FROM tblstudents WHERE idnumber = '$idnumber'";		
        $result = mysqli_query($conn, $sql);

            if($conn->query($sql))		
            {

                $count = mysqli_num_rows($result);

                if($count != 0)
                {
                                    
                    $sql2 = "INSERT INTO tblmedicalform(firstname, lastname, gender, disabilities, Allergies, the_Disabilities, the_Allergies, performed_by) VALUES ('$firstname', '$lastname', '$gender', '$disability', '$allergies', '$disa', '$alle', '$idnumber')";		//SQL code that writes data into the database.

                    if($conn->query($sql2))
                    {
                       echo "<script>alert(New medical form completed user)</script>";

                        header( "Refresh:2; url=NewStudentMedical.php", true, 303);
                    }   
                    else
                    {
                            echo "Error: ". $sql2 . "<br>" . $conn->error;
                    }

                    $conn->close(); 

                }
                else
                {
                   echo "<script>alert(Login failed, User with Id number '$idnumber' not found.)</script>";

                    header( "Refresh:0; url=NewStudentMedical.php", true, 303);
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