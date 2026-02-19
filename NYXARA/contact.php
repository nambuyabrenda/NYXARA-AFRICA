<?php
$pageTitle = "Contact Nyxara Africa | Get in Touch";
$pageDescription = "Get in touch with Nyxara Africa to discuss your technology needs. Contact us for web development, mobile apps, agro-tech, and business technology solutions in Africa.";

// Form submission handling
$successMessage = '';
$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));
    
    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        $errorMessage = 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage = 'Please enter a valid email address.';
    } else {
        // Email configuration (Update with your email)
        $to = "info@nyxara.africa";
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        
        $emailBody = "Name: $name\n";
        $emailBody .= "Email: $email\n";
        $emailBody .= "Subject: $subject\n\n";
        $emailBody .= "Message:\n$message\n";
        
        // Send email (Uncomment when live)
        // if (mail($to, "Contact Form: $subject", $emailBody, $headers)) {
        //     $successMessage = 'Thank you for your message! We will get back to you soon.';
        // } else {
        //     $errorMessage = 'Sorry, there was an error sending your message. Please try again.';
        // }
        
        // For demo purposes
        $successMessage = 'Thank you for your message, ' . $name . '! We will get back to you soon.';
        
        // Clear form
        $_POST = array();
    }
}
?>
<?php include 'includes/header.php'; ?>

<section class="contact-hero">
    <div class="container">
        <h1>Contact Nyxara Africa</h1>
        <p>Get in touch with us to discuss your technology needs. 
            We are ready to help you build innovative and scalable digital solutions.</p>
    </div>
</section>

<section class="contact-content">
    <div class="container contact-layout">
        <!-- Contact Information -->
        <div class="contact-info">
            <h2>Get in Touch</h2>
            <p>📧 <strong>Email:</strong> <a href="mailto:easet5841@gmail.com">easet5841@gmail.com</a></p>
            <p>📞 <strong>Phone:</strong> <a href="tel:+256702405616">+256 702 405 616</a></p>
            <p>📍 <strong>Location:</strong> Uganda</p>
            
            <div class="business-hours">
                <h3>Business Hours</h3>
                <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
                <p>Saturday: 10:00 AM - 2:00 PM</p>
                <p>Sunday: Closed</p>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="contact-form">
            <h2>Send Us a Message</h2>
            
            <?php if ($successMessage): ?>
                <div class="alert alert-success">
                    <?php echo $successMessage; ?>
                </div>
            <?php endif; ?>
            
            <?php if ($errorMessage): ?>
                <div class="alert alert-error">
                    <?php echo $errorMessage; ?>
                </div>
            <?php endif; ?>
            
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Your Name *" required 
                           value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
                </div>
                
                <div class="form-group">
                    <input type="email" name="email" placeholder="Your Email *" required
                           value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                </div>
                
                <div class="form-group">
                    <input type="text" name="subject" placeholder="Subject"
                           value="<?php echo isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : ''; ?>">
                </div>
                
                <div class="form-group">
                    <textarea name="message" placeholder="Your Message *" required rows="6"><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                </div>
                
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </div>
</section>

<section class="map-section">
    <div class="container">
        <h2>Our Location</h2>
        <div class="map-placeholder">
            <div class="map-content">
                <h3>Uganda Office</h3>
                <p>We serve clients across Africa from our headquarters in Uganda.</p>
                <p>Contact us for specific address details.</p>
            </div>
        </div>
    </div>
</section>



<?php include 'includes/footer.php'; ?>