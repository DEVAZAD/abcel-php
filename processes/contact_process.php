<?php
// Include database connection
include('../includes/db_connection.php');

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get form data
    $name = trim($_POST['name']);
    $contact = trim($_POST['contact']);
    $email = trim($_POST['email']);
    $country = trim($_POST['country']);
    $state = trim($_POST['state']);
    $city = trim($_POST['city']);
    $message = trim($_POST['message']);
    
    // Basic validation
    if (!empty($name) && !empty($contact) && !empty($email) && 
        !empty($country) && !empty($state) && !empty($city) && !empty($message)) {
        
        try {
            // Insert into database
            $sql = "INSERT INTO contact_submissions (name, contact, email, country, state, city, message) 
                    VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$name, $contact, $email, $country, $state, $city, $message]);
            
            // Redirect back to contact page with success
            header("Location: ../pages/contact.php?success=1");
            exit;
            
        } catch(PDOException $e) {
            // Redirect back with error
            header("Location: ../pages/contact.php?error=1");
            exit;
        }
    } else {
        // Redirect back with error
        header("Location: ../pages/contact.php?error=1");
        exit;
    }
} else {
    // If someone tries to access this page directly
    header("Location: ../pages/contact.php");
    exit;
}
?>