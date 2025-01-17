<?php include 'header.php';?>

<?php include 'koneksi.php';?>

        <!-- Navbar & Hero start -->
        <div>
            <div class="container-xxl py-5 hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Tabel Karakteristik</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Tabel Karakteristik</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

<?php $sql = "SELECT id_karakter, kode_karakter, karakter_kopi FROM karakter_kopi";
$result = $conn->query($sql);
?>
        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Tabel Kopi</h5>
                    <h1 class="mb-5">Tabel Karakteristik Kopi</h1>
                    <h5 class="text-center">Berikut ini adalah aspek-aspek yang digunakan dalam perhitungan rekomendasi jenis kopi berdasarkan selera</h5>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center">
                                        <table class="table table-bordered">
                                            <thead class="bg-dark text-white">
                                                <tr>
                                                    <th style="width: 5%;">#</th>
                                                    <th style="width: 15%;">Kode Karakteristik</th>
                                                    <th>Karakteristik Kopi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row['id_karakter'] . "</td>";
                                                        echo "<td class='text-truncate'>" . $row['kode_karakter'] . "</td>";
                                                        echo "<td>" . $row['karakter_kopi'] . "</td>";
                                                        echo "</tr>";
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='3'>Tidak ada data</td></tr>";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php $sql = "SELECT id, kode_kopi, jenis_kopi FROM kopi";
$result = $conn->query($sql);
?>
        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Tabel Kopi</h5>
                    <h1 class="mb-5">Tabel Jenis Kopi</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center">
                                        <table class="table table-bordered">
                                            <thead class="bg-dark text-white">
                                                <tr>
                                                    <th style="width: 5%;">#</th>
                                                    <th style="width: 15%;">Kode Kopi</th>
                                                    <th>Jenis Kopi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                // Cek apakah ada data
                                                if ($result->num_rows > 0) {
                                                    // Loop untuk menampilkan data
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row['id'] . "</td>";
                                                        echo "<td class='text-truncate'>" . $row['kode_kopi'] . "</td>";
                                                        echo "<td>" . $row['jenis_kopi'] . "</td>";
                                                        echo "</tr>";
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='3'>Tidak ada data</td></tr>";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
        
        <!-- Footer Start -->
        <?php include 'footer.php'; ?>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</html>