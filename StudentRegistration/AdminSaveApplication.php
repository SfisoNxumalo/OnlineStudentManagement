<?php

    $firstname = Filter_input(INPUT_POST, 'firstname');
    $lastname = Filter_input(INPUT_POST, 'lastname');

    $idnumber = Filter_input(INPUT_POST, 'idnumber');
    $gender = Filter_input(INPUT_POST, 'gender');

    $contact = Filter_input(INPUT_POST, 'contact');
    $address = Filter_input(INPUT_POST, 'address');

    $course = Filter_input(INPUT_POST, 'course');
    $Studyyear = Filter_input(INPUT_POST, 'Studyyear');

    $modeofstudy = Filter_input(INPUT_POST, 'modeofstudy');
    $campus = Filter_input(INPUT_POST, 'campus');
    

    if(!empty($firstname) && !empty($lastname) && !empty($idnumber) && !empty($gender) && !empty($contact) && !empty($address) && !empty($course) && !empty($Studyyear) && !empty($modeofstudy) && !empty($campus))
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
                        $sql = "INSERT INTO tblapplications(firstname, lastname, idnumber, gender, contact, address, course, studyYear, modeofstudy, prefferedcampus, status, paid) VALUES ('$firstname', '$lastname', '$idnumber', '$gender', '$contact', '$address', '$course', '$Studyyear', '$modeofstudy', '$campus', 'pending', 'No')";		//SQL code that writes data into the database.

                        if($conn->query($sql))
                        {
                    
                            echo '<script>alert("New Application saved")</script>';
                            header( "Refresh:2; url=AdminNewApplication.php", true, 303);
                            
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