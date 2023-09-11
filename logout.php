<?php
session_start();


        
session_unset();
//menghapus data pada sesi

session_destroy();
//menghancurkan atau menghentikan sesi
      
header("Location: login.php");
//mengarahkan user kembali ke halaman login
    


?>
