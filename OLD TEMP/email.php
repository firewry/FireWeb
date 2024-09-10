<!DOCTYPE html>
<html>
    <head id="head">
        <link rel="stylesheet" href="content/css/style.css">
    </head>
    <body id="body-insert">
        <header id="header"></header>
        <section id="sect1">
            <h1 class="echo-h1 bigger-text">
            <?php 
            if(isset($_POST['submit'])){
                $to = "mail@firewry.com"; // this is your Email address
                $from = $_POST['email']; // this is the sender's Email address
                $first_name = $_POST['fname'];
                $last_name = "firewry.com";
                $subject = $_POST['subject'];
                $subject2 = "firewry.com form submission";
                $message = $first_name . " wrote the following:" . "\n\n" . $_POST['message'];
                $message2 = "Here is a copy of your message " . $first_name . ":\n\n" . $_POST['message'];

                $headers = "From:" . $from;
                $headers2 = "From:" . $to;
                mail($to,$subject,$message,$headers);
                mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
                echo "Mail Sent. Thank you " . $first_name;
                // You can also use header('Location: thank_you.php'); to redirect to another page.
                }
            ?>
            </h1>
            <br><br>
            <a href="contact.html"><button class="button" style="width: 150px; height: 70px; font-size: 7mm;">Back</button></a>
        </section>
        <footer id="footer"></footer>
        <div id="preloader">
            
        </div>
        <!-- SCRIPTS -->
            <script src="html-insert/inserts/head-inserts.js"></script>
            <script src="html-insert/inserts/header-inserts.js"></script>
            <script src="html-insert/inserts/footer-inserts.js"></script>
            <script src="content/js/main.js" type=text/javascript></script>
        <!-- SCRIPTS -->
    </body>
</html>