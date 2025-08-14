<?php // Variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Database connection
    $conn = new mysqli('localhost','root','', 'contact us form')
    if ($conn->connect_error) {
        die('Connection failed : '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into contact us form (name, email, subject, message) values(?, ?, ?, ?)")
        $stmt->bind_param("ssss", $name, $email, $subject, $message);
        $stmt->execute();
        echo "Contact information successfully added.";
        $stmt->close();
        $conn->close();
    }

?>