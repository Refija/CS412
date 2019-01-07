<!DOCTYPE html>
<html lang="en">
<head>
<title>Art School | About</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
<link href='http://fonts.googleapis.com/css?family=Cabin+Sketch:400,700' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.7.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script>
$(document)
    .ready(function () {
    $('.slider')
        ._TMS({
        show: 0,
        pauseOnHover: true,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 800,
        preset: 'fade',
        pagination: true,
        pagNums: false,
        slideshow: 7000,
        numStatus: false,
        banners: false,
        waitBannerAnimation: false,
        progressBar: false
    })
});
</script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div class="main">
  <!--==============================header=================================-->
   <?php include ('header.html');?>
  <!--==============================content================================-->
  <section id="content">
    <div class="container_12">
      <div class="grid_4 bot-1">
        <h2 class="top-6 p2">Teachers</h2>
        <p class="text-1 p3">Selma Besic</p>
        <p>One of the favourite teachers in the school. Best <a href="#" class="link">More...</a></p>
        <p class="text-1 top-2 p3">Fatima Omerovic</p>
        <p> Our students motivational coatch. Help outside of the school <a href="#" class="link">More...</a></p>
        <p class="text-1 top-2 p3">Rabija Numanovic</p>
        <p>A nurse that care about health of the children. Highly effective in her job. <a href="#" class="link">More...</a></p>
      </div>
      <div class="grid_8">
        <div class="block-1 top-5">
          <div class="block-1-shadow">
            <h2 class="clr-6 p6">A Few Words About Us</h2>
            <p class="clr-6"><strong>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor </strong></p>
            <p class="clr-6">Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et acam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est lorem ipsum dolor sit amet.</p>
            <div class="pad-3"> <img src="images/page2-img1.jpg" alt="" class="img-border img-indent">
              <div class="extra-wrap clr-6">
                <p><strong>Lorem ipsum dolor sit amet, consetetur</strong></p>
                <p>sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
              </div>
            </div>
            <h2 class="clr-6 p6">What We Offer</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Wbm0A1obD5E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p class="clr-6"><strong>Nam liber tempor cum soluta nobis eleifend option</strong></p>
            <p class="clr-6">Congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit:</p>
            <div class="lists">
              <ul class="list-2">
                <li><a href="#">Sed diam nonummy nibh euismod</a></li>
                <li><a href="#">Tincidunt ut laoreet dolore</a></li>
                <li><a href="#">Magna aliquam erat volutpat wisi enim</a></li>
                <li><a href="#">Minim veniam, quis nostrud exerci</a></li>
              </ul>
              <ul class="list-2 last">
                <li><a href="#">Duis autem vel eum iriure dolor</a></li>
                <li><a href="#">Hendrerit in vulputate velit molestie</a></li>
                <li><a href="#">Consequat vel illum dolore</a></li>
                <li><a href="#">Feugiat nulla facilisis at vero eros</a></li>
              </ul>
            </div>
            <div class="pad-2"> <a href="#" class="link-2">Read More</a> </div>
          </div>
        </div>
        <!--==============================footer=================================-->
        <?php include ('footer.html');?>
      </div>
      <div class="clear"></div>
    </div>
  </section>
</div>
</body>
</html>
