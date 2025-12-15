<?php include "header.php"; ?>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
?>

<?php
if (isset($_POST['form-contact'])) {
    try {
        $name = strip_tags($_POST['name']);
        $email = strip_tags($_POST['email']);
        $phone = strip_tags($_POST['phone']);
        $message = strip_tags($_POST['message']);

        if ($name == '') {
            throw new Exception('please enter your name');
        }
        if ($email == '') {
            throw new Exception('please enter your email');
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('please enter your valid email');
        }
        if ($phone == '') {
            throw new Exception('please enter your phone number');
        }
        if ($message == '') {
            throw new Exception('please enter your message');
        }

        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = true;
        $mail->Port = SMTP_PORT;
        $mail->Username = 'SMTP_USERNAME';
        $mail->Password = 'SMTP_PASSWORD';
        $mail->SMTPSecure = 'SMTP_ENCRYPTION';


        $mail->setFrom('SMTP_FROM');
        $mail->addAddress('nazmuldev@gmail.com');
        $mail->addReplyTo('contact@example.com');

        $mail_message = "<h3>visitor information </h3>";
        $mail_message .= '<strong>Name : </strong> <br>' . $name . '<br>';
        $mail_message .= '<strong>Email : </strong><br>' . $email . '<br>';
        $mail_message .= '<strong>Phone : </strong><br>' . $phone . '<br>';
        $mail_message .= '<strong>Message : </strong><br>' . nl2br($message) . '<br>';

            $mail->isHTML(true);
        $mail->Subject = 'contact form';
        $mail->Body = $mail_message;

        $mail->send();
        unset($_POST['name']);
        unset($_POST['email']);
        unset($_POST['phone']);
        unset($_POST['message']);

        $_SESSION['success_message'] = 'Thank you for contacting us. We will get back to you shortly.';
        header("Location: contact.php");
        exit();
    

    } catch (Exception $e) {
        $error_message = $e->getMessage();
        $_SESSION['error_message'] = $error_message;
        header("Location: contact.php");
        exit();
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
                        <?php
                        if (isset($_SESSION['error_message'])) {
                            echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error_message'] . '</div>';
                        }if (isset($_SESSION['success_message'])) {
                            echo '<div class="alert alert-success" role="alert">' . $_SESSION['success_message'] . '</div>';
                        }    
                        ?>
                        <form action="" class="contact-form" method="post">
                            <div class="row">
                                <div class="col-lg-4 col-md-12">
                                    <fieldset>
                                        <input type="text" placeholder="Full Name *" name="name" value="<?php echo (isset($_POST['name'])) ? $_POST['name'] : '' ?>">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <fieldset>
                                        <input type="email" placeholder="Email Address *" name="email" value="<?php echo (isset($_POST['email'])) ? $_POST['email'] : '' ?>">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <fieldset>
                                        <input type="text" placeholder="Phone Number *" name="phone" value="<?php echo (isset($_POST['phone'])) ? $_POST['phone'] : '' ?>">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <fieldset>
                                        <textarea cols="20" rows="6" placeholder="Message *" name="message"><?php echo (isset($_POST['message'])) ? $_POST['message'] : '' ?></textarea>
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