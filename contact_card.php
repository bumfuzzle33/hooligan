<?php
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        $title = $_POST['title'];
        $message = $_POST['message'];
        $reciever_mail = "partylikenever@protonmail.com";
        mail($reciever_mail,$title,$message,$email);
        header("Location: contact_card.php?mailsent");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="contact_card.css">
    <script type="text/javascript" defer src="contact_card.js"></script>
</head>

<body>
    <form>
        <input type="email" name="email" placeholder="Your email" required>
        <input type="text" name="title" placeholder="Title" required>
        <textarea name="message"  cols="20" rows="9" placeholder="Message" required></textarea>
        <input onclick="magic()" type="button" value="submit">
    </form> 
     <div id="success">Email Sent!</div>
</body>

</html>