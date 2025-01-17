<?php include 'header.php'; ?>
<div class="container-xxl py-5 hero-header mb-5">
            <div class="container text-center my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Hasil Perhitungan</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Hasil Perhitungan</li>
                    </ol>
                </nav>
            </div>
        </div>
<?php
// Data validasi (dataset untuk perhitungan Naive Bayes)

// Muat file deskripsi kopi

$data_latih = [
    "Arabica" => [
        "Tingkat keasaman tinggi" => 0.6,
        "Memiliki aroma kompleks" => 0.7,
        "Tingkat kepahitan rendah" => 0.5,
        "Karakteristik rasa halus dan ringan" => 0.7,
        "Tingkat kafein halus" => 0.3,
    ],
    "Robusta" => [
        "Tingkat keasaman rendah" => 0.5,
        "Memiliki aroma unik" => 0.7,
        "Tingkat kepahitan tinggi" => 0.7,
        "Karakteristik rasa kuat" => 0.8,
        "Tingkat kafein strong" => 0.8,
    ],
    "Kopi Gayo" => [
        "Tingkat keasaman sedang" => 0.5,
        "Memiliki aroma rempah" => 0.3,
        "Tingkat kepahitan sedang" => 0.4,
        "Karakteristik rasa halus dan manis" => 0.8,
        "Tingkat kafein halus" => 0.3,
    ],
    "Kopi Mandailing" => [
        "Tingkat keasaman rendah" => 0.5,
        "Memiliki aroma rempah" => 0.3,
        "Tingkat kepahitan sedang" => 0.4,
        "Karakteristik rasa tebal" => 0.6,
        "Tingkat kafein halus" => 0.3,
    ],
    "Kopi Toraja" => [
        "Tingkat keasaman sedang" => 0.5,
        "Memiliki aroma rempah" => 0.3,
        "Tingkat kepahitan rendah" => 0.5,
        "Karakteristik rasa halus" => 0.6,
        "Tingkat kafein halus" => 0.3,
    ],
    "Kopi Bali Kintamani" => [
        "Tingkat keasaman tinggi" => 0.6,
        "Memiliki aroma aroma buah" => 0.8,
        "Tingkat kepahitan rendah" => 0.5,
        "Karakteristik rasa segar, rasa buah" => 0.7,
        "Tingkat kafein halus" => 0.3,
    ],
    "Kopi Flores Bajawa" => [
        "Tingkat keasaman sedang" => 0.5,
        "Memiliki aroma aroma rempah" => 0.3,
        "Tingkat kepahitan sedang" => 0.4,
        "Karakteristik rasa tebal" => 0.6,
        "Tingkat kafein halus" => 0.3,
    ],
    "Kopi Jawa" => [
        "Tingkat keasaman rendah" => 0.5,
        "Memiliki aroma aroma rempah" => 0.3,
        "Tingkat kepahitan sedang" => 0.4,
        "Karakteristik rasa halus" => 0.6,
        "Tingkat kafein halus" => 0.3,
    ],
    // Tambahkan data lainnya sesuai tabel validasi
];

$fitur_user = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Input dari form
    $keasaman = $_POST['keasaman'] ?? null;
    $aroma = $_POST['aroma'] ?? null;
    $kepahitan = $_POST['kepahitan'] ?? null;
    $karakteristik = $_POST['karakteristik'] ?? null;
    $kafein = $_POST['kafein'] ?? null;

    // Mapping input pengguna ke fitur dataset
    $fitur_user = [
        "Tingkat keasaman $keasaman",
        "Memiliki aroma $aroma",
        "Tingkat kepahitan $kepahitan",
        "Karakteristik rasa $karakteristik",
        "Tingkat kafein $kafein",
    ];

    $total_kopi = count($data_latih);
    $prior = 1 / $total_kopi;

    // Hitung probabilitas untuk setiap jenis kopi
    $hasil_probabilitas = [];
    foreach ($data_latih as $jenis_kopi => $fitur) {
        $likelihood = 1;
        foreach ($fitur_user as $fitur_input) {
            $likelihood *= ($fitur[$fitur_input] ?? 0.01); // Use 0.01 instead of 0.1 for unseen features
        }
        $posterior = $likelihood * $prior;
        $hasil_probabilitas[$jenis_kopi] = $posterior;
    }
    $total_probabilitas = array_sum($hasil_probabilitas);
    foreach ($hasil_probabilitas as &$prob) {
        $prob /= $total_probabilitas;
    }

    // Urutkan hasil berdasarkan probabilitas tertinggi
    arsort($hasil_probabilitas);
} else {
    echo "<div class='container text-center'><p class='text-danger'>Tidak ada data yang diterima. Silakan kembali ke form dan masukkan data.</p></div>";
    include 'footer.php';
    exit;
}
?>
<?php
$deskripsi_kopi = include 'kopi.php';


// Ambil hasil dengan probabilitas tertinggi
$hasil_persentase = array_map(function($prob) {
    return $prob * 100;
}, $hasil_probabilitas);

// Ambil hasil dengan probabilitas tertinggi
$max_prob = max($hasil_persentase);
$kopi_terbaik = array_keys($hasil_persentase, $max_prob);

// Fungsi untuk mendapatkan deskripsi kopi
function getDeskripsiKopi($jenis_kopi, $deskripsi_kopi) {
    return $deskripsi_kopi[$jenis_kopi]['deskripsi'] ?? "Deskripsi tidak tersedia.";
}
?>
<!-- Hasil Perhitungan Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Hasil Perhitungan</h5>
            <h1 class="mb-5">Rekomendasi Kopi</h1>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Jenis Kopi</th>
                        <th>Probabilitas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    // Ambil hanya 3 hasil teratas
                    $hasil_teratas = array_slice($hasil_persentase, 0, 3, true);
                    foreach ($hasil_teratas as $jenis_kopi => $persentase): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($jenis_kopi); ?></td>
                            <td><?php echo number_format($persentase, 2); ?>%</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br>

            <h2>Rekomendasi Kopi Terbaik</h2>
            <?php if (count($kopi_terbaik) > 1): ?>
                <p>Terdapat <?php echo count($kopi_terbaik); ?> jenis kopi dengan probabilitas tertinggi yang sama:</p>
                <?php foreach ($kopi_terbaik as $index => $jenis): ?>
                    <h3>Pilihan <?php echo $index + 1; ?>: <?php echo $jenis; ?></h3>
                    <p><strong>Probabilitas:</strong> <?php echo number_format($max_prob, 2); ?>%</p>
                    <p><strong>Deskripsi:</strong> <?php echo getDeskripsiKopi($jenis, $deskripsi_kopi); ?></p>
                <?php endforeach; ?>
            <?php else: ?>
                <p><strong>Jenis Kopi:</strong> <?php echo $kopi_terbaik[0]; ?></p>
                <p><strong>Probabilitas:</strong> <?php echo number_format($max_prob, 2); ?>%</p>
                <p><strong>Deskripsi:</strong> <?php echo getDeskripsiKopi($kopi_terbaik[0], $deskripsi_kopi); ?></p>
            <?php endif; ?>

        </div>
        <div class="text-center mt-4">
            <a href="form_user.php" class="btn btn-primary">Kembali ke Form</a>
        </div>
    </div>
</div>

<!-- Hasil Perhitungan End -->

<?php include 'footer.php'; ?>
