<!DOCTYPE html>
<html lang="en">
<head>
<title>Art School | Contacts</title>
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
        <h2 class="top-6">Contact Us</h2>
        <div class="map">
          <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
        </div>
        <dl>
          <dt>8901 Marmora Road, <br>
            Glasgow, D04 89GR.</dt>
          <dd><span>Telephone: </span>+1 800 603 6035</dd>
          <dd><span>E-mail: </span><a href="#" class="link">mail@demolink.org</a></dd>
        </dl>
      </div>
      <div class="grid_8">
        <div class="block-1 top-5">
          <div class="block-1-shadow">
            <h2 class="clr-6">Contact Form</h2>
            <form id="form" method="post" action="contact_post.php">
              <fieldset>
                <label><strong>Name:</strong>
                  <input name="name" type="text" value="" maxlength="50" required="required"/>
                  <strong class="clear"></strong></label>
                <label><strong>Email:</strong>
                  <input type="password" value=""  required="required"/>
                  <strong class="clear"></strong></label>
                <label><strong>Phone:</strong>
                  <input type="text" value=""  required="required"/>
                  <strong class="clear"></strong></label>
                <label><strong>Message:</strong>
                <textarea name="message" placeholder="Please type your message here.." maxlength="300" required></textarea>
                  <strong class="clear"></strong></label>
                <strong class="clear"></strong>
                <div class="btns pad-2"><button class="link-2">Send</button></div>
              </fieldset>
            </form>
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
