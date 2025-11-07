<?php
$page_title = "About Us";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/project/assets/headerFooter.css">
    <title><?php echo $page_title; ?></title>
    <style>
        .about-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        .about-section {
            margin-bottom: 2rem;
        }
        
        .about-title {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #333;
        }
        
        .about-text {
            line-height: 1.6;
            color: #666;
            margin-bottom: 1rem;
        }
        
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }
        
        .team-member {
            text-align: center;
            padding: 1rem;
        }
        
        .member-name {
            font-weight: bold;
            margin: 0.5rem 0 0.2rem;
        }
        
        .member-role {
            color: #888;
            font-size: 0.9rem;
        }
        
        .contact-info {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 8px;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <?php include('../includes/header.php'); ?>
    <div class="about-container">
        <div class="about-section">
            <h1 class="about-title">About Our Company</h1>
            <p class="about-text">
                We are a passionate team dedicated to creating amazing web experiences. 
                Our mission is to build solutions that make a difference in people's lives.
            </p>
            
            <p class="about-text">
                Founded in 2024, we've been committed to excellence, innovation, 
                and delivering outstanding results for our clients.
            </p>
        </div>

        <div class="about-section">
            <h2 class="about-title">Our Mission</h2>
            <p class="about-text">
                To simplify technology and create user-friendly solutions that 
                empower businesses and individuals to achieve their goals.
            </p>
        </div>

        <div class="about-section">
            <h2 class="about-title">Our Team</h2>
            <div class="team-grid">
                <div class="team-member">
                    <div class="member-name">John Doe</div>
                    <div class="member-role">Founder & CEO</div>
                </div>
                <div class="team-member">
                    <div class="member-name">Jane Smith</div>
                    <div class="member-role">Lead Developer</div>
                </div>
                <div class="team-member">
                    <div class="member-name">Mike Johnson</div>
                    <div class="member-role">Designer</div>
                </div>
            </div>
        </div>

        <div class="contact-info">
            <h3>Get In Touch</h3>
            <p>Email: hello@example.com</p>
            <p>Phone: (555) 123-4567</p>
        </div>
    </div>
    <?php include('../includes/footer.php'); ?>
</body>
</html>