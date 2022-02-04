<section id="contact" class="section-bg">
    <div class="container" data-aos="fade-up">

    <div class="section-header">
        <h3>Contact Us</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
    </div>

    <div class="row contact-info">

        <div class="col-md-4">
        <div class="contact-address">
            <i class="bi bi-geo-alt"></i>
            <h3>Address</h3>
            <address>Nairobi, Kenya</address>
        </div>
        </div>

        <div class="col-md-4">
        <div class="contact-phone">
            <i class="bi bi-phone"></i>
            <h3>Phone Number</h3>
            <p><a href="tel:+254716137337">+254 716 137 337</a></p>
        </div>
        </div>

        <div class="col-md-4">
        <div class="contact-email">
            <i class="bi bi-envelope"></i>
            <h3>Email</h3>
            <p><a href="mailto:harunixglobaltech@gmail.com">harunixglobaltech@gmail.com</a></p>
        </div>
        </div>

    </div>

    <div class="form">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
        <div class="row">
            <div class="form-group col-md-6">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="form-group col-md-6">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
    </div>

    </div>
</section>
