<!DOCTYPE html>
            <html>
                <head>
                    <meta charset="UTF-8">
                    <title></title>
                    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
                <link rel="stylesheet" href="style.css"> 
                <link rel="stylesheet" href="cssFooter.css"> 
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
                    <link rel="stylesheet" type="text/css" href="newcss.css">


                </head>
                <body>
                    <header>
                <label>
                            <input type="checkbox">
                            <div class="toggle">
                                    <span class="top_line common"></span>
                                    <span class="middle_line common"></span>
                                    <span class="bottom_line common"></span>
                            </div>

                            <div class="slide">
                                    <h1>Navigate to?</h1>
                                    <ul>	
                        <li><a href="AllApplications.php"><i class="far fa-comments"></i>All Application</a></li>		
                        <li><a href="AdmissionCoDash.php"><i class="far fa-comments"></i>Pending Applications</a></li>

                        <li><a href="ApprovedApplications.php"><i class="far fa-comments"></i>Approved Applications</a></li>
                        <li><a href="RejectedApplications.php"><i class="far fa-comments"></i>Rejected Applications</a></li>
                        <li><a href="NewUser.php"><i class="far fa-comments"></i>New User</a></li>
                        <li><a href="Users.php"><i class="far fa-comments"></i>View Users</a></li>

                        <li><a href="Logout.php"><i class="far fa-user"></i>Logout</a></li>	
                    </ul>
                            </div>
                    </label>
            </header>

                        <?php 

                        session_start();
                    if(isset($_SESSION['Lusername']) )
                    {

                        $_SESSION['Lusername'];
                        $_SESSION['usersid'];
                        $pID = $_GET['id'];

                        $host = "localhost";
                        $dbusername = "root";
                         $dbpassword = "password";
                        $dbname = "studentonline";

                        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

                        $sql = "SELECT * FROM tblapplications WHERE ID = '$pID'"  ;		
                        $result = mysqli_query($conn, $sql);

                        if($conn->query($sql))		
                        {

                            while($row = mysqli_fetch_array($result))
                            {   //Creates a loop to loop through results

                                $pID = $row['ID'];
                                $firstname = $row['firstname'];
                                $lastname = $row['lastname'];
                                $idnumber = $row['idnumber'];
                                $gender = $row['gender'];
                                $contact = $row['contact'];
                                $address = $row['address'];
                                $course = $row['course'];
                                $studyYear = $row['studyYear'];
                                $modeofstudy = $row['modeofstudy'];
                                $prefferedcampus = $row['prefferedcampus'];
                                $status = $row['status'];
                                $paid = $row['paid'];
    
                                 echo <<<_END
                                            <form color: black;" action="AllApplications.php" method="POST">
                                            <div class="title">
                                                <h2>Personal Details</h2>
                                            </div>
                            
                                            <div class="half">
                            
                                                <div class="item">
                                                    <label >First name:</label>
                                                    <label class="lbl-data" name="txtV1">$firstname</label>
                                                </div>
                            
                                                <div class="item">
                                                    <label >Last name:</label>
                                                    <label class="lbl-data" name="txtV1">$lastname</label>
                                                </div>
                                            </div>
                            
                                            <div class="half">
                            
                                                <div class="item">
                                                    <label>ID number:</label>
                                                    <label class="lbl-data" name="txtV1">$idnumber</label>
                                                </div>
                            
                                                <div class="item">
                                                    <label >Gender</label>
                                                    <label class="lbl-data" name="txtV1">$gender</label>
                                                </div>
                                            </div>
                            
                                            <div class="half">
                            
                                                <div class="item">
                                                    <label>Contact</label>
                                                    <label class="lbl-data" name="txtV1">$contact</label>
                                                </div> 
                                                
                            
                                                <div class="item">
                                                    <label>Address</label>
                                                    <label class="lbl-data" name="studyYear">$address</label>
                                                </div>
                                            </div>
                            
                                            <div class="title">
                                                <h2>Course of Interest</h2>
                                            </div>
                            
                                            <div class="half">
                                                <div class="item">
                                                    <label >Course:</label>
                                                    <label class="lbl-data" name="address">$course</label>
                                                </div>
                            
                                                <div class="item">
                                                    <label >Study Year:</label>
                                                    <label class="lbl-data" name="studyYear">$studyYear</label>
                                                </div>
                                            </div>
                            
                                            <div class="half">
                                                <div class="item">
                                                    <label >Mode Of Study:</label>
                                                    <label class="lbl-data" name="txtV1">$modeofstudy</label>
                                                </div>
                            
                                                <div class="item">
                                                    <label >Preffered Campus</label>
                                                    <label class="lbl-data" name="txtV1">$prefferedcampus</label>
                                                </div>
                                            </div>

                                            <div class="half">
                                                <div class="item">
                                                    <label >status:</label>
                                                    <label class="lbl-data" name="txtV1">$status</label>
                                                </div>
                            
                                                <div class="item">
                                                    <label >paid</label>
                                                    <label class="lbl-data" name="txtV1">$paid</label>
                                                </div>
                                            </div>


                                                    <div class="action" >
                                                        <input style="background: green;" type="submit" value ="previous page">
                                                        <a style="background: red;" href="RejectApplication.php?id=$idnumber" class="register-btn">Reject</a>
                                                        <a style="background: green;" href="AcceptApplication.php?id=$idnumber" class="register-btn">Accept</a>
                                                    </div>
                                                </form>
                                    _END;
                            }			
                        }
                        else
                        {
                        echo "Error: ". $sql . "<br>" . $conn->error;
                        }
                        $conn->close(); 

                                  

                                }
                                else
                                {
                                    echo '<script>alert("Access denied please login")</script>';

                                   echo header("Location: index.php");
                                }
                                ?>

                </body>
            </html>

