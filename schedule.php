<!DOCTYPE html>
<html lang="en">
<head>
<title>Art School | Schedule</title>
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
   <?php include('header.html');?>
  <!--==============================content================================-->
  <section id="content">
    <div class="container_12">
      <div class="grid_4 bot-1">
        <h2 class="top-6 p6">About Schedule</h2>
        <p class="clr-7 p7"><strong>At vero eos et accusam et justo duo dolores et ea rebum.</strong></p>
        <p class="p7">Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor. Loremsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.</p>
        <p>Eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum <br>
          dolor sit amet <a href="#" class="link">More...</a></p>
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
            <h2 class="clr-6 p6">Events Schedule</h2>
            <div class="wrap">
              <div class="box-2">
                <div class="p4">
                  <p><strong>April 10, 2012</strong></p>
                  <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore <a href="#" class="link">More...</a></p>
                </div>
                <div>
                  <p><strong>March 22, 2012</strong></p>
                  <p>Teugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum <a href="#" class="link">More...</a></p>
                </div>
              </div>
              <div class="box-2 last">
                <div class="p4">
                  <p><strong>April 04, 2012</strong></p>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore <a href="#" class="link">More...</a></p>
                </div>
                <div>
                  <p><strong>March 14, 2012</strong></p>
                  <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus <a href="#" class="link">More...</a></p>
                </div>
              </div>
            </div>
            <div class="pad-2"> <a href="#" class="link-2">More Events</a> </div>
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
