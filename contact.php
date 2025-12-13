<?php include "header.php"; ?>
    <?php
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;
    ?>

<?php

if( isset($_POST['form-contact'])){
    try{
        $name = strip_tags($_POST['name']);
        $email = strip_tags($_POST['email']);
        $phone = strip_tags($_POST['phone']);
        $message = strip_tags($_POST['mesaage']);

        if($_POST['name'] == ''){
            throw new Exception('please enter your name');
        }
        if($_POST['email'] == ''){
            throw new Exception('please enter your email');
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception('please enter your valid email');
        }
        if($_POST['phone'] == ''){
            throw new Exception('please enter your phone number');
        }
        if($_POST['message'] == ''){
            throw new Exception('please enter your message');
        }



    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'sandbox.smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Username = '3be5c1a5027ec7';
    $mail->Password = 'ec9756d11b34d2';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('contact@example.com');
    $mail->addAddress('arefindev@gmail.com');
    $mail->addReplyTo('contact@example.com');
    $mail->isHTML(true);
    $mail->Subject = 'TEST SUBJECT';
    $mail->Body = 'TEST BODY FOR EMAIL';

    $mail->send();

    }catch(Exception $e){
        $error_message = $e->getMessage();
    }
}


?>

<!-- breadcrumb start -->
<div class="breadcrumb">
    <div class="container">
        <ul class="list-unstyled d-flex align-items-center m-0">
            <li><a href="index.php">Home</a></li>
            <li class="ml_10 mr_10">
                <i class="fas fa-chevron-right"></i>
            </li>
            <li>Contact US</li>
        </ul>
    </div>
</div>
<!-- breadcrumb end -->

<main id="MainContent" class="content-for-layout">
    <div class="contact-page">

        <!-- contact box start -->
        <div class="contact-box mt-100">
            <div class="contact-box-wrapper">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-envelope" style="font-size: 40px;"></i>
                                </div>
                                <div class="contact-details">
                                    <h2 class="contact-title">Mail Address</h2>
                                    <a class="contact-info" href="mailto:info@example.com">info@example.com</a>
                                    <a class="contact-info" href="mailto:info2@example.com">info2@example.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-location-arrow" style="font-size: 40px;"></i>
                                </div>
                                <div class="contact-details">
                                    <h2 class="contact-title">Office Location</h2>
                                    <p class="contact-info">2715 Ash Dr. San Jose, South Dakota 83475</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-phone" style="font-size: 40px;"></i>
                                </div>
                                <div class="contact-details">
                                    <h2 class="contact-title">Phone Number</h2>
                                    <a class="contact-info" href="tel:(201) 555-0124">(201) 555-0124</a>
                                    <a class="contact-info" href="tel:(307) 555-0133">(307) 555-0133</a>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
        <!-- contact box end -->

        <!-- about banner start -->
        <div class="contact-form-section mt-100">
            <div class="container">
                <div class="contact-form-area">
                    <div class="section-header mb-4">
                        <h2 class="section-heading">Drop us a line</h2>
                        <p class="section-subheading">We would like to hear from you.</p>
                    </div>
                    <div class="contact-form--wrapper">
                        <form action="" class="contact-form" method="post">
                            <div class="row">
                                <div class="col-lg-4 col-md-12">
                                    <fieldset>
                                        <input type="text" placeholder="Full Name *" name="name">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <fieldset>
                                        <input type="email" placeholder="Email Address *" name="email">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <fieldset>
                                        <input type="text" placeholder="Phone Number *" name="phone">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <fieldset>
                                        <textarea cols="20" rows="6" placeholder="Message *" name="message"></textarea>
                                    </fieldset>
                                    <button type="submit" class="position-relative review-submit-btn contact-submit-btn" name="form-contact">SEND MESSAGE</button>
                                </div>
                            </div>                                    
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- about banner end -->
    </div>            
</main>

       <?php include "footer.php" ?>