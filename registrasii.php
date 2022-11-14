<?php 
    include "connection.php";

    $conn = Opencon();

    $result = $conn->query("SELECT * FROM tb_user WHERE email='$_POST[email]'");
    if ($result->num_rows >= 0) {
        echo "Email Sudah Terdaftar";
              exit();
    }
    else {
        $password    =md5('$_POST[password]');
        mysql_query("INSERT INTO tb_user (userid, nama, alamat, email, hp, password)
        VALUES ('$_POST[userid]', '$_POST[nama]', '$_POST[alamat]', '$_POST[email]', '$_POST[hp]', '$password')");    
        echo "Registrasi Berhasil Di Lakukan!";
              exit();
    }

    Closecon ($conn);
?>