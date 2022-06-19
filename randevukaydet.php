<html>
<head><meta charset="utf-8"></head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
<?php
//mysql baglanti kodunu ekliyoruz 
include("mysqlbaglan.php");

session_start();

//degiskenleri formdan aliyoruz
$telefon=$_POST['telefon'];
$secilengun=$_POST['Selectgun'];
$secilensaat=$_POST['Selectsaat'];
$username=$_POST['username'];

echo "Girdiginiz bilgiler:</br>";
echo "telefon   :$telefon </br>";
echo "gün:$secilengun</br>";
echo "saat :$secilensaat</br>";
echo "kullanıcı adı : $username</br>";

$sql = "SELECT id FROM kullanicilar where kullaniciadi='$username'";

$cevap = mysqli_query($baglanti,$sql);
$gelen=mysqli_fetch_array($cevap);
$kullaniciid = $gelen['id'];
echo $kullaniciid;
$sql = $sql="INSERT INTO `randevular` (randevusaati, randevugunu, telefon , kullaniciid )"; 
$sql = $sql . "VALUES ('$secilensaat', '$secilengun', '$telefon' , '$kullaniciid' )"; 
	   

echo "<br/>";
//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query( $baglanti,$sql);

//eger cevap FALSE ise hata yazdiriyoruz.      
if(!$cevap)
{
    echo '<br>Hata:' . mysqli_error($baglanti);
}
else
{
    
    
}

//veritabani baglantisini kapatiyoruz.
mysqli_close($baglanti);
?>
<div class="links">
                <a href='cikis.php'>Oturumu Kapat|</a>
                <a href='uyesayfasi.php'>|uye sayfasina dön</a>
            </div>
</body>
</html>
