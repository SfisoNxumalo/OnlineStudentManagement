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
                    <li><a href="NurseDocDash.php"><i class="far fa-comments"></i>View Medicals</a></li>
                        <li><a href="Logout.php"><i class="far fa-user"></i>Logout</a></li>	
                    </ul>
                </div>
                </label>
            </header> 

                    <div class="topic-t">
                        <h1>Medical Form</h1>
                    </div>

            <form color: black;" action="NurseSaveMedical.php" method="POST">
                <div class="title">
                    <h2>Personal Details</h2>
                </div>

                <div class="half">

                    <div class="item">
                        <label >First name:</label>
                        <input type="text" placeholder="first name" name="firstname">
                    </div>

                    <div class="item">
                        <label >Last name:</label>
                        <input type="text" placeholder="last name" name="lastname">
                    </div>
                </div>

                <div class="half">

                    <div class="item">
                        <label>ID number:</label>
                        <input type="text" placeholder="Id number" name="idnumber">
                    </div>

                    <div class="item">
                        <label >Gender</label>
                            <select style="color:Red;" value="Choose from list" class="input-bo" name="gender" size="1">
                                <option value="empty"> </option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other..</option>
                            </select>
                    </div>
                </div>


                <div class="title">
                    <h2>Health Details</h2>
                </div>

                <div class="half">
                    <div class="item">
                        <label>Any Disabilities?</label>
                            <select style="color:Red;" value="Choose from list" class="input-bo" name="disability" size="1">
                                <option value="empty"> </option>
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                    </div>

                    <div class="item">
                        <label >Any Allergies?</label>
                            <select style="color:Red;" value="Choose from list" class="input-bo" name="allergies" size="1">
                                <option value="empty"> </option>
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                    </div>
                </div>

                <div class="half">

                    <div class="item">
                        <label >If yes state disabilities</label>
                        <input type="text" placeholder="disabilities" name="disa">
                    </div>

                    <div class="item">
                        <label >If yes state allergies</label>
                        <input type="text" placeholder="allergies" name="alle">
                    </div>
                </div>

                <div class="action" >
                    <input type="submit" style="background: green;"value = "Submit">
                    <input type="reset" style="background: green;" value = "Reset">
                </div>
            </form>


            </body>
        </html>