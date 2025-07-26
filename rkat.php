<!DOCTYPE html>
<html lang="en">
<head>
<link href="assets/img/favicon2.png" rel="icon">
    <title>
        RKAT
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Rapat Kerja Akhir Tahun</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
        header {
            text-align: center;
            margin-bottom: 30px;
        }
        header h1 {
            color: #2980b9;
            margin: 0;
        }
        header p {
            color: #7f8c8d;
            font-size: 18px;
        }
        section {
            margin-bottom: 40px;
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
        canvas {
            max-width: 100%;
            margin: 0 auto;
            display: block;
        }
        .btn-back {
            display: inline-block;
            background-color: #34495e;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .btn-back:hover {
            background-color: #2c3e50;
            transform: scale(1.05);
        }
        .btn-back:active {
            transform: scale(0.95);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

<header>
    <h1>Hasil Rapat Kerja Akhir Tahun</h1>
    <p>Disampaikan kepada seluruh anggota untuk evaluasi dan perencanaan tahun mendatang.</p>
</header>

<section>
    <h2>Poin-Poin Penting</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Topik</th>
                <th>Keputusan</th>
                <th>Penanggung Jawab</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Peningkatan Efisiensi</td>
                <td>Menerapkan otomatisasi dalam produksi</td>
                <td>Tim IT & Produksi</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Anggaran 2024</td>
                <td>Pengurangan biaya operasional 10%</td>
                <td>Keuangan</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Program Kesejahteraan</td>
                <td>Penambahan subsidi transportasi</td>
                <td>SDM</td>
            </tr>
        </tbody>
    </table>
</section>

<section>
    <h2>Diagram Pencapaian Tahun Ini</h2>
    <canvas id="achievementChart" width="400" height="400"></canvas>
</section>

<!-- Tombol Kembali -->
<a href="main.html"><button class="btn-back">Back</button></a>

<script>
    // Data pencapaian untuk chart
    const data = {
        labels: ['Produksi', 'Penjualan', 'Efisiensi', 'Kesejahteraan Anggota', 'Inovasi'],
        datasets: [{
            label: 'Pencapaian (%)',
            data: [85, 90, 75, 80, 70],
            backgroundColor: [
                '#2980b9', '#27ae60', '#f1c40f', '#8e44ad', '#e74c3c'
            ],
            borderColor: [
                '#21618c', '#1e8449', '#d4ac0d', '#6c3483', '#c0392b'
            ],
            borderWidth: 1
        }]
    };

    // Konfigurasi chart
    const config = {
        type: 'bar',
        data: data,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    enabled: true
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100
                }
            }
        }
    };

    // Render chart
    const ctx = document.getElementById('achievementChart').getContext('2d');
    new Chart(ctx, config);
</script>

</body>
</html>
