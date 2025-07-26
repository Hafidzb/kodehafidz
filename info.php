<html>
    <head>
        <link href="assets/img/favicon2.png" rel="icon">
        <title>
            Military Information 
        </title>
    </head>
</html>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 0;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 30px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    #table {
        background-color: #3498db;
        color: white;
    }

    th, td {
        padding: 12px 20px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ecf0f1;
    }

    #btn1 {
        background-color: #2980b9;
        border-radius: 8px;
        padding: 10px 20px;
        color: white;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        transition: background-color 0.3s;
        display: inline-block;
        margin-top: 20px;
        margin-left: 80%;
    }

    #btn1:hover {
        background-color: #1abc9c;
    }

    #btnadd, #btnedit, #btndelete {
        padding: 8px 16px;
        border-radius: 6px;
        color: white;
        border: none;
        font-weight: bold;
        cursor: pointer;
        transition: transform 0.2s ease;
    }

    #btnadd {
        background-color: #2ecc71;
    }

    #btnedit {
        background-color: #f39c12;
    }

    #btndelete {
        background-color: #e74c3c;
    }

    #btnadd:hover {
        background-color: #27ae60;
        transform: scale(1.05);
    }

    #btnedit:hover {
        background-color: #f1c40f;
        transform: scale(1.05);
    }

    #btndelete:hover {
        background-color: #c0392b;
        transform: scale(1.05);
    }

    a {
        text-decoration: none;
    }

    /* Add responsive design for small screens */
    @media (max-width: 768px) {
        #btn1 {
            margin-left: 70%;
        }
        table {
            font-size: 14px;
        }
    }

    #title{
        font-family:"arial black";
        display:flex;
    }
</style>
<a id="title"><h2><table><tr><th>Military AD 09</table></tr></th></h2></a>
<table>
    <thead>
        <tr id="table">
            <th>ID</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Pangkat</th>
            <th>Tugas</th>
            <th>Action</th>
            <th><a href="add.php"><button id="btnadd">Input</button></a></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $koneksi=mysqli_connect("localhost","root","","info");
        $sql="SELECT * FROM info";
        $query=mysqli_query($koneksi, $sql);
        while($row = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['nama']?></td>
            <td><?=$row['umur']?></td>
            <td><?=$row['pangkat']?></td>
            <td><?=$row['tugas']?></td>
            <td>
                <a href="update.php?id=<?=$row['id']?>"><button id="btnedit">Update</button></a>
            </td>
            <td>
                <a href="delete.php?id=<?=$row['id']?>"><button id="btndelete">Done</button></a>
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<a href='main.html'><button id="btn1">Back</button></a>
