<?php
if(isset($_POST['proses']))
{
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $pangkat = $_POST['pangkat'];
    $tugas = $_POST['tugas'];

    $koneksi=mysqli_connect("localhost","root","","info");
    $sql="INSERT INTO info SET nama='$nama', umur='$umur', pangkat='$pangkat', tugas='$tugas'";
    $query=mysqli_query($koneksi, $sql);
    if($query)
    {
        ?>
        <script>
            alert("Data Berhasil Disimpan")
            window.location.href="info.php";
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert('Data Gagal Disimpan: " . mysqli_error($koneksi) . "')
        </script>
        <?php
    }
}

?>
