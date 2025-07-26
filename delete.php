<?php
    $id_data = $_GET['id'];

    $koneksi=mysqli_connect("localhost","root","","info");
    echo $sql="DELETE FROM info WHERE id='$id_data'";
    $query=mysqli_query($koneksi, $sql);
    if($query)
    {
        ?>
        <script>
           alert("Data Berhasil Dihapus")
            window.location.href="info.php"
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert('Data Gagal Dihapus: " . mysqli_error($koneksi) . "')
        </script>
        <?php
    }

?>