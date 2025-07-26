<?php
$koneksi = mysqli_connect("localhost","root","","info");
$id_data = $_POST['id'];

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['proses']))
{
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $pangkat = $_POST['pangkat'];
    $tugas = $_POST['tugas'];
    $sql = "UPDATE info SET nama='$nama', umur='$umur', pangkat='$pangkat', tugas='$tugas' WHERE id='$id_data'";
    $query = mysqli_query($koneksi, $sql);
    if($query)
    {
        ?>
        <script>
            alert('Berhasil Mengubah Data')
            window.location.href="info.php";
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert('Gagal Mengubah Data: " . mysqli_error($koneksi) . "')
        </script>
        <?php
    }
}

?>