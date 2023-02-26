<!-- MODUL HAKIM -->
<?php 
#PAPARAN HEADER SISTEM
include 'header.php';
?>
<html>
<body>
<center>
<h2>LOGIN ADMIN/HAKIM</h2>
<form method="post" action="logmasuk.php">
<div>ID Anda:
<input onblur="semak(this)" type="text" style="text-transform: uppercase"
name="id" placeholder="TAIP DI SINI"
maxLength="10" size="25" required autofocus />
<script>
function checkLength(kira) {
if (kira.value.length < 5) {
   alert("Taip ID Anda!")
}
  }
</script>
<br>
Katalaluan:
<input type="password" name="pass" 
placeholder="****" maxlength="9" size="10" required />
</div>
<br>
<div>
<button name="hantar" type="submit">LOGIN</button> 
<button type="reset">RESET</button>
</div>			
</form>			
</center>
</body>
</html>