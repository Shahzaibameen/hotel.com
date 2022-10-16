<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Book A Room </title>
</head>

<body class="main_bg">
    <div class="form">
        <div class="form-text">
            <h1><span></span>Book Now <span></span></h1>
            <p>Book a room related to your intent</p>
        </div>
        <div class="main-form">
            <form action="index.php" method="POST">
                <div>
                    <span>Name </span>
                    <input type="text" name="name" id="name" placeholder="Write your name here..." required>
                </div>
                <div>
                    <span>Email</span>
                    <input type="email" name="email" id="name" placeholder="Write your email here..." required> 
                </div>

                <div>
                    <span>Phone No.</span>
                    <input type="number" name="phone" id="number" placeholder="Write your number here..." required>
                </div>

                <div>
                    <span>Number of adults</span>
                    <input type="number" name="adults" id="number" placeholder="Write your number here..." required>
                </div>
                <div>
                    <span>Number of child</span>
                    <input type="number" name="child" id="number" placeholder="Write your number here..." required>
                </div>

                <div>
                    <span>Check in date</span>
                    <input type="date" name="checkindate" id="time" placeholder="Time" required>
                </div>
                <div>
                    <span>Check out date</span>
                    <input type="date" name="checkoutdate" id="date" placeholder="date" required>
                </div>
                <div>
                    <!-- <---this is the select option--->
                    <span>Select room</span>
                    <select name="select" class="People_select" id="people" required>
                        <option value=""><---select room---></option>
                        <option value="1">Room201....RS18000</option>
                        <option value="2">room202....2000</option>
                        <option value="3">room203....price</option>
                        <option value="4">room204....price</option>
                        <option value="4">room205....price</option>
                        <option value="4">room206....price</option>
                        <option value="4">room207....price</option>
                        <option value="4">room208....price</option>
                        <option value="4">room209....price</option>
                        <option value="4">room210....price</option>
                        <option value="4">room211....price</option>
                        <option value="4">room212....price</option>
                        
                    </select>
                    <!-- <---this is the select option--->
                </div>

                
                
                <div id="submit">
                    <input type="submit" value="SUBMIT" id="submit">
                </div>


            </form>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br>
</body>

</html>

<?php


$name = $_POST['name'];
$email = $email $_POST['email'];
$phone = $_POST['phone'];
$adults = $_POST['adults'];
$child = $_POST['child'];
$checkindate = $_POST['checkindate'];
$checkourdate = $_POST['checkoutdate'];
$select = $_POST['select'];

$email_from = 'tajpalacehotel.com';
$email_subject = 'New Order Placement';
$email_body = "User Name: $name.\n".
              "User Email: $email_email.\n".
              "phone: $phone.\n".
              "User Message: $message.\n".
              "No of Adults: $adults.\n".
              "No of childs: $child.\n".
              "check in date: $checkindate.\n".
              "check out date: $checkoutdate.\n".
              "select droopdown: $select.\n".



$to = 'newtajpalacehotel@gmail.com';
$headers = "From: $email_from \r\n";
$headers .="Reply-To: $emial_emial \r\n";

mail($to,$email_body,$headers);
header("Location: contact.html");


?>