<?php // Variables
    $name = $_POST['pdf_file'];

    // Database connection
    $conn = new mysqli('localhost','root','', 'share resources')
    if ($conn->connect_error) {
        die('Connection failed : '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into share resources (pdf_file) values(?)")
        $stmt->bind_param("ssss", $name, $email, $subject, $message);
        $stmt->execute();
        echo "Contact information successfully added.";
        $stmt->close();
        $conn->close();
    }

?>