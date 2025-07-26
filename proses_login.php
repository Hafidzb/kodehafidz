<?php
session_start();
// Memulai Koneksi ke DB
$koneksi = mysqli_connect("localhost","root","","login");

// Menangkap Data dari Form
$username1 = $_POST['username'];
$password1 = $_POST['password'];

// Cek Username DB
$sql = "SELECT COUNT(*) AS jumlah FROM USER WHERE username = '$username1'";
$query = mysqli_query($koneksi, $sql);
while($row=mysqli_fetch_array($query))
{
    $jumlah1 = $row['jumlah'];
}

// Cek Kondisi Username
if($jumlah1=='0')
{
    ?>
    <script>
        alert("Username Belum Terdaftar");
        window.location.href="index.php";
    </script>
    <?php
}
else
{
    // Cek password DB
    $sql = "SELECT password FROM USER WHERE username = '$username1'";
    $query = mysqli_query($koneksi, $sql);
    while($row=mysqli_fetch_array($query))
    {
        $pw = $row['password'];
    }

    // Program membandingkan password input dengan password DB
    if($pw==$password1)
    {
        $_SESSION['username']=$username1;
        header("location:main.html");
    }
    else
    {
        // program jika password salah
        ?>
        <script>
            alert("Password Salah");
            window.location.href="index.php";
        </script>
        <?php
    }
}
?>