<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #ffffff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
            text-align: center;
        }
        table {
            width: 100%;
            border: none;
            border-collapse: collapse;
        }
        td {
            padding: 10px 0;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
        button:focus {
            outline: none;
        }
        .form-footer {
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
<?php

$koneksi = mysqli_connect("localhost","root","","info");
$id_data = $_GET['id'];

$sql="SELECT * FROM info WHERE id='$id_data'";
$query=mysqli_query($koneksi, $sql);
while($row = mysqli_fetch_array($query))
{
    $nama = $row['nama'];
    $umur = $row['umur'];
    $pangkat = $row['pangkat'];
    $tugas = $row['tugas'];
}

?>
    <div class="container">
        <h2>Update Data</h2>
        <form action="proses_update.php" method="post">
            <table>
                <tr>
                    <td>
                        <input type="text" name="id" value="<?= $id_data ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="nama" value="<?= $nama ?>" placeholder="Nama">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="umur" value="<?= $umur ?>" placeholder="Umur">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="pangkat" value="<?= $pangkat ?>" placeholder="Pangkat">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="tugas" value="<?= $tugas ?>" placeholder="Tugas">
                    </td>
                </tr>
            </table>
            <br>
            <button type="submit" name="proses">Update</button>
        </form>
        <div class="form-footer">
            Pastikan semua data sudah benar sebelum mengklik *Update*.
        </div>
    </div>
</body>
</html>
