<?php 
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	$seekid = $_SESSION['SEEK_ID'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/price_rangs.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/handsfree@8.5.1/build/lib/assets/handsfree.css" />
    <script src="https://unpkg.com/handsfree@8.5.1/build/lib/handsfree.js"></script>
    <style>
.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>

<body>

<header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="header-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-1 col-md-1">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo/logo.png" alt="" width="50"></a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu ml-180">
                                    <nav class="d-none d-lg-block ml-20">
                                        <ul id="navigation">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="findjobs.php">Find a Jobs </a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header-btn -->
                            <div class="header-btn d-none f-right d-lg-block ml-130">
                                <div class="dropdown ">
                                 <button class="btn head-btn1 f-right d-lg-block">Profile</button>
                                  <div class="dropdown-content">
                                   <?php  echo'<a href="seeker.dashboard.php" onClick="MyWindow=window.open('."'seeker.dashboard.php?id=".$seekid."', '_window');".'return false;"> DashBoard</a>';?>
                                   <?php echo	'<a href="seeker.editprofile.php" onClick="MyWindow=window.open	('."'seeker.editprofile.php?id=".$seekid."', '_window');".'return false;">Edit Profile</a>';?>
                                   <a href="logout.php">logout</a>
                                   </div>
                                </div>
                                </div>
                                <div class="dropdown ml-3">
                                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Disability
                                    </button>
                                         <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#" onclick="return responsiveVoice.clickEvent();" >Dyslexia</a></li>
                                        <li><a class="dropdown-item" href="#" onclick="return handsfree.start();">Motor Disabilities</a></li>
                                        <li><a class="dropdown-item" href="#" onclick="return magnify();">Low Vision</a></li>
                                        <li class="divider" role="separator"></li>
                                                <li class="dropdown-submenu position-relative"> <a class="dropdown-toggle dropdown-item" href="#" data-toggle="dropdown">Color Blindness <i class="fa fa-long-arrow-right float-right mt-1"></i></a>
                                                  <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#" onclick="colorG()">Deuteranopia</a></li>
                                                    <li><a class="dropdown-item" href="#" onclick="colorR()">Protanopia</a></li>
                                                    <li class="divider" role="separator"></li>
                                                    <li><a class="dropdown-item" href="#"onclick="colorB()">Tritanopia</a></li>
                                                    <li class="divider" role="separator"></li>
                                                    <li><a class="dropdown-item" href="#" onclick="colorA()">Monochromacy</a></li>
                                                  </ul>
                                                </li>
                                              </ul>
                                        </li>
                                        </ul>

                              <!--      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#" onclick="return magnify();">Low Vision</a>
                                        <a class="dropdown-item" href="#"
                                            onclick="return responsiveVoice.clickEvent();">Dyslexia</a>
                                        <a class="dropdown-item" href="#"
                                            onclick="return responsiveVoice.clickEvent();">Hard Hearing</a>
                                        <a class="dropdown-item" href="#" onclick="return handsfree.start();">Motor
                                            Disabilities</a>
                                        <a class="dropdown-item" href="#" onclick="colorblind()">Color Blindness</a>  
                                    </div>-->
                                </div>

    <!--                            <div class="dropdown ml-3" id="colors" style="display : none;">
                                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Types 
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"  onclick="colorG()">Deuteranopia</a>
                                        <a class="dropdown-item" href="#"
                                        onclick="colorR()">Protanopia</a>
                                        <a class="dropdown-item" href="#"
                                        onclick="colorB()">Tritanopia</a>
                                        <a class="dropdown-item" href="#" onclick="colorA()">Monochromacy</a>

                                    </div>
                                </div>-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   

    </header>

    
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=95SUIrBf"></script>
    <script>
        function colorblind() {
            document.getElementById('colors').style.display= "block";
        };
        function colorG() {
            document.body.classList.toggle('nogreen');
            
        };
        function colorB() {
            document.body.classList.toggle('noblue');
        
        };
        function colorR() {
            document.body.classList.toggle('nored');
          
        };
        function colorA() {
            document.body.classList.toggle('dark');
            
        };


        const handsfree = new Handsfree({
    weboji: true
})
handsfree.enablePlugins('browser')
maxFace: 1
handsfree.on('pose', (pose) => {
  
  // Check if the user is looking up
  if (pose.rotation[0] < -10) {
    // Scroll up
    window.scrollBy(0, -10);
  }
  
  // Check if the user is looking down
  if (pose.rotation[0] > 10) {
    // Scroll down
    window.scrollBy(0, 10);
  }
  
  // Check if the user is smiling
  if (pose.expressions.smile > 0.5) {
  // Get the x and y coordinates of the smile
  const [x, y] = pose.annotations.lipsUpperInner[3];
  
  // Get the element at the position of the smile
  const element = document.elementFromPoint(x, y);
  
  // Trigger a click event on the element
  if (element) {
    element.dispatchEvent(new MouseEvent('click', {
      bubbles: true,
      cancelable: true,
      view: window
    }));
  }
}

});
    </script>
    <!-- Start of ChatBot (www.chatbot.com) code -->
<script type="text/javascript">
    window.__be = window.__be || {};
    window.__be.id = "6372050d44eb4900077c6d7f";
    (function() {
        var be = document.createElement('script'); be.type = 'text/javascript'; be.async = true;
        be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.chatbot.com/widget/plugin.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(be, s);
    })();
</script>
<!-- End of ChatBot code -->
<script>
    $(document).on('click', '.dropdown-menu', function (e) {
  e.stopPropagation();
});

// make it as accordion for smaller screens
if ($(window).width() < 992) {
  $('.dropdown-menu a').click(function(e){
    e.preventDefault();
      if($(this).next('.submenu').length){
        $(this).next('.submenu').toggle();
      }
      $('.dropdown').on('hide.bs.dropdown', function () {
     $(this).find('.submenu').hide();
  })
  });
}
    </script>
    



</body>


<!--
    <div class="dropdown ">
    <button class="btn head-btn1 f-right d-lg-block">Profile</button>
    <div class="dropdown-content">
      <a href="logout.php">logout</a>
 </div>
</div>
<header>
       
        <div class="header-area header-transparrent">
            <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                           
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo/logo.png" alt="" width="50"></a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="menu-wrapper">
                                
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="findjobs.php">Find Jobs</a></li>
                                            <li><a href="about.php">About Us</a></li>
                                            <li><a href="contact.php">Contact Us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            

                                </div>
                            </div>
                        </div>


     
    </header>
</body>
-->

</html>
