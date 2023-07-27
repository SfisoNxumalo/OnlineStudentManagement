<?php
    $uname = Filter_input(INPUT_POST, 'uname');
    $password = Filter_input(INPUT_POST, 'password');

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
    

    if(!empty($uname) && !empty($password) && !empty($firstname) && !empty($lastname) && !empty($idnumber) && !empty($gender) && !empty($contact) && !empty($address) && !empty($course) && !empty($Studyyear) && !empty($modeofstudy) && !empty($campus))
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
                        //    echo "<script>alert(Registration Successful, login to continue with payment)</script>";



                        //     header( "Refresh:0; url=NewUser.php", true, 303);

                            $sql2 = "INSERT INTO tblstudents(username, password, idnumber) VALUES ('$uname', '$password', '$idnumber')";		//SQL code that writes data into the database.

                            if($conn->query($sql2))
                            {
                            
                                
                                echo '<script>alert("Registration Successful, login to continue with payment")</script>';
                                header( "Refresh:2; url=LoginStudent.php", true, 303);
                            }   
                            else
                            {
                                    echo "Error: ". $sql2 . "<br>" . $conn->error;
                            }

                            
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