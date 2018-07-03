<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Huletts App Landing page</title>

    <link rel="icon" href="images/favicon.png" />

    <!--  Main Stylesheets  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">

    <!--  PACE scripts and stylesheets  -->
    <script src="js/pace.js"></script>
    <link rel="stylesheet" href="css/minimal.css">
</head>
<body>
<!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<[endif]-->

<header>
    <img src="images/toplogo.png" alt="Huletts Logo" class="logo">
</header>

<section class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1 class="red-heading">The New Recipe App</h1>
                <h3 class="blue-heading">It's the sweetest!</h3>
                <p>Your new favourite helper, both in and out of the kitchen.</p>
                <button>download</button>
            </div>
            <div class="col-md-5 hidden-xs">
                <img src="images/halfphone.png" alt="Huletts Phone App - Half" class="phone">
            </div>
        </div>
    </div>
</section>

<section class="video">
    <div class="container">
        <div class="mobile">
            <h2 class="blue"><span class="bold">How</span> does it work</h2>
            <img src="images/playbutton.png" alt="Video Play button for mobile" class="video-button">
            <h2 class="blue"><span class="bold">Watch</span> the video walk-through</h2>
        </div>
        <div class="desktop">
            <h2 class="blue"><span class="bold">How</span> does it work
                <img src="images/playbutton.png" alt="Video Play Button" class="video-button">
                <span class="bold">Watch</span> the video&nbsp;&nbsp;</h2>
        </div>
    </div>
</section>

<section class="info">
    <div class="container">
        <h2 class="blue"><span class="bold">Much More</span> than just a recipe book.</h2>
        <div class="row">
            <div class="col-md-4 col-sm-4 text">
                <div class="desktop">
                    <h4>Shopping Lists</h4>
                    <p>Never forget an ingredient again when you're out shopping up a storm.</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <h4>Hints & Tips</h4>
                    <p>Advice to get you out of sticky situations.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <img src="images/phone.png" alt="Full Phone App" class="main-phone">
            </div>

            <div class="col-md-4 col-sm-4 text">
                <div class="mobile">
                    <h4>Shopping Lists</h4>
                    <p>Never forget an ingredient again when you're out shopping up a storm.</p>
                    <p>&nbsp;</p>
                    <h4>Hints & Tips</h4>
                    <p>Advice to get you out of sticky situations.</p>
                    <p>&nbsp;</p>
                </div>
                <h4>Conversion Calculator</h4>
                <p>Volume and weight conversions to get your measurements perfect - every time.</p>
                <p>&nbsp;</p>
                <div class="desktop"><p>&nbsp;</p></div>
                <h4>Recipe Box</h4>
                <p>Save all your favourites in one convenient place.</p>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row ">
            <div class="col-md-8">
                <h2 class="apps"><span class="download">Download</span> THE APP NOW!</h2>
            </div>
            <div class="col-md-4">
                <img src="images/googlebutton.png" alt="Google Play Download" class="app">
                <img src="images/applebutton.png" alt="Apple App Store Download" class="app">
            </div>
        </div>
    </div>
</footer>

<section class="copyright">
    <div class="container">
        <p>&copy; <?php echo date("Y"); ?> Huletts. All rights reserved.</p>
    </div>
</section>

</body>
</html>