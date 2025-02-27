<?php include 'header.php'; ?>
<body>
        <!-- Navbar & Hero End -->
        <div class="container-xxl py-5 hero-header mb-5">
            <div class="container my-5 py-5">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h1 class="display-3 text-white animated slideInLeft">Selamat Datang</h1>
                        <p class="text-white animated slideInLeft mb-4 pb-2">Aplikasi ini merupakan sistem pakar untuk memberikan rekomendasi kopi berbasis web dengan tujuan 
                            untuk membantu pengguna memilih jenis kopi yang sesuai dengan karakteristik yang disukai</p>
                        <!-- <a href="form_user.php" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Cek Rekomendasi</a> -->
                    </div>
                    <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                        <img class="img-fluid" src="img/latte.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
        
        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                                <h5>Barista</h5>
                                <p>Dengan keahlian profesional, barista kami siap menyajikan berbagai jenis kopi berkualitas tinggi dengan rasa yang tak tertandingi. 
                                    Setiap cangkir kopi disajikan dengan penuh ketelitian dan seni.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                <h5>Quality Food & Drinks</h5>
                                <p>Selain kopi yang luar biasa, kami juga menawarkan berbagai pilihan makanan dan minuman lezat, mulai dari makanan ringan hingga hidangan utama yang memanjakan lidah Anda.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-wifi text-primary mb-4"></i>
                                <h5>WiFi Cepat</h5>
                                <p>Di setiap sudut tempat kami, Anda dapat menikmati WiFi super cepat tanpa gangguan, ideal untuk bekerja, berselancar, atau menikmati waktu luang Anda.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-clock text-primary mb-4"></i>
                                <h5>4PM - 12AM</h5>
                                <p>Kami buka setiap hari dari pukul 4 sore hingga tengah malam. Nikmati kopi dan suasana yang nyaman hingga larut malam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/kopi1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/kopi2.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/kopi3.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/kopi4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                        <h1 class="mb-4">Selamat Datang Di <i class="fa fa-coffee text-primary me-2"></i>Sederek Kopi</h1>
                        <p class="mb-4" style="text-align:justify">Aplikasi ini dirancang untuk membantu pengguna menemukan jenis kopi yang paling sesuai dengan selera mereka.
                            dengan mempertimbangkan berbagai karakteristik kopi, seperti tingkat keasaman, aroma, kekuatan rasa dan tingkat kafein, 
                            sistem ini memberikan rekomendasi kopi yang ideal berdasarkan preferensi pengguna.</p>
                        <p class="mb-4" style="text-align:justify">Proses pemilihan kopi dilakukan dengan metode Naive Bayes Classifier yang menghitung probabilitas sesuai input pengguna. 
                            Pengguna hanya perlu menjawab beberapa pertanyaan mengenai preferensi rasa dan karakteristik yang disukai, kemudian sistem akan memproses 
                            untuk memberikan rekomendasi kopi yang cocok.</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">7</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Years of</p>
                                        <h6 class="text-uppercase mb-0">Experience</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Menu Start -->
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
                                            <small class="fst-italic">Kopi Arabica memiliki tingkat keasaman yang tinggi, 
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

        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
                    <h1 class="mb-5">Our Team</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/Yumarlin-MZ.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Yumarlin MZ</h5>
                            <small>Dosen Pengampu Mata Kuliah Sistem Pakar</small>
                            <p><small>Teknik Informatika Universitas Janabadra</small></p>
                            <div class="d-flex justify-content-center mt-3">
                              <!--  <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/yohanes2.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Yohanes Ardantio Dimas Pamungkas</h5>
                            <small>Mahasiswa Teknik Informatika Universitas Janabadra</small>
                            <p><small>NIM 21330023</small></p>
                            <div class="d-flex justify-content-center mt-3">
                               <!-- <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
  
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
</body>

</html>