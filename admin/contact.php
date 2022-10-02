<?php
session_start();
include('header/header.php');
include('header/connection.php');
if (isset($_SESSION['loggedin']) == true) {
    include('header/navC1.php');
} else {
    include('header/nav.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/contact.css">
</head>

<body>
    <div class="container">

        <div class="heading">
            <h2> Contact Us</h2>
        </div>

        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <form id="contact-form" method="post" action=" " role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="firstname">First Name <span class="red">*</span></label>
                            <input required type="text" name="firstname" class="form-control" id="firstname" value="">
                        </div>

                        <div class="col-md-6">
                            <label for="lastname">Last Name <span class="red">*</span></label>
                            <input required type="text" name="name" class="form-control" id="name" value=" ">
                        </div>

                        <div class="col-md-6">
                            <label for="email">Email <span class="red">*</span></label>
                            <input required type="email" name="email" class="form-control" id="email" value=" ">
                        </div>

                        <div class="col-md-6">
                            <label for="phone">Phone number<span class="red">*</span></label>
                            <input type="tel" name="phone" class="form-control" id="phone" value=" ">
                        </div>

                        <div class="col-md-12">
                            <label for="message">Message <span class="red">*</span></label>
                            <textarea required name="message" id="message" class="form-control" rows="4"> </textarea>
                        </div>

                        <div class="col-md-12">
                            <p class="red"><i>* This information is required ! </i></p>
                        </div>

                        <div class="col-md-12">
                            <input name="isSuccess" type="submit" class="button1" value="send">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <?php
    $emailto = "anantmani31@gmail.com";

    if (isset($_POST['isSuccess'])) {
        $firstname = $_POST['firstname'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $id = uniqid();
        $emailText = "";

        $q = $db->prepare("INSERT INTO contact(id,firstname,name,email,phone,message) VALUES (:id,:firstname,:name,:email,:phone,:message)");

        $q->bindValue('id', $id);
        $q->bindValue('firstname', $firstname);
        $q->bindValue('name', $name);
        $q->bindValue('email', $email);
        $q->bindValue('phone', $phone);
        $q->bindValue('message', $message);

        $array = array("firstname" => "$firstname", "name" => "$name", "email" => "$email", "phone" => "$phone", "message" => "$message");

        if ($q->execute()) {

            $emailText .= "Firstname: {$array['firstname']}\nLastname: {$array['name']}\nEmail: {$array['email']}\nPhone number: {$array['phone']}\nMessage: {$array['message']}\n";

            $headers = "From: {$array['firstname']} {$array['name']} <{$array['email']}>\r\n\Reply-To: {$array['email']}";
            mail($emailto, "a message from your site", $emailText, $headers);

            echo "<script>alert('Message Succesfully Sent!')</script>";
        } else {
            echo "<script>alert('Message Sending Failed!')</script>";
        }
    }

    ?>
    <script>
        $(function() {

            $('#contact-form').submit(function(e) {

                e.prevendDefault();
                $('.comments').empty();

                var postData = $('#contact-form').serialize();

                $.ajax({
                    type: 'POST',
                    url: 'contact.php',
                    data: postData,
                    dataType: 'json',
                    success: function(result) {

                        if (result.isSuccess) {
                            $('#contact-form').append("<p class='thank-you'> Your message has been sent. Thank you for contacting me !</p>");
                            $('#contact-form')[0].reset();
                        } else {
                            $('#firstname + .comments').html(result.firstnameError);
                            $('#name + .comments').html(result.nameError);
                            $('#email + .comments').html(result.emailError);
                            $('#phone + .comments').html(result.phoneError);
                            $('#message + .comments').html(result.messageError);
                        }
                    }
                })
            });
        });
    </script>
</body>

</html>