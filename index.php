<?php
include "./config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Sending Mail</h1>

    <form action="./receivemail.php" method="post">

        <label for="">To</label>
        <input type="text" name="to" required>
        <br><br>

        <label for="">From</label>
        <input type="text" name="from" required>
        <br><br>

        <label for="">Subject</label>
        <input type="text" name="subject" required>
        <br><br>

        <label for="">Message</label><br>
        <textarea name="message" id="" cols="30" rows="7" placeholder="Enter Your Message" required></textarea>
        <br><br>

        <button type="submit" name="submit">Send</button>

    </form>

</body>

</html>