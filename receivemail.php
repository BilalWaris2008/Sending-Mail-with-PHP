<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php

if(isset($_POST['submit'])){

$to = $_POST['to'];
$from = $_POST['from'];
$subject = $_POST['subject'];
$message = $_POST['message'];

}

?>

<body>

<div class="output">
    <h5>To: <?php echo $to; ?></h5>
    <h5>From: <?php echo $from; ?></h5>
    <h5>Subject: <?php echo $subject; ?></h5>
    <h5>Message: <?php echo $message; ?></h5>
</div>

</body>
</html>