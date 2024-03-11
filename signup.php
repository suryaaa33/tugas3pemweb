<?php
if (isset($_POST['submit'])){
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $tgllahir = $_POST["tgllahir"];
    $prodi = $_POST["prodi"];
    $alamat = $_POST["alamat"];
    $handphone = $_POST["handphone"];
    $jeniskelamin = $_POST["kelamin"];

    echo "<h2> Data anda sebagai berikut </h2>";
    echo "Nama :  $nama <br>" ;
    echo "Email : $email <br>";
    echo "Password : $password <br>";
    echo "Tanggal Lahir : $tgllahir <br>";
    echo "Program Studi : $prodi <br>";
    echo "Alamat : $alamat <br>";
    echo "Handphone : $handphone <br>";
    echo "Jenis Kelamin : $jeniskelamin <br>";

    echo '<script>
window.location = "login.php";
</script>';
}else{


?>

<html>
    <body>
        <h2>Sign Up</h2>
        <form action = " " method="post">
            Nama: <input type = "text" name = "nama"><br>
            E-mail: <input type = "text" name = "email"><br>
            Password: <input type = "password" name = "password"><br>
            Tanggal Lahir: <input type = "date" name = "tgllahir"><br>
            Program Studi: <select name = "prodi">
                <option value = "Sistem Informasi" selected> Sistem Informasi</option>
                <option value = "Ilmu Komputer" selected> Ilmu Komputer</option>
                <option value = "Manajemen Bisnis" selected> Manajemen Bisnis</option>
                <option value = "Ilmu Komunikasi" selected> Ilmu Komunikasi</option>
                <option value = "Psikologi" selected> Psikologi</option>
                <option value = "Teknik Industri" selected> Teknik Industri</option>
                <option value = "Sastra Inggris" selected> Sastra Inggris</option>
                </select><br>
            Alamat: <textarea id="alamat" name="alamat" rows="2" cols="30">
                </textarea><br>
            Handphone: <input type = "text" name = "handphone"><br>
            Jenis Kelamin: <input type = "radio" name = "kelamin" value="Laki-Laki">Laki-Laki
            <input type = "radio" name = "kelamin" value="Perempuan">Perempuan
            <br>
            <script type = "text/javascript">
                function signup(){
                    alert("SIGN UP BERHASIL!!");
                }
            </script>
            <input type = "submit" name = "submit" value="Save" onclick="signup()"/> 
            <input type = "reset" name = "reset" value="Cancel">
        </form>
    </body>
</html>
<?php
}
?>

