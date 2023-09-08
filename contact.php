<?php include 'header.php';?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page"><a class="text-white" href="contact.php">Contact</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid bg-light overflow-hidden px-lg-0">
        <div class="container contact px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">Contact Us</h1>
                        </div>
                        <h5 class="text-light mb-4">Address</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>1 & 2, Rajgurunagar Industrial Estate, T Block, Plot No. 106/ 2, M. I. D. C, Bhosari, Pune - 411 026, Maharashtra</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>91 9850237399</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>rotexengineers@gmail.com</p>
                         <!-- Display success message if 'success' query parameter is 'true' -->
                            <?php
                            if (isset($_GET['success']) && $_GET['success'] == 'true') {
                                echo '<p class="success-message">Email sent successfully!</p>';
                            }

                            // Display error message if 'success' query parameter is 'false'
                            if (isset($_GET['success']) && $_GET['success'] == 'false') {
                                echo '<p class="error-message">Email sending failed. Please try again.</p>';
                            }
                           ?>
                        
                        <form action="mail.php" method="post">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" name="message" id="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" name="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <iframe class="position-absolute w-100 h-100" style="object-fit: cover;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3076.7715876994193!2d73.82718921420577!3d18.630898770654888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b9be07906db5%3A0x127a9fc00e1c8902!2sROTEX%20ENGINEERS%20-%20B7%20B8%20Studs%20Bolts%20Nuts%20Thread%20Rolling%20Spline%20Acme%20Trapezoidal%20Worm%20Rolling!5e1!3m2!1sen!2sin!4v1672395013509!5m2!1sen!2sin" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <?php include 'footer.php';?>    