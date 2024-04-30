<!-- Abdullah Faqih -->
<?php include 'koneksi.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KRS</title>
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
        <h2 class="text-center fw-bold">Form Tambah KRS</h2>
        <form action="form-proses-krs.php" method="post" class="mt-3">
            <div class="form-group mt-2">
                <label for="mahasiswa_npm">NPM Mahasiswa</label>
                <input type="text" class="form-control" id="mahasiswa_npm" name="mahasiswa_npm" required>
            </div>
            <div class="form-group mt-2">
                <label for="matakuliah_kodemk">Kode Mata Kuliah</label>
                <input type="text" class="form-control" id="matakuliah_kodemk" name="matakuliah_kodemk" required>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <button type="submit" class="btn btn-primary"><i class="bi bi-floppy-fill"></i> Tambah</button>
                <a href="tampilan-mk-krs.php" class="btn btn-danger">Lihat Mata Kuliah</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>