<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Konfirmasi Reservasi</title>
</head>
<body>
    <div class="container">
        <h1>Konfirmasi Reservasi</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $checkin = htmlspecialchars($_POST['checkin']);
            $checkout = htmlspecialchars($_POST['checkout']);
            $room = htmlspecialchars($_POST['room']);

            echo "<p>Terima kasih, <strong>$name</strong>!</p>";
            echo "<p>Reservasi Anda:</p>";
            echo "<ul>";
            echo "<li>Email: $email</li>";
            echo "<li>Tanggal Check-in: $checkin</li>";
            echo "<li>Tanggal Check-out: $checkout</li>";
            echo "<li>Tipe Kamar: $room</li>";
            echo "</ul>";
        } else {
            echo "<p>Data tidak valid.</p>";
        }
        ?>
    </div>
</body>
</html>
