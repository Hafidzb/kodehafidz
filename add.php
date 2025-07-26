<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Add Data</title>
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
        .input-type {
            padding: 20px 30px;
            border-radius: 8px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 10px 0;
        }
        input[type="text"] {
            width: 92%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: #f9f9f9;
        }
        input[type="text"]:focus {
            outline: none;
            border-color: #007bff;
            background-color: #ffffff;
        }
        #btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            background-color: #28a745;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        #btn:hover {
            background-color: #218838;
        }
        #btn:focus {
            outline: none;
        }
        #btn2 {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #77b6ca;
            color: #ffffff;
            font-size: 14px;
            cursor: pointer;
            margin-top: 10px;
        }
        #btn2:hover {
            background-color: #5fa2b3;
        }
    </style>
</head>
<body>
    <form action="proses_add.php" method="post">
        <div class="input-type">
            <table cellpadding="10">
                <tr>
                    <td>
                        <input type="text" name="id" placeholder="ID">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="nama" placeholder="Nama">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="umur" placeholder="Umur">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="pangkat" placeholder="Pangkat">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="tugas" placeholder="Tugas">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="proses" id="btn">Input</button>
                    </td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>
