<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900);

        * {
            font-family: "Poppins", Arial, Helvetica, sans-serif;
            font-smooth: antialiased;
        }

        a {
            text-align: center;
            text-decoration: none;
            color: #0011DD !important;
            font-size: 1rem;
            font-weight: 500;
            padding-inline: 2rem;
            cursor: pointer;
        }
    </style>
    <title>Submission</title>
</head>

<body>

</body>

</html>

<?php
require_once "../config/db.php";

$db = new DB();
$conn = $db->connect();

if (isset($_POST["submit"])) {
    $name_raw = $_POST["name"];
    $email_raw = $_POST["email"];
    $message_raw = $_POST["message"];

    if (!$email_raw || !$message_raw || !$name_raw) {
        //ECHO AN ERROR MESSAGE
        echo "<h3 class='alert alert-danger text-center fs-5 mx-3 my-5 py-4'>ALL DETAILS ARE REQUIRED</h3>";
        echo '</br><a onclick="history.back();">Go Back</a>';
        die();
    } else {
        try {
            $create_table = 'CREATE TABLE IF NOT EXISTS messages(
            id INT(25) AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            message TEXT
        )';

            $conn->query($create_table);

            $sql_insert = "INSERT INTO messages (name, email, message) VALUES(:name, :email, :message)";

            $stmt = $conn->prepare($sql_insert);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':message', $message);

            $name = htmlspecialchars($name_raw);
            $email = htmlspecialchars($email_raw);
            $message = htmlspecialchars($message_raw);
            $stmt->execute();

            //ECHO A SUCCESS MESSAGE
            echo "<h4 class='alert alert-success text-center fs-5 mx-3 my-5 py-4'>Your message has been submitted successfully! We will contact you at {$email} within 48 hours.</h4>
            <br/>";
            echo '</br><a onclick="history.back();">Go Back</a>';
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
$conn = null;
?>