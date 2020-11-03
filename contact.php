<?php include 'includes/header1.php'; ?>
    <title>City Living Lloyd Wright House</title>
    <link rel="stylesheet" href="stylesheets/contactstyle.css">
    <script type='text/javascript' src="includes/bingmap.js">
    
    </script>
    <script type='text/javascript' src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap' async defer></script>
    <?php include 'includes/header2.php'; ?>

<div class="page-pattern">
        <div class="page-pattern-child">
            <h1>Contact</h1>
            <p>Home/Contact</p>
        </div>
    </div>
    
  <div class="main">
   
  <div id="myMap"></div>

<!-- Talk to us -->

<div class="talk-to-us">

    <div class="talk-section">
    <img src="icons/chatwhite.svg" alt="chat-icon" class="talk-icon">
    <h2>Have Questions?</h2>
    <p>We're here to help, so call, email or use the form below and ask away.</p>
</div>
    <div class="talk-section">
    <img src="icons/happywhite.svg" alt="thumb-icon"class="talk-icon">
    
        <h2>Need Advice?</h2>  
        <p>We've got a friendly team of experts, ready to help.</p>
    </div>
     <div class="talk-section">
         <img src="icons/eyewhite.svg" alt="eye-icon" class="talk-icon">

         <h2>Book a Viewing</h2>
        <p>Give us a call on +44 2143 222244.</p>
        </div>
</div>

  
   
  <div class="contact-form-section">
<div class="contact-blurb">
<h1>Contacting Us</h1>
    <p>If you would like further information on prices, location, facilities or Mortage options available, please contact us via phone, email</p>

    <p>Our showroom office is open between 8am and 6pm Monday to Friday, although viewings can be arranged on weekends by appointment.
    </p>
    <h2>Call us on:</h2>
    <h1>+44 2143 222244</h1>
    <h2>Or Email us at:</h2>
<h1> <a href="mailto:howard@cityliving.co">
    howard@cityliving.co</a></h1>
</div>
    <form id="contact-form" class="contact-form" action="includes/sendcontact.php" method="post">
    
        <p>Name</p>
        <input type="text" size="50" name="name" id="name" autocomplete="no">
        <p>Email (required)</p>
        <input type="email" size="50" name="email" id="email">
        <p>Message</p>
        <textarea rows="12" name="message" id="message"></textarea>
        <br>
        <button action="submit">Send</button> 
        <?php 
        if (isset($_GET['mail'])) {
             echo "<p id='confirm-contact-form'> Form received, thank you. We will reply as soon as possible.</p>";
             };
             if (isset($_GET['fail'])) {
                echo "<p id='fail-contact-form'> Please fill in all fields and Try again. </p>";
                };
        
        ?></p>
        </div>
    </form>
</div>

<?php include 'includes/flipcards.php'; ?>

<?php include 'includes/footer.php'; ?>

