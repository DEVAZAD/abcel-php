<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/project/assets/headerFooter.css">
    <link rel="stylesheet" href="/project/assets/contactcss.css">
    <title>Document</title>
</head>
<body>
    <?php include('../includes/header.php'); ?>

<div class="contact-form">
    <h2>Contact Us</h2>
    
    <?php if (isset($_GET['success'])): ?>
        <div class="success-message">Thank you! Your message has been sent.</div>
    <?php endif; ?>
    
    <?php if (isset($_GET['error'])): ?>
        <div class="error-message">There was an error. Please try again.</div>
    <?php endif; ?>
    
    <form action="../processes/contact_process.php" method="POST">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="tel" name="contact" placeholder="Phone Number" required>
        <input type="email" name="email" placeholder="Email Address" required>
        
        <input type="text" name="country" placeholder="Country" required>
        <input type="text" name="state" placeholder="State" required>
        <input type="text" name="city" placeholder="City" required>
        
        <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
        <button type="submit">Send Message</button>
    </form>
</div>

<?php include('../includes/footer.php'); ?>
</body>
</html>