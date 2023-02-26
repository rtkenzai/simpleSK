<!-- MODUL HAKIM BERI MARKAH -->
<?php
#ELAK SISTEM DARI BYPASS
require 'keselamatan.php';
#SAMBUNG KE P/DATA
require 'tetapan.php';
#TERIMA VALUE YG DI POST
if(isset($_POST['submit_row']))
{
 $iditem=$_POST['iditem'];
 $markah=$_POST['markah'];
 $penuh=$_POST['penuh'];
 $idpeserta=$_POST['idpeserta'];
 $idhakim=$_POST['idadmin']; 
#SEMAK MARKAH YG DIMASUKKAN	
if($markah>$penuh){
echo "<script>alert('Nilai lebih dari markah penuh'); 
window.location='pemarkahan_beri.php?id=$idpeserta'</script>"; 
 }else{

#MASUKKAN MARKAH KE TABLE MARKAH		
$sql = "INSERT INTO markah(markah,iditem,idpeserta,idadmin) 
VALUES('$markah','$iditem','$idpeserta','$idhakim')";
mysqli_query($con,$sql); 
#PAPAR MSG JIKA BERJAYA
echo "<script>alert('MARKAH BERJAYA DIREKODKAN'); 
window.location='pemarkahan.php'</script>";
 }
}
?>