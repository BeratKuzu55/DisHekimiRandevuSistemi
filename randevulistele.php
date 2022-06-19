<html>
<head><meta charset="utf-8">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
session_start();
    $username = $_SESSION['username'];
    echo "hoşgeldiniz ".$username;
//mysql baglanti kodunu ekliyoruz
include("mysqlbaglan.php");

//sorguyu hazirliyoruz


$sql1 = "SELECT id FROM kullanicilar where kullaniciadi='$username'";

$cevap1 = mysqli_query($baglanti,$sql1);
$gelen1=mysqli_fetch_array($cevap1);
$kullaniciid = $gelen1['id'];
//echo $kullaniciid;
$sql = "SELECT * FROM randevular where kullaniciid='$kullaniciid'";


//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query($baglanti,$sql);


//veritabanından gelen cevabı satır satır alıyoruz.



//eger cevap FALSE ise hata yazdiriyoruz.      
if(!$cevap )
{
    echo '<br>Hata:' . mysqli_error($baglanti);
}

//sorgudan gelen tüm kayitlari tablo içinde yazdiriyoruz.
//önce tablo başlıkları oluşturalım
echo "<table border=1 class='table table-striped table-dark'>";
echo "<tr><th>Randevu Saati</th><th>Randevu Günü</th><th>Telefon</th></tr>";

//veritabanından gelen cevabı satır satır alıyoruz.
$gelen;
while($gelen=mysqli_fetch_array($cevap))
{
    
    echo "<tr><td>".$gelen['randevusaati']."</td>";
    echo "<td>".$gelen['randevugunu']."</td>";
    echo "<td>".$gelen['telefon']."</td>";    
    echo  "<td>"."<a href=randevusil.php?id=".$gelen['randevuid'].">Sil</a>"."</td></tr>"; 
}
// tablo kodunu bitirelim.
echo "</table>";

/*
function randevuSil() {
    $sql2 = "DELETE FROM randevular where randevuid=$gelen";
  }*/


//veritabani baglantisini kapatiyoruz.
mysqli_close($baglanti);


?>
    <div class="links">
        <a href='cikis.php'>Oturumu Kapat|</a>
        <a href='uyesayfasi.php'>|uye sayfasina dön</a>
    </div>

</body>
</html>