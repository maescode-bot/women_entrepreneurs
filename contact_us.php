<?php 
session_start();
include('includes/config.php');

?>

<!DOCTYPE html>
<html>

<?php
    include("includes/header.inc.php");
 ?>

<!--content starts here-->
<div role="main" class="main">

                <section class="page-header page-header-modern custom-page-header-style-1 bg-color-primary page-header-lg mb-0">
                    <div class="container container-lg py-5">
                        <div class="row">
                            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                                <h1 class="font-weight-extra-bold text-14 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Contact Us</h1>
                            </div>
                            <div class="col-md-4 order-1 order-md-2 align-self-center">
                                <ul class="breadcrumb d-block text-md-right breadcrumb-light appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="active">Contact Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section section-height-3 bg-color-transparent border-0 pb-0 m-0" style="background-image: url(img/demos/it-services/backgrounds/dots-background-3.png); background-repeat: no-repeat; background-position: 112% 100%;">
                  <div class="section custom-section-full-width bg-color-transparent border-0 mt-1 mb-1" style="background-image: url(img/demos/it-services/backgrounds/dots-background-4.png); background-repeat: no-repeat; background-position: top right;">
                    <div class="container container-lg mt-3">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="overflow-hidden mb-2">
                                    <span class="d-block font-weight-bold custom-text-color-grey-1 text-center line-height-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">GET IN TOUCH</span>
                                </div>
                                <div class="overflow-hidden mb-4">
                                    <h2 class="text-color-dark font-weight-bold text-center text-8 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">How Can We Help?</h2>
                                </div>
                                <p class="custom-text-size-1 text-center mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Contact us for more information or leave a message for us</p>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                                <form class="contact-form" action="php/contact-form.php" method="POST">
                                    <div class="contact-form-success alert alert-success d-none mt-4">
                                        <strong>Success!</strong> Your message has been sent to us.
                                    </div>

                                    <div class="contact-form-error alert alert-danger d-none mt-4">
                                        <strong>Error!</strong> There was an error sending your message.
                                        <span class="mail-error-message text-1 d-block"></span>
                                    </div>
                                    
                                    <div class="form-row row-gutter-sm">
                                        <div class="form-group col-lg-6 mb-4">
                                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control border-0 custom-box-shadow-1 py-3 px-4 h-auto text-3 text-color-dark" name="name" id="name" required placeholder="Your Name">
                                        </div>
                                        <div class="form-group col-lg-6 mb-4">
                                            <input type="text" value="" data-msg-required="Please enter your phone number." maxlength="100" class="form-control border-0 custom-box-shadow-1 py-3 px-4 h-auto text-3 text-color-dark" name="phone" id="phone" required placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="form-row row-gutter-sm">
                                        <div class="form-group col-lg-6 mb-4">
                                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control border-0 custom-box-shadow-1 py-3 px-4 h-auto text-3 text-color-dark" name="email" id="email" required placeholder="Your Name">
                                        </div>
                                        <div class="form-group col-lg-6 mb-4">
                                            <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control border-0 custom-box-shadow-1 py-3 px-4 h-auto text-3 text-color-dark" name="subject" id="subject" required placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col mb-4">
                                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control border-0 custom-box-shadow-1 py-3 px-4 h-auto text-3 text-color-dark" name="message" id="message" required placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col mb-0">
                                            <button type="submit" class="btn btn-primary btn-outline text-color-dark font-weight-semibold border-width-4 custom-link-effect-1 text-1 text-xl-3 d-inline-flex align-items-center px-4 py-3" data-loading-text="Loading...">SUBMIT <i class="custom-arrow-icon ml-5"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                </section>

               
                
            </div>
<!--content ends here-->

<?php
  include("includes/footer.inc.php");
?>