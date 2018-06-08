<!DOCTYPE html>
<html>
  <head>
    <title>Portfolio</title>
    <!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
    <link rel="stylesheet" type="text/css" href="css/reusable-style.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
  </head>
  <body>
    	<div class="main-container flex flex-j-c flex-al-c">
    		<div class="gallery-container flex flex-j-c flex-al-end flex-wrap">
    			<h2>MY GALLERY</h2>
    			<div class="gallery flex flex-j-c flex-al-c flex-wrap" >
	    			<img id="img1" class="img" src="img/1.jpg" onmouseover="list[1].change()" onclick="clicked(this.id)">
            <img id="img2" class="img" src="img/2.jpg" onmouseover="list[2].change()" onclick="clicked(this.id)">
	  				<img id="img3" class="img" src="img/3.jpg" onmouseover="list[3].change()" onclick="clicked(this.id)">
	  				<img id="img4" class="img" src="img/4.jpg" onmouseover="list[4].change()" onclick="clicked(this.id)">
    			</div>
  			</div>
  			<div class="profile-container flex flex-j-c flex-al-c animated infinite bounce" >
  				<img id="pic-show" class="profile-img animated infinite tada" src="img/profile.jpg" onclick="profile.change()">
  			</div>
    	</div>
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script language="javascript" type="text/javascript" src="js/picture.js"></script>
        <script language="javascript" type="text/javascript" src="js/sketch.js"></script>
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
  </body>
</html>
