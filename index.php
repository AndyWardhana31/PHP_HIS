<html>
<head>
    <title>Membuat Form Pendaftaran</title>    
</head>
<body>
    <h2>Membuat Registrasi</h2>
    <h4>Silahkan Isi Data Pada Kolom Tersedia!</h4>
    <form action="registrasii.php" method="post" name="form1">        
        <table>
            <tr>
                <td width="120">Username</td>
                <td><input type="text" name="userid"></td>
            </tr>
            <tr>
                <td width="120">Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td><input type="text" name="hp"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>