<!-- Abdullah Faqih -->
<?php
include 'koneksi.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tampilan Tabel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>

<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="fw-bold">Daftar Mahasiswa</h2>
            <a href="form-mahasiswa.php" class="btn btn-success">Tambah Mahasiswa</a>
        </div>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">NPM</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Jurusan</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Pilihan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM mahasiswa";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td class='text-center'>" . $row['npm'] . "</td>";
                    echo "<td>" . $row['nama_mahasiswa'] . "</td>";
                    echo "<td>" . $row['jurusan'] . "</td>";
                    echo "<td>" . $row['alamat'] . "</td>";
                    echo "<td class='text-center'><a href='edit-mahasiswa.php?npm=" . $row['npm'] . "' class='btn btn-sm btn-primary'>Edit</a> | <a href='delete-mahasiswa.php?npm=" . $row['npm'] . "' class='btn btn-sm btn-danger' onclick=\"return confirm('Yakin Ingin Menghapus Data?')\">Delete</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <h2 class="fw-bold">Daftar KRS</h2>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Nama Mahasiswa</th>
                    <th class="text-center">Mata Kuliah</th>
                    <th class="text-center">Keterangan</th>
                    <th class="text-center">Pilihan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT krs.id, mahasiswa.nama_mahasiswa, mata_kuliah.nama_matakuliah, mata_kuliah.jumlah_sks
                        FROM krs
                        JOIN mahasiswa ON krs.mahasiswa_npm = mahasiswa.npm
                        JOIN mata_kuliah ON krs.matakuliah_kodemk = mata_kuliah.kodemk";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td class='text-center'>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nama_mahasiswa'] . "</td>";
                    echo "<td>" . $row['nama_matakuliah'] . "</td>";
                    echo "<td>" . "<span style='color: red;'>" . htmlspecialchars($row['nama_mahasiswa']) . "</span> telah mengambil mata kuliah <span style='color: red;'>" . htmlspecialchars($row['nama_matakuliah']) . "</span> dengan " . $row['jumlah_sks'] . " SKS</td>";
                    echo "<td class='text-center'><a href='edit-krs.php?id=" . $row['id'] . "' class='btn btn-sm btn-primary'>Edit</a> | <a href='delete-krs.php?id=" . $row['id'] . "' class='btn btn-sm btn-danger' onclick=\"return confirm('Yakin Ingin Menghapus Data?')\">Delete</a></td>";
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