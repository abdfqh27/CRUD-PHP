<!-- Abdullah Faqih -->
<?php
include 'koneksi.php';
$id = $_GET['id'];

// Ambil data KRS berdasarkan ID
$sql = "SELECT * FROM krs WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// Ambil data mahasiswa dan mata kuliah untuk dropdown
$mahasiswaQuery = "SELECT npm, nama_mahasiswa FROM mahasiswa";
$matakuliahQuery = "SELECT kodemk, nama_matakuliah FROM mata_kuliah";

$mahasiswaResult = mysqli_query($conn, $mahasiswaQuery);
$matakuliahResult = mysqli_query($conn, $matakuliahQuery);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mahasiswa_npm = mysqli_real_escape_string($conn, $_POST['mahasiswa_npm']);
    $matakuliah_kodemk = mysqli_real_escape_string($conn, $_POST['matakuliah_kodemk']);

    // Update data KRS
    $sql = "UPDATE krs SET mahasiswa_npm='$mahasiswa_npm', matakuliah_kodemk='$matakuliah_kodemk' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        header("Location: tampilan-mahasiswa.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Krs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- icon -->
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
        <h2 class="text-center fw-bold">Edit KRS</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="mahasiswa_npm">Nama Mahasiswa</label>
                <select name="mahasiswa_npm" id="mahasiswa_npm" class="form-control">
                    <?php while ($mahasiswa = mysqli_fetch_assoc($mahasiswaResult)) {
                        $selected = ($mahasiswa['npm'] == $row['mahasiswa_npm']) ? 'selected' : '';
                        echo "<option value='" . $mahasiswa['npm'] . "' $selected>" . $mahasiswa['nama_mahasiswa'] . "</option>";
                    } ?>
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="matakuliah_kodemk">Mata Kuliah</label>
                <select name="matakuliah_kodemk" id="matakuliah_kodemk" class="form-control">
                    <?php while ($matakuliah = mysqli_fetch_assoc($matakuliahResult)) {
                        $selected = ($matakuliah['kodemk'] == $row['matakuliah_kodemk']) ? 'selected' : '';
                        echo "<option value='" . $matakuliah['kodemk'] . "' $selected>" . $matakuliah['nama_matakuliah'] . "</option>";
                    } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-3"><i class="bi bi-floppy-fill"></i> Update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>