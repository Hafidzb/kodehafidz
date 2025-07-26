<?php
if(isset($_POST['proses']))
{
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $pangkat = $_POST['pangkat'];
    $masukan = $_POST['masukan'];

    $koneksi=mysqli_connect("localhost","root","","info");
    $sql="INSERT INTO masukan SET nama='$nama', umur='$umur', pangkat='$pangkat', masukan='$masukan'";
    $query=mysqli_query($koneksi, $sql);
    if($query)
    {
        ?>
        <script>
            alert("Data Berhasil Disimpan")
            window.location.href="masukan.php";
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
