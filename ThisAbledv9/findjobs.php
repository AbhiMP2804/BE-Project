<?php 	ob_start();
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>ThisAbled-Find Jobs</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo.png">
	<link rel="stylesheet" href="https://unpkg.com/handsfree@8.5.1/build/lib/assets/handsfree.css" />
  <script src="https://unpkg.com/handsfree@8.5.1/build/lib/handsfree.js"></script>

</head>

<?php

if(!empty($_SESSION['EMP_ID']))
{ 
  include 'navbar.emp.loggedin.php';
 }
 elseif(!empty($_SESSION['SEEK_ID'])){
  include 'navbar.loggedin.php'; 
 }
else {	include 'navbar.php';  }
include 'findjobs_content.php';
include 'footer.php';


?>
 <script> 
  const handsfree = new Handsfree({weboji: true})
  handsfree.enablePlugins('browser')
handsfree.start()
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
<body>
</body>

</html>
