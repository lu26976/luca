<?php
include("../controllers/menu.php");
date_default_timezone_set('Europe/Rome');
?>


<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$from = 'luca lazzarelli';
$to = 'lu26976@hotmail.it';
$subject = 'Hello';
$human = $_POST['human'];

$body = "From: $name\n E-Mail: $email\n Message:\n $message";

if ($_POST['submit'] && $human == '4') {
    if (mail($to, $subject, $body, $from)) {
        echo '<p>Your message has been sent!</p>';
    } else {
        echo '<p>Something went wrong, go back and try again!</p>';
    }
} else if ($_POST['submit'] && $human != '4') {
    echo '<p>You answered the anti-spam question incorrectly!</p>';
}
?>


<html>
    <head>
        <link href="../static/main.css" rel="stylesheet" type="text/css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <div id="wrapper">
            <div id="content">
                <?php include("../template/header.php"); ?>
                <div id="contatti">
                    <form class="contact" action='contatti.php' method="post">
                        <p>Name</p>
                        <input name="name" placeholder="Type Here" value="<?php echo(isset($_POST['name']) ? $_POST['name'] : NULL) ?>">
                        <p>Email</p>
                        <input name="email" placeholder="Type Here" value="<?php echo(isset($_POST['email']) ? $_POST['email'] : NULL) ?>">
                        <p id="message">Message</p>
                        <textarea name="message" placeholder="Type Here">
                        </textarea>
                        <label>*What is 2+2? (Anti-spam)</label>
                        <input name="human" placeholder="Type Here">
                        <input id="submit" name="submit" title="Submit Buttom" type="submit" value="Submit">
                    </form>
                    <div    id="footerFake"></div>
                </div> 
            </div>
            <div id="right">
            </div>
            <?php include("../template/footer.php"); ?>
        </div>
    </body>
</html>
