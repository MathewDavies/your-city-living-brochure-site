<?php include 'includes/header1.php'; ?>
    <title>City Living Lloyd Wright House</title>
    <link rel="stylesheet" href="stylesheets\lwhousestyle.css">
    <?php include 'includes/header2.php'; ?>
    
<div class="page-pattern">
        <div class="page-pattern-child">
            <h1>Lloyd Wright House</h1>
            <p>Home/Lloyd Wright House</p>
        </div>
    </div>

<div class="image-row">
    <img src="images\sink.jpg" class="row-image" alt="">
    <img src="images\bathroom1.jpg" class="row-image" alt="">
    <img src="images\door.jpg" class="row-image" alt="">
    <img src="images\colston1a.jpg" class="row-image" alt="">
</div>

   <div class="main">
   <div class="page-text">
            <h1>LLOYD WRIGHT HOUSE, <span>LONDON</span></h1>
            <p>Lloyd Wright House is located in the heart of London allowing you to be in reaching distance of all the shops, facilities and nightlife the city has to offer.</p>       
    </div>

    <div class="double-image-row">
    <img src="images\interior4.jpg" class="double-row-image" alt="">
    <img src="images\kitchen3.jpg" class="double-row-image" alt="">
    </div>
    
   </div>
    <div class="list-row">
        <div class="list" id="list-features">
            <p>General Features</p>
            <ul>
                <li>Conciege Service</li>
                <li>Fire Alarms</li>
                <li>Management Company</li>
                 <li>High Speed Lifts</li>
            </ul>
        </div>
        <div class="list" id="list-apartments">
            <p>Individual Apartments</p>
            <ul>
                <li>Beautiful Kitchens</li>
                <li>Granite Worktops</li>
                <li>Induction Hobs</li>
                <li>Intergrated Dishwasher</li>
                <li>Fitted Wardrobes</li>
                
                <li>Double Glazing</li>
                <li>Energy Efficient</li>
            </ul>
        </div>
        <div class="list" id="list-exterior">
            <p>Exterior</p>
            <ul>
                <li>Parking Garage</li>
                <li>Glass Balconies</li>
                <li>CCTV</li>
                <li>Stunning Views</li>
                <li>City Centre Location</li>
            </ul>
        </div>
    </div>
    <!-- Slideshow -->
    <div class="page-text">
        <h1>Image Gallery</h1>
        <p>Photos of Lloyd Wright House</p>
    </div>
    <div class="slidershow slideshow-middle">

      <div class="slides">
        <input type="radio" name="r" id="r1" checked>
        <input type="radio" name="r" id="r2">
        <input type="radio" name="r" id="r3">
        <input type="radio" name="r" id="r4">
        <input type="radio" name="r" id="r5">
        <div class="slide s1">
          <img src="images/interior5.jpg" alt="">
        </div>
        <div class="slide">
          <img src="images/interior4.jpg" alt="">
        </div>
        <div class="slide">
          <img src="images/apartment1.jpg" alt="">
        </div>
        <div class="slide">
          <img src="images/kitchen3.jpg" alt="">
        </div>
        <div class="slide">
          <img src="images/sofa2.jpg" alt="">
        </div>
      </div>

      <div class="navigation">
        <label for="r1" class="bar"></label>
        <label for="r2" class="bar"></label>
        <label for="r3" class="bar"></label>
        <label for="r4" class="bar"></label>
        <label for="r5" class="bar"></label>
      </div>
    </div>



   <?php include 'includes/flipcards.php'; ?>

<?php include 'includes/footer.php'; ?>