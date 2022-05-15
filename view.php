<?php require_once __DIR__ . '/config/db.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900);

        * {
            font-family: "Poppins", Arial, Helvetica, sans-serif;
            font-smooth: antialiased;
        }

        main {
            width: 100%;
        }
    </style>
    <title>Contact Us</title>
</head>

<body>
    <?php

    try {
        $db = new DB();
        $conn = $db->connect();
        $query = "SELECT * FROM messages";
        $stmt = $conn->prepare($query);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $data = $stmt->fetchAll();
        foreach ($data as $feedback) {
            $name = $feedback['name'];
            $email = $feedback['email'];
            echo '<div class="mx-4 mt-4">';
            echo "<h1>List Of Messages</h1>";
            echo "<ol>";
            echo "<li>{$name} ({$email})</li>";
            echo "</ol>";
            echo "</div>";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    ?>
</body>

</html>