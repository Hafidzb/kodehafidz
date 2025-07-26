<!DOCTYPE html>
<html lang="en">
<head>
<link href="assets/img/favicon2.png" rel="icon">
    <title>
        Statistik
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
        .chart-container {
            width: 80%;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            color: #2980b9;
        }

        button {
            background-color: #34495e; /* Warna biru tua */
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        button:hover {
            background-color: #2c3e50; /* Warna lebih gelap untuk efek hover */
            transform: scale(1.05); /* Sedikit membesar */
        }

        button:active {
            transform: scale(0.95); /* Efek klik */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

    </style>
</head>
<body>

<h1>Kesuksesan Misi</h1>
<div class="chart-container">
    <canvas id="successChart"></canvas>
</div>

<script>
    // Ambil data misi dan anggota dari backend melalui PHP (misalnya menggunakan JSON)
    const missionData = [
        { nama: "Batalion A", misi: 12 },
        { nama: "Batalion B", misi: 15 },
        { nama: "Batalion C", misi: 9 },
        { nama: "Batalion D", misi: 7 }
    ];

    // Pisahkan nama dan jumlah misi untuk digunakan dalam grafik
    const labels = missionData.map(data => data.nama);
    const dataValues = missionData.map(data => data.misi);

    // Buat diagram menggunakan Chart.js
    const ctx = document.getElementById('successChart').getContext('2d');
    const successChart = new Chart(ctx, {
        type: 'bar', // Jenis grafik (bar chart)
        data: {
            labels: labels,
            datasets: [{
                label: 'Jumlah Misi Berhasil',
                data: dataValues,
                backgroundColor: [
                    '#2980b9', '#27ae60', '#8e44ad', '#e74c3c'
                ],
                borderColor: [
                    '#21618c', '#1e8449', '#6c3483', '#c0392b'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    position: 'top'
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
    <a href="main.html"><button>Back</button></a>
</body>
</html>
