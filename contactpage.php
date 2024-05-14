<!--Contact Page
Author: Manjeet Panwar
Date: 2021
-->

<!--PHP script for a web form-->
<?php
    $message_sent = false;
    
    if(isset($_POST['email']) && $_POST['email'] != ''){

        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
            
            // submit the form
            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $userSubject = $_POST['subject'];
            $message = $_POST['message'];

            $to = "bombaymasala127@gmail.com";
            $body = "";

            $body .= "From: ".$userName. "\r\n";
            $body .= "Email: ".$userEmail. "\r\n";
            $body .= "Message: ".$message. "\r\n";

            mail($to,$userSubject,$body);

            $message_sent = true;
        }  
        else{
            $invalid_class_name = "form-invalid";
        }  

    
    }
?> 

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/css/mdb.min.css" rel="stylesheet"> 
    
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/webform.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
    <script src="./js/form.js"></script> <!--js.form allows the webform to work-->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" scr="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
    

    <script>
        $(function(){
            var includes =$('[data-include]');
            jQuery.each(includes, function(){
                var file = 'views/' + $(this).data('include')+ '.html';
                $(this).load(file);
            });
        });
    </script> 
    <title>Contact us</title>
</head>   

<body>
    <div data-include="scrolling_text"></div>
    <div data-include="nav"></div>
    
    <!-- Code if webform succefully submitted -->
    <?php
    if($message_sent):
    ?>
        <h3 style = "font: bolder; color:white; left:0; line-height: 200px; margin-top: -100px; position: absolute; text-align: center; top: 50%; width: 100%;">Thanks, we'll be in touch</h3>
    ?>

    <?php

    else:
    ?>
        <div class="row" style="margin-left: auto; margin-right: auto;">
        <!--<div class="contact">-->
            <div class="column" style="text-align: center; width: 100%; height: auto;">
                <div class ="info-container" style="margin-left: auto; margin-right: auto;>
                    <a title=""><i class="fa fa-phone-square" id="phone" aria-hidden="true"></i>
                    <span>06 358 0714</span>
            
                    <br> <a title=""><i class="fa fa-map-marker" id="address" aria-hidden="true"></i>
                    <span>127 Botanical Road, Palmerston North</span>

                    <br> <b>Opening Hours</b>
                    <br> <b>Mon-Sat</b>
                    <br> 11:00am - 9:30pm
                    <br> <b>Sun</b>
                    <br> 4:00pm - 9:30pm

                    <!--Facebook plugin -->
                    <br><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbombaymasala127%2F&tabs&width=340&height=70&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="70" style="border:none;overflow:hidden; width:100%; height:auto;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
                
            </div>
            <div class="column" style="background-color: #333333; color: white;">
                <div class="container">
                    <form action="contactpage.php" method="POST" class="form">
                        <div class="form-group">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" tabindex="1" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" class="form-control <?= $invalid_class_name ?? "" ?>" id="email" name="email" placeholder="Your Email" tabindex="2" required>
                        </div>
                        <div class="form-group">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" tabindex="3" required>
                        </div>
                        <div class="form-group">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message or Leave us a review...." tabindex="4"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn">Send Message!</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    
        <!--Map plugin-->
        <div class="map-responsive">   
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3040.340908994283!2d175.58749911558425!3d-40.356964691548555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d404d252885d0ff%3A0x8e7f22fe92872d94!2sBombay%20Masala%20Authentic%20Indian%20Takeaway!5e0!3m2!1sen!2snz!4v1607813098374!5m2!1sen!2snz" 
            maxwidth="600" maxheight="450" frameborder="0" style="border:0;" 
            allowfullscreen="" aria-hidden="false" 
            tabindex="0"></iframe>
        </div>
    
    <div data-include="footer"></div>

    <?php
    endif;
    ?>
   

</body>
</html>





