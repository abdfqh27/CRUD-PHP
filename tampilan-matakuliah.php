<!-- Abdullah Faqih -->
<?php
include 'koneksi.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tampilan Matakuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Daftar Mata Kuliah</h2>
            <a href="form-matakuliah.php" class="btn btn-success">Tambah Mata Kuliah</a>
        </div>

        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">Kode MK</th>
                    <th class="text-center">Mata Kuliah</th>
                    <th class="text-center">SKS</th>
                    <th class="text-center">Pilihan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM mata_kuliah";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td class='text-center'>" . $row['kodemk'] . "</td>";
                    echo "<td>" . $row['nama_matakuliah'] . "</td>";
                    echo "<td class='text-center'>" . $row['jumlah_sks'] . "</td>";
                    echo "<td class='text-center'><a href='edit-matakuliah.php?kodemk=" . $row['kodemk'] . "' class='btn btn-primary'>Edit</a> | <a href='delete-matakuliah.php?kodemk=" . $row['kodemk'] . "' class='btn btn-danger' onclick=\"return confirm('Yakin Ingin Menghapus Data?')\">Delete</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>