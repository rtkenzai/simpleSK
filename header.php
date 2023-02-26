<!-- MODUL UTAMA SISTEM -->
<?php
#SAMBUNG KE FAIL SETUP
include 'setup.php';
?>

<html>

<!-- PANGGIL CSS EXTERNAL -->
<link rel="stylesheet" type="text/css" href="style.css">



<!-- NAMA SISTEM DI TITLE BAR BROWSER -->
<title><?php echo $namasys; ?></title>
<!-- INTERNAL CSS UNK HEADER -->
<style>
.mySlides {display:none;}

#bannerimage {
  width: 100%;
  background-image: url("<?php echo $banner; ?>");
  height: 150px;
  background-color:   ;
  background-position: center;
}
</style>
<body>
<div id="bannerimage" style="background-repeat:cover;">
<!-- SLIDE1 -->  
  <div class="mySlides" style="max-width:5800px">
    <center>
	<h2><b><?php echo $kata1; ?></b></h2>
    <h3><i><?php echo $lanjut1; ?></i></h3>
	</center>
  </div>
<!-- SLIDE2 --> 
  <div class="mySlides" style="max-width:5800px">
    <center>
	<h2><b><?php echo $kata2; ?></b></h2>
    <h3><i><?php echo $lanjut2; ?></i></h3>
	</center>
  </div>

</div>
<!-- ARAHAN JAVASCRIPT BANNER --> 
<script>
var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1} 
  x[slideIndex-1].style.display = "block"; 
  setTimeout(carousel, 2000); 
}
</script>
</body>
</html>
<?php include 'utility.php'; ?>