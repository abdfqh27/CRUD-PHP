<!-- Abdullah Faqih -->
<?php include 'koneksi.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F8F9FA;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #CED4DA;
            /* Mengatur transparansi latar belakang */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center fw-bold">Form Mata Kuliah</h2>
        <form action="form-proses-matakuliah.php" method="post" class="mt-3">
            <div class="form-group">
                <label for="kodemk">Kode MK</label>
                <input type="text" class="form-control" id="kodemk" name="kodemk" required>
            </div>
            <div class="form-group mt-2">
                <label for="nama_matakuliah">Nama Mata Kuliah</label>
                <input type="text" class="form-control" id="nama_matakuliah" name="nama_matakuliah" required>
            </div>
            <div class="form-group mt-2">
                <label for="jumlah_sks">Jumlah SKS</label>
                <input type="number" class="form-control" id="jumlah_sks" name="jumlah_sks" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3"><i class="bi bi-floppy-fill"></i> Tambah</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>