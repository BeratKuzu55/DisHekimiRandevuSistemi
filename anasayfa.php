<?php 
session_start(); 
   
require('mysqlbaglan.php'); 

 

if (isset($_POST['username']) and isset($_POST['password'])){ 

extract($_POST); 

 

// sifre metni SHA256 ile şifreleniyor. 

$password = hash('sha256', $password); 

$sql = "SELECT * FROM `kullanicilar` WHERE "; 
// kullanıcılar tablosunu getirdik

$sql= $sql . "kullaniciadi='$username' and sifre='$password'"; 
// tablodan kullanıcı adı ve şifresi eşleşen kullanıcıyı bulmaya calıstık
 // yukarıdaki sql degiskenine ekleme yaptık

$cevap = mysqli_query($baglanti, $sql); 
//baglanti degiskenindeki database e baglandık ve sql formunu gonderdik 
//eger cevap FALSE ise hata yazdiriyoruz.       

if(!$cevap ){ 

    echo '<br>Hata:' . mysqli_error($baglanti); 

} 

//veritabanindan dönen satır sayısını bul 

$say = mysqli_num_rows($cevap); 
// tablodan kullanıcı adı ve şifresi eşleşen kullanıcıyı bulduk
if ($say == 1){ 

    $_SESSION['username'] = $username; 

 }else{ 

$mesaj = "<h1> Hatalı Kullanıcı adı veya Şifre!</h1>"; 

 } 

} 

if (isset($_SESSION['username'])){ 

header("Location: uyesayfasi.php"); 

}else
{ 

//oturum yok ise login formu görüntüle  
   
   ?> 


<?php } ?>