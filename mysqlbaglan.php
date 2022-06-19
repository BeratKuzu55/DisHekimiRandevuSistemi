<?php 
   $server = 'localhost'; 
   
   $user = 'id19083931_kuzuw'; 
   
   $password = '/HZ$wB]QoQ%u-9F('; 
   
   $database = 'id19083931_dishekimidb'; 
   
   $baglanti = mysqli_connect($server,$user,$password,$database); 
   
    
   // BU HALİNİ YUKLE
   if (!$baglanti) { 
   
       echo "MySQL sunucu ile baglanti kurulamadi! </br>"; 
   
       echo "HATA: " . mysqli_connect_error(); 
   
       exit; 
   
   } 
   
   ?>