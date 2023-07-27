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
                        <li><a href="AdmissionCoDash.php"><i class="far fa-comments"></i>Pending Applications</a></li>

                        <li><a href="AdminNewApplication.php"><i class="far fa-comments"></i>New Application</a></li>
                        <li><a href="ApprovedApplications.php"><i class="far fa-comments"></i>Approved Applications</a></li>
                        <li><a href="RejectedApplications.php"><i class="far fa-comments"></i>Rejected Applications</a></li>
                        <li><a href="Users.php"><i class="far fa-comments"></i>View Users</a></li>

                        <li><a href="Logout.php"><i class="far fa-user"></i>Logout</a></li>	
                    </ul>
                </div>
                </label>
            </header>  

                    <div class="topic-t">
                        <h1>Add New</h1>
                    </div>

            <form color: black; action="SaveNewUser.php" method="POST">
                <div class="title">
                    <h2>Login Details</h2>
                </div>

                <div class="half">

                    <div class="item">
                        <label >Username:</label>
                        <input type="text" placeholder="user name" name="uname">
                    </div>

                    <div class="item">
                        <label >Password:</label>
                        <input type="text" placeholder="password" name="password">
                    </div>
                </div>

                <div class="full">

                    <div class="item">
                        <label >Role:</label>
                            <select style="color:Red; outline: 5px;" value="Choose from list" class="input-bo" name="role" size="1">
                                <option value="empty"> </option>
                                <option value="Advisor">Student advisor</option>
                                <option value="cashiers">Cashier</option>
                                <option value="nurses">Nurse/Doctor</option>
                                <option value="AdmissionsCoo">Admissions Coordinator</option>
                            </select>
                    </div>
                </div>

                <div class="action" >
                    <input type="submit" style="background: green;"value = "Add">
                    <input type="reset" style="background: green;" value = "Reset">
                </div>
            </form>


            </body>
        </html>