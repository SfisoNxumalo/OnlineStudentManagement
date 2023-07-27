<!DOCTYPE html>
    <html>
        <head>
            <title></title>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
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
                        <li><a href="AdmissionCoDash.php"><i class="far fa-comments"></i>Pending Applications</a></li>

                        <li><a href="AdminNewApplication.php"><i class="far fa-comments"></i>New Application</a></li>
                        <li><a href="ApprovedApplications.php"><i class="far fa-comments"></i>Approved Applications</a></li>
                        <li><a href="NewUser.php"><i class="far fa-comments"></i>New User</a></li>
                        <li><a href="Users.php"><i class="far fa-comments"></i>View Users</a></li>

                        <li><a href="Logout.php"><i class="far fa-user"></i>Logout</a></li>	
                    </ul>
                </div>
                </label>
            </header> 
                
            <div class="information" >

                    <form>
                        <label style="font-size: 18px; font-weight: bolder; align: center;">Rejected Applications</label>
                        <div class="intro-table" method="POST" action="">
                            
                            <table class="table-services" style="color: black;">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>firstname</th>
                                    <th>lastname</th>    
                                    <th>idnumber</th>
                                    <th>gender</th>    
                                    <th>studyYear</th>
                                    <th>paid</th>    
                                    <th>Option</th>    
                                </tr>    
                            </thead>
                            
                            <tbody>
                                
                                <?php 
                                
                                 session_start();
                
                                if(isset($_SESSION['Lusername']) )
                                {

                                    $_SESSION['Lusername'];
                                    $_SESSION['usersid'];
                                    
                                    $host = "localhost";
                                    $dbusername = "root";
                                    $dbpassword = "password";
                                    $dbname = "studentonline";

                                    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

                                    $sql = "SELECT ID, firstname, lastname, idnumber, gender, studyYear, paid FROM tblapplications WHERE status = 'Rejected'";		
                                    $result = mysqli_query($conn, $sql);

                                    $rowCount = 0;

                                    if($conn->query($sql))		
                                    {

                                        while($row = mysqli_fetch_array($result))
                                        {   //Creates a loop to loop through results

                                            $rowCount++;

                                            $pID = $row['ID'];
                                            $firstname = $row['firstname'];
                                            $lastname = $row['lastname'];
                                            $idnumber = $row['idnumber'];
                                            $gender = $row['gender'];
                                            $studyYear = $row['studyYear'];
                                            $paid = $row['paid'];

                                            echo <<<_END

                                                        <tr>
                                                            <td>$pID</td>
                                                            <td>$firstname</td> 
                                                            <td>$lastname</td>
                                                            <td>$idnumber</td> 
                                                            <td>$gender</td> 
                                                            <td>$studyYear</td>
                                                            <td>$paid</td> 

                                                            <td>
                                                                <div class="div-btn">
                                                                    <a href="ViewFullApplication.php?id=$pID" class="btn-view" onclick="" name="view">View</a>
                                                                    <a href="AdminPayApplication.php?idnum=$idnumber" class="btn-view" onclick="" name="pay">Pay</a>
                                                                </div>
                                                                          
                                                            </td>
                                                        </tr>
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
                            </tbody>
                            
                            </table>
                        </div>
                    <br>
                   
                </form>
            </div>
        </body>
    </html>