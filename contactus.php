<?php
    include 'header.php';
?>

<div class="contactUsBody" style="background-image: url('images/abishek_images/contactus/bg.jpg') ">

    <div class="pageContent">
        <div class="contactusmaintital">
            <h1>
                We'd love to hear from you..
            </h1>

            <h4>
                Our team is happy to answer your questions about Us.
                <br>Fill out the form and we'll be in touch as soon as possible.
            </h4>
        </div>

        <div class="contactlogos">

            <div class="con_details">
                <div class="con_logo_icon">
                    <img src="images/abishek_images/contactus/maps-and-flags.png" alt="locationIcon">
                </div>

                <div class="con_logo_text">
                    <h4>
                        Address
                    </h4>
                    <p>
                        123,Payrow (PVT) Ltd,<br>
                        Araliya Uyana,<br>
                        Depanama,<br>
                        Pannipitiya. <br>
                    </p>
                </div>

            </div>

            <div class="con_details">
                <div class="con_logo_icon">
                    <img src="images/abishek_images/contactus/phone-call.png" alt="phonecallicon">
                </div>

                <div class="con_logo_text">
                    <h4>
                        Phone
                    </h4>
                    <p>
                        011-2960002<br>077-1233212
                    </p>
                </div>

            </div>

            <div class="con_details">
                <div class="con_logo_icon">
                    <img src="images/abishek_images/contactus/mail.png" alt="mailicon">
                </div>

                <div class="con_logo_text">
                    <h4>
                        Email
                    </h4>
                    <p>
                        payrow@pro.pay.lk
                    </p>
                </div>

            </div>
        </div>

        <div class="contactusForm" id="loadContactForm">
            <h2>
                Contact Us
            </h2>
            <div class="border">
            </div>

            <form action="contactusvalidation.php" class="contactusFormForm" method="GET">
                <input type="text" class="con_input_text" placeholder="Your Name" name = "name" required>
                <input type="email" class="con_input_text" placeholder="Your Email" name = "email" required>
                <input type="text" class="con_input_text" placeholder="Your Phone" name = "contact" required>
                <textarea class="con_input_text" placeholder="Your Message" name = "msg" required></textarea>
                <input type="submit" class="con_input_submit" value="Send Message">
            </form>
        </div>


    </div>
</div>


</div>

<?php
    include 'footer.php';
?>