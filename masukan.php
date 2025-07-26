<!DOCTYPE html>
<html lang="en">
<head>
<link href="assets/img/favicon2.png" rel="icon">
    <title>
        Masukan
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Masukan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            text-align: left;
            padding: 10px;
        }
        th {
            background-color: #2980b9;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #d3e9ff;
        }
        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 0 auto 20px;
        }
        form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        form button {
            background-color: #2980b9;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        form button:hover {
            background-color: #206aa0;
        }
        .btn-back {
            display: inline-block;
            background-color: #95a5a6;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
        }
        .btn-back:hover {
            background-color: #7f8c8d;
        }

        #btndelete {
            background-color: #e74c3c; /* Warna merah menarik */
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        #btndelete:hover {
            background-color: #c0392b; /* Warna merah lebih gelap untuk efek hover */
            transform: scale(1.05); /* Sedikit membesar saat dihover */
        }

        #btndelete:active {
            transform: scale(0.95); /* Efek klik */
        }

    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Pangkat</th>
            <th>Masukan</th>
            <th></></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $koneksi = mysqli_connect("localhost", "root", "", "info");
        $sql = "SELECT * FROM masukan";
        $query = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['umur'] ?></td>
            <td><?= $row['pangkat'] ?></td>
            <td><?= $row['masukan'] ?></td>
            <td>
                <a href="delete_masukan.php?id=<?=$row['id']?>"><button id="btndelete">Done</button></a>
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<form action="proses_masukan.php" method="POST">
    <input type="text" name="nama" placeholder="Nama Lengkap">
    <input type="text" name="umur" placeholder="Umur">
    <input type="text" name="pangkat" placeholder="Pangkat">
    <input type="text" name="masukan" placeholder="Silakan tulis masukan anda di sini">
    <button type="submit" name="proses">Submit</button>
</form>

<a href="main.html" class="btn-back">Back</a>

</body>
</html>
