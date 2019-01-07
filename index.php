<!DOCTYPE html>
<html lang="en">
<head>
<title>Art School</title>
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
        <div class="art"></div>
        <h2 class="top-1 p2">Events</h2>
        <p class="text-1 p3">April 18 - “Spring’s Bloom”</p>
        <p>The PSD source files of this Art School Template are available for free for the registered members of TemplateMonster.com. Feel free to <br>
          get them!</p>
        <p class="text-1 top-2 p3">April 01 - “Smile!”</p>
        <p>This website template has several pages: Home Page, About Us, Schedule, Gallery, Contact Us (note that contact us form – <br>
          doesn’t work).</p>
        <a href="#" class="link-1 top-3">News Archive</a> </div>
      <div class="grid_8">
        <div class="pad-1">
          <h2 class="p2">Welcome to Art School</h2>
          <p class="text-1">ART school is established 50 years ago, during it's existence it was 20 times labeled as the best art school in the region.</p>
        </div>
        <div class="grid_8">
        <div class="block-1 top-5">
          <div class="block-1-shadow">
            <h2 class="clr-6 p6">Schedule</h2>
            <table class="table">
              <tr>
                <th>Monday</th>
                <th>Wednesday</th>
                <th>Friday</th>
                <th class="last">Saturday</th>
              </tr>
              <tr>
                <td><span>11:00</span><span class="clr-4">Nam liber tempor</span><span>Peter Stanton</span></td>
                <td><span>11:00</span><span class="clr-4">Nam liber tempor</span><span>Peter Stanton</span></td>
                <td><span>11:00</span><span class="clr-4">Nam liber tempor</span><span>Peter Stanton</span></td>
                <td><span>11:00</span><span class="clr-4">Nam liber tempor</span><span>Peter Stanton</span></td>
              </tr>
              <tr>
                <td><span>13:00</span><span class="clr-4">Lorem ipsum</span><span>Helen Perton</span></td>
                <td><span>13:00</span><span class="clr-4">Lorem ipsum</span><span>Helen Perton</span></td>
                <td><span>13:00</span><span class="clr-4">Lorem ipsum</span><span>Helen Perton</span></td>
                <td><span>13:00</span><span class="clr-4">Lorem ipsum</span><span>Helen Perton</span></td>
              </tr>
              <tr>
                <td><span>16:00</span><span class="clr-4">Dolor sit amet</span><span>Jesica Murray</span></td>
                <td><span>16:00</span><span class="clr-4">Dolor sit amet</span><span>Jesica Murray</span></td>
                <td><span>16:00</span><span class="clr-4">Dolor sit amet</span><span>Jesica Murray</span></td>
                <td><span>16:00</span><span class="clr-4">Dolor sit amet</span><span>Jesica Murray</span></td>
              </tr>
            </table>
        <div class="block-1 top-5">
          <div class="block-1-shadow">
            <h2 class="clr-6 p4">Our Gallery</h2>
            <div class="box-1"> <a href="#" class="img-border"><img src="images/img1.jpg" alt=""></a>
              <p class="text-2">Jennifer, 10 years</p>
            </div>
            <div class="box-1 last"> <a href="#" class="img-border"><img src="images/img2.jpg" alt=""></a>
              <p class="text-2">Martin, 13 years</p>
            </div>
            <div class="clear p5"></div>
            <div class="box-1"> <a href="#" class="img-border"><img src="images/img3.jpg" alt=""></a>
              <p class="text-2">Sebastian, 14 years</p>
            </div>
            <div class="box-1 last"> <a href="#" class="img-border"><img src="images/img4.jpg" alt=""></a>
              <p class="text-2">Fiona, 8 years</p>
            </div>
            <div class="clear"></div>
            <div class="pad-2"> <a href="gallery.php" class="link-2">Full Gallery</a> </div>
          </div>
        </div>
        <?php
      include ('footer.html');?>
      </div>
      <div class="clear"></div>
    </div>
  </section>
</div>
</body>
</html>
