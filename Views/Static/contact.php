<?php include ROOT.'/Views/header.php'; ?>

    <!-- here start main section -->

    <!-- main -->
    <section>
        <div class="container">

            <div class="home-products padding-vertical-60">
                <div class="row">
                    <div class="col-md-12 col-sm-6">
                        <h1 class="text-center">Contact</h1>

                                <div class="lcontact span_1_of_contact">
                                    <div class="contact-form">
                                        <form method="post" id="contact-form" action="#" class="contact_form">
                                            <p class="comment-form-author">
                                                <label for="author">Your Name:</label><br>
                                                <input type="text" name="client_name" class="textbox" placeholder="Enter your name here..." pattern="^[a-zA-z]+$" >
                                            </p>
                                            <p class="comment-form-author">
                                                <label for="author">Email:</label><br>
                                                <input type="email" name="email" class="textbox" placeholder="Enter your email here..." >
                                            </p>
                                            <p class="comment-form-author">
                                                <label for="author">Message:</label><br>
                                                <textarea name="message" placeholder="Enter your message here..." ></textarea>
                                            </p>
                                            <input name="submit" type="submit" id="submit" value="Submit">
                                        </form>
                                    </div>
                                </div>
                                <div class="contact_inf">
                                    <h3>Address</h3>
                                    <div class="address">
                                        <i class="pin_icon"></i>
                                        <div class="contact_address">
                                            Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. 
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="address">
                                        <i class="phone"></i>
                                        <div class="contact_address">
                                            <b>tel: </b>1-25-2568-897
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="email">
                                        <i class="phone"></i>
                                        <div class="contact_address">
                                            <b>address: </b>gdfhdrh 215
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="address">
                                        <i class="mail"></i>
                                        <div class="contact_email">
                                            <a href="mailto:example@gmail.com"><b>email:</b> info(at)company.com</a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387144.007583421!2d-73.97800349999999!3d40.7056308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1413440825630" frameborder="0" style="border:0"></iframe>
                            </div>
                        </div>
                </div>
                        <!-- /.row -->

             </div>
                    <!-- /.home-products -->

        </div>
                <!-- /.container -->
    </section>
    <div class="clearfix"></div>
    
<?php include ROOT.'/Views/footer.php'; ?>
