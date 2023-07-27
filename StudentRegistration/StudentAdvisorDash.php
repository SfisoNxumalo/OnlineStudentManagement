
                                
<?php 

    session_start();

if(isset($_SESSION['Lusername']) )
{

    $loggeduser = $_SESSION['Lusername'];
    $_SESSION['usersid'];
    
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "password";
    $dbname = "studentonline";

       echo <<<_END

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
                                        <li><a href="Logout.php"><i class="far fa-user"></i>Logout</a></li>	
                                    </ul>
                                </div>
                                </label>
                            </header> 
                                
                            <div class="information" >

                                    <form>
                                    <label style="font-size: 18px; font-weight: bolder; align: center;">Welcome $loggeduser</label>
                                        <label style="font-size: 18px; font-weight: bolder; align: center;">Departments</label>
                                        <div class="intro-table" method="POST" action="">
                                            
                                            <table class="table-services" style="color: black;">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>name</th>                    
                                                    <th>Address</th>                    
                                                    <th>Phone</th>    
                                                    <th>Email</th>    
                                                </tr>    
                                            </thead>
                                            
                                            <tbody>

            _END;

    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

    $sql = "SELECT * FROM tbldepartment";		
    $result = mysqli_query($conn, $sql);

    $rowCount = 0;

    if($conn->query($sql))		
    {

        while($row = mysqli_fetch_array($result))
        {   //Creates a loop to loop through results



            $pID = $row['ID'];
            $Name = $row['Name'];
            $Address = $row['Address'];
            $Phone = $row['Phone'];
            $Email = $row['Email'];

            echo <<<_END

                        <tr>
                            <td>$pID</td>
                            <td>$Name</td> 
                            <td>$Address</td>
                            <td>$Phone</td>
                            <td>$Email</td>
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

    

            echo <<<_END


                        </tbody>

                        </table>
                        </div>
                        <br>

                        </form>
                        </div>
                        </body>
                        </html>

            _END;
    ?>
                                