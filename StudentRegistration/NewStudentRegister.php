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
        </header>

                    <div class="topic-t">
                        <h1>Register</h1>
                    </div>

            <form color: black;" action="SaveStudentRegistration.php" method="POST">

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
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other..</option>
                            </select>
                    </div>
                </div>

                <div class="half">

                    <div class="item">
                        <label>Contact</label>
                        <input type="text" name="contact" placeholder="contact">
                    </div> 
                    

                    <div class="item">
                        <label>Address</label>
                        <input placeholder="Address"  type="text" name="address">
                    </div>
                </div>

                <div class="title">
                    <h2>Course of Interest</h2>
                </div>

                <div class="half">
                    <div class="item">
                        <label >Course:</label>
                            <select style="color:Red;" value="Choose from list" class="input-bo" name="course" size="1">
                                <option value="empty"> </option>
                                <option value="dsd">Diploma in Systems Development</option>
                                <option value="bsd">Bachelor in Systems Development</option>
                                <option value="dns">Diploma in Network Systems </option>
                                <option value="bns">Bachelor in Network Systems</option>
                            </select>
                    </div>

                    <div class="item">
                        <label >Study Year:</label>
                            <select style="color:Red;" value="Choose from list" class="input-bo" name="Studyyear" size="1">
                                <option value="empty"> </option>
                                <option value="2023">2023 July</option>
                                <option value="2024">2024</option>
                            </select>
                    </div>
                </div>

                <div class="half">
                    <div class="item">
                        <label >Mode Of Study:</label>
                            <select style="color:Red;" value="Choose from list" class="input-bo" name="modeofstudy" size="1">
                                <option value="empty"> </option>
                                <option value="ft">Full time</option>
                                <option value="pt">Part time</option>
                            </select>
                    </div>

                    <div class="item">
                        <label >Preffered Campus</label>
                            <select style="color:Red;" value="Choose from list" class="input-bo" name="campus" size="1">
                                <option value="empty"> </option>
                                <option value="soweto">Soweto</option>
                                <option value="alberton">Alberton</option>
                                <option value="limpopo">Limpopo</option>
                                <option value="rosebank">Rosebank</option>
                                <option value="durban">Durban</option>
                                <option value="Randburg">Randburg</option>
                                <option value="capetown">Capetown</option>
                            </select>
                    </div>
                </div>

                <div class="action" >
                    <input type="submit" style="background: green;"value = "Proceed">
                    <input type="reset" style="background: green;" value = "Reset">
                </div>
            </form>


            </body>
        </html>