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
                        <h1>Payment</h1>
                    </div>

                    <?php
                        session_start();
                        if(isset($_SESSION['Lusername']) )
                        {

                            $_SESSION['Lusername'];
                            $_SESSION['usersid'];

                            // $pID = $_GET['id'];
                            // $ui = $_GET['ui'];
                            $idnum = $_GET['idnum'];

                            echo <<<_END

                                        <form color: black;" action="ProcessPayment.php?id=$idnum" method="POST">
                                        <div class="title">
                                            <h2>Payment for ID number '<lable name="idnumber" value="$idnum">$idnum</label>'</h2>
                                        </div>
                        
                                        <div class="half">
                        
                                            <div class="item">
                                                <label >Name on Card:</label>
                                                <input type="text" placeholder="Name on Card" name="name">
                                            </div>
                        
                                            <div class="item">
                                                <label >Card Number:</label>
                                                <input type="text" placeholder="Card umber" name="cardnum">
                                            </div>
                                        </div>
                        
                                        <div class="half">
                        
                                            <div class="item">
                                                <label>Exp Date:</label>
                                                <input type="text" placeholder="Expiry Date" name="expdate">
                                            </div>
                        
                                            <div class="item">
                                                <label>CVV:</label>
                                                <input type="text" placeholder="CVV" name="cvv">
                                            </div>
                        
                                        </div>
                        
                                        <div class="action" >
                                            <input type="submit" style="background: green;"value = "Pay & submit Application">
                                            <input type="reset" style="background: green;" value = "Reset">
                                            <a href="StudetDash.php" class="btn-view" onclick="" name="back">Back</a>
                                        </div>
                                    </form>

                                    _END;
                        }

                    ?>
            </body>
        </html>