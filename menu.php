<?php include 'header.php';?>

        <!-- Navbar & Hero End -->
    <div>
        <div>
            <div class="container-xxl py-5 hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Kopi</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Kopi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <?php 
        $coffeeHistory = [
            [
                'title' => 'Awal Mula Pada 1696',
                'content' => 'Masuknya kopi ke nusantara tak lepas dari peran kolonialisme Belanda. Sejarah penyebaran kopi dimulai pada 1696 oleh Belanda. Pada masa itu Belanda membawa bibit kopi pertama dari Malabar, India, ke Pulau Jawa. 
                Bibitnya sendiri berasal dari Yaman. Seorang Gubernur Belanda yang bertugas di Malabar, India berinisiatif mengirimkan bibit yang diketahui berjenis arabika ini kepada seorang Gubernur Belanda lain yang sedang bertugas di Batavia, sekarang ini bernama Jakarta. Jadi kopi Malaba yang kita kenal dan tumbuh di Provinsi Jawa Barat sekarang ini kemungkinan berasal dari India yang merupakan bibit pertama yang tercatat sejarah.',
                'image' => 'img/kopibiji.jpg'
            ],
            [
                'title' => 'Percobaan Kedua Pada 1699',
                'content' => 'Tapi mereka tak mau menyerah begitu saja. Pada 1699 upaya kedua dilakukan. Kali stek kopi dikirim dari Malabar, India juga. Kemudian pada  1706 hasil tanaman kopi pertama di Pulau Jawa dikirim ke Kebun Raya Amsterdam untuk diteliti. Dan menurut hasil penelitian, kopi tersebut memiliki kualitas sangat baik dan berpotensi untuk diperdagangkan ke seluruh dunia.

Sejak saat itu, Belanda memutuskan untuk melebarkan perkebunan kopi ke berbagai daerah lain di nusantara. Tak hanya Jawa, perkebunan kopi dibuka di Aceh, Sumatera Utara, beberapa daerah di Sulawesi, Bali hingga Papua. Pada masa ini digencarkan pembukaan lahan untuk tanaman kopi di hampir seluruh pulau-pulau besar di nusantara. Optimisme yang kuat bahwa kopi mampu tumbuh subur di nusantara ternyata membuahkan hasil yang bisa kita nikmati hingga hari ini.',
                'image' => 'img/kopiroast.jpg'
            ],
            [
                'title' => 'Hadirnya Liberika',
                'content' => 'Ternyata cobaan masih dialami oleh perkembangan kopi di nusantara. Pada 1878 adalah masa buruk bagi tanaman kopi. Tanaman kopi diserang oleh penyakit karat daun atau hemileia vastatrix. Hampir seluruh perkebunan kopi di dataran rendah terkena penyakit ini. Dan rata-rata kopi yang ada pada masa itu adalah arabika. Agar hama ini tidak menghancurkan bisnis kopi, Belanda mendatangkan jenis kopi liberika yang digadang-gadang lebih tangguh dan tahan terhadap hama karat daun.
                
                Liberika sempat menjadi primadona karena mampu menggantikan arabika. Harga kopi ini juga sama bagusnya dengan arabika di pasar Eropa. Namun kejayaan ini tak bertahan lama karena liberika juga terkena hama karat daun dan gagal panen. Pemerintah Belanda pun tampaknya tak menyerah dengan kegagalan panen liberika. Berdasarkan riset yang panjang akhirnya Pemerintah Belanda memutuskan memasukkan satu jenis kopi lain yaitu robusta.',
                'image' => 'img/kopiroasted.jpg'
            ]
        ]
        ?>
        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Kopi</h5>
                    <h1 class="mb-5">Sejarah Singkat Kopi</h1>
                </div>
            </div>
        </div>
        <div class="row">
        <div style="display: flex; flex-direction: column; gap: 30px;">
        <?php foreach ($coffeeHistory as $section): ?>
            <div style="width: 100%; margin-bottom: 20px;">
                <h2 style="font-size: 1.5rem; margin-bottom: 15px;"><?php echo htmlspecialchars($section['title']); ?></h2>
                <p style="text-align: justify; line-height: 1.8; margin-bottom: 15px;"><?php echo nl2br(htmlspecialchars($section['content'])); ?></p>
                <img src="<?php echo htmlspecialchars($section['image']); ?>" 
                     alt="<?php echo htmlspecialchars($section['title']); ?>" 
                     style="display: block; width: 100%; max-width: 600px; margin: 0 auto; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            </div>
        <?php endforeach; ?>
    </div>
        </div>
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Kopi</h5>
                    <h1 class="mb-5">Jenis Kopi</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/arabika.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Arabica</span>
                                                <span class="text-primary"></span>
                                            </h5>
                                            <small class="fst-italic">Kopi Arabica memiliki  tingkat keasaman yang tinggi, 
                                                aroma kompleks, serta rasa halus dan ringan. Kopi ini cocok untuk yang menyukai keasaman dan aroma yang unik serta kelembutan rasa. 
                                                Umumnya memiliki tingkat kafein yang rendah.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/robusta.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Robusta</span>
                                                <span class="text-primary"></span>
                                            </h5>
                                            <small class="fst-italic">Kopi Robusta lebih memiliki keasaman sedang dengan aroma rempah yang kuat dan tingkat kepahitan yang tinggi. 
                                                Kopi ini cocok untuk yang menginginkan rasa kopi yang tebal, kuat, dan kafein yang cukup tinggi.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/kopi_gayo.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Kopi Gayo</span>
                                                <span class="text-primary"></span>
                                            </h5>
                                            <small class="fst-italic">Kopi Gayo terkenal dengan keasaman rendah, memiliki aroma rempah yang unik, serta kepahitan sedang. 
                                                Rasanya cenderung halus, ringan, dan menyegarkan. Cocok bagi yang menyukai cita rasa kompleks dengan tingkat kafein sedang.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/kopi_mandailing.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Kopi Mandailing</span>
                                                <span class="text-primary"></span>
                                            </h5>
                                            <small class="fst-italic">Kopi ini memiliki karakteristik keasaman sedang dengan kepahitan rendah, aroma rempah, 
                                                dan rasa penuh serta tebal. Cocok untuk penikmat kopi yang mencari rasa kopi yang bertekstur tebal tetapi tidak terlalu pahit.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/kopi_toraja.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Kopi Toraja</span>
                                                <span class="text-primary"></span>
                                            </h5>
                                            <small class="fst-italic">Memiliki keasaman tinggi dengan aroma rempah dan buah yang kompleks. Kopi Toraja memiliki kepahitan rendah, 
                                                rasa halus, dan manis, cocok bagi penikmat kopi yang mencari rasa kopi kompleks dan menyegarkan.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/bali_kintamani.png" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Kopi Bali Kintamani</span>
                                                <span class="text-primary"></span>
                                            </h5>
                                            <small class="fst-italic">Kopi ini dikenal dengan aroma rempah dan buah yang khas, serta tingkat kepahitan sedang. 
                                                Kopi Bali Kintamani memiliki karakteristik rasa segar, dengan tingkat kafein sedang, 
                                                cocok bagi mereka yang mencari rasa kopi yang unik dan penuh cita rasa.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/flores_bajawa.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Kopi Flores Bajawa</span>
                                                <span class="text-primary"></span>
                                            </h5>
                                            <small class="fst-italic">Kopi Flores Bajawa memiliki keasaman sedang, aroma rempah yang kuat, dan kepahitan sedang. 
                                                Rasa kopi ini penuh dan halus, serta memiliki tingkat kafein sedang, cocok bagi penikmat yang mencari rasa kopi yang kaya dan lembut.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/kopi_jawa.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Kopi Jawa</span>
                                                <span class="text-primary"></span>
                                            </h5>
                                            <small class="fst-italic">Kopi Jawa memiliki keasaman rendah dan aroma rempah yang khas. Rasa kopi ini tebal, halus, 
                                                dan memiliki kepahitan sedang, dengan kadar kafein yang seimbang. 
                                                Cocok bagi pecinta kopi yang menyukai karakter kopi klasik yang halus tetapi kaya akan rasa.</small>
                                        </div>
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