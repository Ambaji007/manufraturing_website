<?php session_start(); 
include('includes/header.php'); ?>

        <!-- page-title -->
        <div class="cmt-page-title-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="title-box">
                            <div class="page-title-heading">
                                <h1 class="title">Contact Us</h1>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.php"><i class="ti ti-home"></i> Home</a>
                                </span>
                                <span class="cmt-bread-sep"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                                <span><span>Contact Us</span></span>
                            </div>
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->
        </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">
        
        <!--contact-box-section-->
        <section class="cmt-row contact-box-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-box text-center">
                            <h5>Visit Our Place</h5>
                            <!-- <span>14 Branches Over The World</span> -->
                            <div class="contact-detail-box">
                                <div class="featured-icon">
                                    <div class="cmt-icon cmt-icon_element-color-skincolor cmt-icon_element-size-md"> 
                                    <!-- <i class="fa-location"></i>    -->
                                    <i class="fa fa-life-ring"></i>
                                    </div>
                                </div>
                                <span>Plot No.S-1,Technocrats Industrial Estate Phase II,Balanagar,Hyderabad-500037,Telangana.</span>
                                <h6><a href="https://goo.gl/maps/3PfK5M3hYWSAb7L4A?coh=178573&entry=tt" target="_blank">Locate us on map</a></h6>
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-box text-center">
                            <h5>Quick Contact</h5>
                            <span>Get Quick Touch With Us</span>
                            <div class="contact-detail-box">
                                <div class="featured-icon">
                                    <div class="cmt-icon cmt-icon_element-color-skincolor cmt-icon_element-size-md"> 
                                        <i class="flaticon flaticon-phone-call"></i>
                                    </div>
                                </div>
                                <span>Phone: +91 7942533221</span>
                                <span>Email: <a href="mailto%3sashyd@gmail.com">sashyd@gmail.com</a></span>

                                
                                <h6><a href="tel:+91 7942533221">Get call back</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-box text-center">
                            <h5>Visit Bitween</h5>
                            <span>Business Hours For Only Office</span>
                            <div class="contact-detail-box">
                                <div class="featured-icon">
                                    <div class="cmt-icon cmt-icon_element-color-skincolor cmt-icon_element-size-md"> 
                                        <i class="flaticon flaticon-clock"></i>
                                    </div>
                                </div>
                                <span>Mon - Satday: 9.00am to 6.00pm Sunday: Holiday</span>
                                <h6><a href="contact.php">Make an appointment</a></h6>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--contact-box-section end-->


<?php
if(isset($_SESSION['flash'])) {

$message_1 = $_SESSION['flash'];
unset($_SESSION['flash']); ?>
<?php //echo $message_1; ?>
<div class="alert alert-success" role="alert">
<?php echo $message_1; ?>
</div>

<?php } ?>

        <!--map-section end-->
        <div class="cmt-row map-section cmt-bgcolor-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        
                    <iframe widget="100%" height="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3805.77237633635!2d78.44197747434275!3d17.47060550040417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb91567b224b71%3A0xe723ffb8b47f16dc!2sSUN%20AUTOMATION%20SYSTEMS!5e0!3m2!1sen!2sin!4v1684474085376!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                    </div>
                    <div class="col-lg-6">
                        <div class="spacing-12 box-shadow cmt-bgcolor-white">
                            <!-- section title -->
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h4 class="title">Call us or fill the Form</h4>
                                </div>
                            </div><!-- section title end -->
                            <form id="cmt-quote-form" class="cmt-quote-form clearfix" method="post" action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="name" type="text" class="form-control" value="" placeholder="Full Name" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="address" type="text" value="" placeholder="Email Address" required="required" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input name="phone" type="text" value="" placeholder="Phone Number" required="required" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" rows="3" placeholder="Message" class="form-control" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group text-left">
                                            <button type="submit" name="submit" class="cmt-btn cmt-btn-size-md cmt-btn-bgcolor-skincolor w-100" value="">
                                                Submit quote
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--map-section-->

    </div><!--site-main end-->



    <?php 
if(isset($_POST['submit'])){

   
    $name = $_POST['name']."<br>";
    $phone = $_POST['phone']."<br>";
    $email=$_POST['address']."<br>";
    $message = $_POST['message']."<br>";
    $subject = $_POST['subject']."<br>";

if(true){
 
    $_SESSION["flash"]= "mail have mean sent to given mail id";
    
   // echo $_SESSION["flash"];die; ?>


<script type="text/javascript">
window.location.href = 'contact.php';
</script>

<?php } }?>



<?php include('includes/footer.php'); ?>
