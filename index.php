<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reservasi Hotel</title>
</head>
<body>
    <div class="container">
        <h1>Reservasi Brits Hotel</h1>
        <form action="confirm.php" method="POST">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="checkin">Tanggal Check-in:</label>
            <input type="date" id="checkin" name="checkin" required>

            <label for="checkout">Tanggal Check-out:</label>
            <input type="date" id="checkout" name="checkout" required>

            <label for="room">Tipe Kamar:</label>
            <select id="room" name="room">
                <option value="single">Kamar Single</option>
                <option value="double">Kamar Double</option>
                <option value="suite">Suite</option>
            </select>

            <button type="submit">Reservasi</button>
        </form>
    </div>
</body>
</html>
