<!-- Abdullah Faqih -->
<?php
include 'koneksi.php';
$npm = $_GET['npm'];

// Ambil data mahasiswa berdasarkan NPM
$sql = "SELECT * FROM mahasiswa WHERE npm='$npm'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_mahasiswa = mysqli_real_escape_string($conn, $_POST['nama_mahasiswa']);
    $jurusan = mysqli_real_escape_string($conn, $_POST['jurusan']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);

    // Update data mahasiswa
    $sql = "UPDATE mahasiswa SET nama_mahasiswa='$nama_mahasiswa', jurusan='$jurusan', alamat='$alamat' WHERE npm='$npm'";

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
    <title>Edit Mahasiswa</title>
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
        <h2 class="text-center fw-bold">Edit Mahasiswa</h2>
        <form action="" method="post" class="mt-3">
            <div class="form-group">
                <label for="nama_mahasiswa">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa"
                    value="<?php echo htmlspecialchars($row['nama_mahasiswa']); ?>" required>
            </div>
            <div class="form-group mt-2">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan">
                    <option value="Teknik Informatika" <?php echo $row['jurusan'] == 'Teknik Informatika' ? 'selected' : ''; ?>>Teknik Informatika</option>
                    <option value="Sistem Informasi" <?php echo $row['jurusan'] == 'Sistem Informasi' ? 'selected' : ''; ?>>Sistem Informasi</option>
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat"
                    rows="3"><?php echo htmlspecialchars($row['alamat']); ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3"><i class="bi bi-floppy-fill"></i> Update</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>