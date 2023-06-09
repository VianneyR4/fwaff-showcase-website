<?php include "header.php"; ?>
        <!-- ***** Welcome Area Start ***** -->
        <section id="home" class="section welcome-area bg-overlay overflow-hidden d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Welcome Intro Start -->
                    <div class="col-12 col-md-7">
                    <?php
                        $rr=mysqli_query($con,"SELECT * FROM static");
                        $r = mysqli_fetch_row($rr);
                        $stitle = $r[1];
                        $stext=$r[2];
                    ?>

                        <div class="welcome-intro">
                            <h1 class="text-white"><?php print $stitle?></h1>
                            <p class="text-white my-4"><?php print $stext?></p>
                            <!-- Buttons -->
                            <div class="button-group">
                                <a href="about.php" class="btn btn-bordered-white">Read More</a>
                                <a href="contact.php" class="btn btn-bordered-white d-none d-sm-inline-block">Contact Us</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-5">
                        <!-- Welcome Thumb -->
                        <div class="welcome-thumb-wrapper mt-5 mt-md-0">
                            <span class="welcome-thumb-1">
                                <img class="welcome-animation d-block ml-auto" src="assets/img/welcome/thumb_1.png" alt="">
                            </span>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Shape Bottom -->
            <div class="shape shape-bottom">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
                    <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
        c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
        c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
                </svg>
            </div>
        </section>
        <!-- ***** Welcome Area End ***** -->

        <!-- ***** Promo Area Start ***** -->
        <section class="section promo-area ptb_100">
            <div class="container">
                <div class="row">


                <?php
				   $q="SELECT * FROM  why_us ORDER BY id DESC LIMIT 3";

                    $r123 = mysqli_query($con,$q);

                    while($ro = mysqli_fetch_array($r123))
                    {

                        $title="$ro[title]";
                        $detail="$ro[detail]";

                    print "
                    <div class='col-12 col-md-6 col-lg-4 res-margin'>
                    <!-- Single Promo -->
                    <div class='single-promo color-1 bg-hover hover-bottom text-center p-5' style='min-height: 350px !important'>
                        <h4 class='mb-3' style='font-size: 35px !important'>$title</h4>
                        <p>$detail</p>
                    </div>
                    </div>
                    ";
                    }
                ?>




                </div>
            </div>
        </section>
        <!-- ***** Promo Area End ***** -->

        <!-- ***** Content Area Start ***** -->

        <!-- ***** Content Area End ***** -->

        <!-- ***** Content Area Start ***** -->

        <!-- ***** Content Area End ***** -->

        <!-- ***** Service Area End ***** -->
        <section id="service" class="section service-area bg-grey ptb_150">
            <!-- Shape Top -->
            <div class="shape shape-top">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
                    <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
                c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
                c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
                </svg>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2>we provide the best services</h2>
                            <p class="d-none d-sm-block mt-4"><?php print $service_text?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class='col-12 col-md-6 col-lg-4'>
                        <!-- Single Service -->
                        <div class='single-service p-4'  style='border: solid 1px #788282;'>
                            <h3 class='my-3'>Service number 1</h3>
                            <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.</p>
                            <a class='service-btn mt-3'>Learn More</a>
                        </div>
                    </div>
                    
                    <div class='col-12 col-md-6 col-lg-4'>
                        <!-- Single Service -->
                        <div class='single-service p-4'  style='border: solid 1px #788282;'>
                            <h3 class='my-3'>Service number 2</h3>
                            <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.</p>
                            <a class='service-btn mt-3' >Learn More</a>
                        </div>
                    </div>
                    
                    <div class='col-12 col-md-6 col-lg-4'>
                        <!-- Single Service -->
                        <div class='single-service p-4'  style='border: solid 1px #788282;'>
                            <h3 class='my-3'>Service number 3</h3>
                            <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.</p>
                            <a class='service-btn mt-3'>Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shape Bottom -->
            <div class="shape shape-bottom">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
                    <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
        c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
        c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
                </svg>
            </div>
        </section>
        <!-- ***** Service Area End ***** -->

        <!-- ***** Blog Area Start ***** -->
        <section id="portfolio" class="portfolio-area overflow-hidden ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2>our recent articles</h2>
                            <p class="d-none d-sm-block mt-4"><?php print $port_text?></p>
                        </div>
                    </div>
                </div>
 <!-- Portfolio Items -->
                <div class="row items">

                <?php
				   $q="SELECT * FROM  blog ORDER BY id DESC LIMIT 3";


                    $r123 = mysqli_query($con,$q);

                    while($ro = mysqli_fetch_array($r123))
                    {

                        $id="$ro[id]";
                        $port_title="$ro[blog_title]";
                        $port_desc="$ro[blog_desc]";
                        $port_detail="$ro[blog_detail]";
                        $ufile="$ro[ufile]";

                        print "
                        <div class='col-12 col-sm-6 col-lg-4 portfolio-item' data-groups='['marketing','development']'>
                        <!-- Single Case Studies -->
                        <div class='single-case-studies'>
                            <!-- Case Studies Thumb -->
                            <a href='portdetail.php?id=$id'>
                                <img src='dashboard/uploads/blog/$ufile' alt=''>
                            </a>
                            <!-- Case Studies Overlay -->
                            <a href='portdetail.php?id=$id' class='case-studies-overlay'>
                                <!-- Overlay Text -->
                                <span class='overlay-text text-center p-3'>
                                    <h3 class='text-white mb-3'>$port_title</h3>
                                    <p class='text-white'>$port_desc.</p>
                                </span>
                            </a>
                        </div>
                        <div>
                            <a href='portdetail.php?id=$id'>
                                <h3 class='mb-3'>$port_title</h3>
                                <p>$port_desc.</p>
                            </a>
                        </div>
                        </div>
                        ";
                    }
                ?>

                </div>
                <div class="row justify-content-center">
                    <a href="portfolio" class="btn btn-bordered mt-4">View More</a>
                </div>
            </div>
        </section>
        <!-- ***** Blog Area End ***** -->

        <!-- ***** Price Plan Area Start ***** -->

        <!-- ***** Price Plan Area End ***** -->

        <!-- ***** Team Area Start ***** -->
        <section id="review" class="section review-area bg-overlay ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->


                        <div class="section-heading text-center">
                            <h2 class="text-white">Our Team</h2>
                            <p class="text-white d-none d-sm-block mt-4">We have a wonderfull team of wonderfull persons with great personnality and great integrity, take a tour to see them below.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Client Reviews -->
                    <div class="client-reviews owl-carousel">
                        <!-- Single Review -->



                        <?php
				   $q="SELECT * FROM  testimony ORDER BY id DESC LIMIT 6";


                    $r123 = mysqli_query($con,$q);

                    while($ro = mysqli_fetch_array($r123))
                    {

                        $name="$ro[name]";
                        $position="$ro[position]";
                        $message="$ro[message]";
                        $ufile="$ro[ufile]";

                        print "

                        <div class='single-review p-5'>
                        <!-- Review Content -->
                        <div class='review-content'>
                            <!-- Review Text -->
                            <div class='review-text'>
                                <p>$message</p>
                            </div>
                            <!-- Quotation Icon -->

                        </div>
                        <!-- Reviewer -->
                        <div class='reviewer media mt-3'>
                            <!-- Reviewer Thumb -->
                            <div class='reviewer-thumb'>
                                <img class='avatar-lg radius-100'  style='width: 60px; height: 60px; overflow: hidden; object-fit: cover;'  src='dashboard/uploads/testimony/$ufile' alt='img'>
                            </div>
                            <!-- Reviewer Media -->
                            <div class='reviewer-meta media-body align-self-center ml-4'>
                                <h5 class='reviewer-name color-primary mb-2'>$name</h5>
                                <h6 class='text-secondary fw-6'>$position</h6>
                            </div>
                        </div>
                        </div>


                        ";
                    }
                    ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Review Area End ***** -->

        <!--====== Contact Area Start ======-->
        <section id="contact" class="contact-area ptb_100">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-lg-5">
                        <!-- Section Heading -->
                        <div class="section-heading text-center mb-3">
                            <h2><?php print $contact_title ?></h2>
                            <p class="d-none d-sm-block mt-4"><?php print $contact_text ?></p>
                        </div>
                        <!-- Contact Us -->
                        <div class="contact-us">
                            <ul>
                                <!-- Contact Info -->
                                <li class="contact-info color-1 bg-hover active hover-bottom text-center p-5 m-3">
                                    <span><i class="fas fa-mobile-alt fa-3x"></i></span>
                                    <a class="d-block my-2" href="tel:+250784726619">
                                        <h3>+250784726619</h3>
                                    </a>

                                </li>
                                <!-- Contact Info -->
                                <li class="contact-info color-3 bg-hover active hover-bottom text-center p-5 m-3">
                                    <span><i class="fas fa-envelope-open-text fa-3x"></i></span>
                                    <a class="d-none d-sm-block my-2" href="mailto:mail@company.com">
                                        <h3>mail@company.com</h3>
                                    </a>
                                    <a class="d-block d-sm-none my-2" href="mailto:mail@company.com">
                                        <h3>mail@company.com</h3>
                                    </a>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 pt-4 pt-lg-0">
                        <!-- Contact Box -->
                        <div class="contact-box text-center">
                            <!-- Contact Form -->
                            <?php
                             $status = "OK"; //initial status
                            $msg="";
                                    if(ISSET($_POST['save'])){
                            $name = mysqli_real_escape_string($con,$_POST['name']);
                            $email = mysqli_real_escape_string($con,$_POST['email']);
                            $phone = mysqli_real_escape_string($con,$_POST['phone']);
                            $message = mysqli_real_escape_string($con,$_POST['message']);

                            if ( strlen($name) < 5 ){
                            $msg=$msg."Name Must Be More Than 5 Char Length.<BR>";
                            $status= "NOTOK";}
                            if ( strlen($email) < 9 ){
                            $msg=$msg."Email Must Be More Than 10 Char Length.<BR>";
                            $status= "NOTOK";}
                            if ( strlen($message) < 10 ){
                                $msg=$msg."Message Must Be More Than 10 Char Length.<BR>";
                                $status= "NOTOK";}

                            if ( strlen($phone) < 8 ){
                            $msg=$msg."Phone Must Be More Than 8 Char Length.<BR>";
                            $status= "NOTOK";}

                            if($status=="OK")
                            {


                            // =================================================================================
                            // CHANGE TO THE COMPANY MAIL HERE (THE ONE WHICH WILL BE RECEIVING THE CONTACT FORM)
                            // =================================================================================
                            $recipient="mail@company.com";

                            $formcontent="NAME:$name \n EMAIL: $email  \n PHONE: $phone  \n MESSAGE: $message";

                            $subject = "New Enquiry from FWAFF Website";
                            $mailheader = "From: noreply@fwaff.com \r\n";
                            $result= mail($recipient, $subject, $formcontent);

                                    if($result){
                                            $errormsg= "
                            <div class='alert alert-success alert-dismissible alert-outline fade show'>
                                            Enquiry Sent Successfully. We shall get back to you ASAP.
                                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                </div>
                            "; //printing error if found in validation

                                    }
                                }

                                    elseif ($status!=="OK") {
                                        $errormsg= "
                            <div class='alert alert-danger alert-dismissible alert-outline fade show'>
                                                ".$msg." <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button> </div>"; //printing error if found in validation


                                }
                                else{
                                        $errormsg= "
                                    <div class='alert alert-danger alert-dismissible alert-outline fade show'>
                                            Some Technical Glitch Is There. Please Try Again Later Or Ask Admin For Help.
                                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                            </div>"; //printing error if found in validation


                                    }
                                        }
                                        ?>
                            <?php
                            if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                    {
                                                    print $errormsg;
                                                    }
                            ?>

                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Name" required="required">
                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone" placeholder="Phone" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" placeholder="Message" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-bordered active btn-block mt-3" name="save"><span class="text-white pr-3"><i class="fas fa-paper-plane"></i></span>Send Message</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-message"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== Contact Area End ======-->

        <!--====== Call To Action Area Start ======-->
        <section class="section cta-area bg-overlay ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <!-- Section Heading -->
                        <div class="section-heading text-center m-0">
                            <h2 class="text-white">This is why we are here, thanks for visiting us!</h2>
                            <p class="text-white d-none d-sm-block mt-4">Our mission is to make sure that opportunity to be part of our community should rip benefit that comes with it. Such as personal grow, be educated in financial literacy, etc.</p>
                            <a href="contact" class="btn btn-bordered-white mt-4">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== Call To Action Area End ======-->

      <?php include "footer.php"; ?>
