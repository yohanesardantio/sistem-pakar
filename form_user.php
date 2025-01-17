<?php include 'header.php'; ?>

<div class="container-xxl py-5 hero-header mb-5">
            <div class="container text-center my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Form Input</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Form Input</li>
                    </ol>
                </nav>
            </div>
        </div>
<!-- Form Input Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Form Input</h5>
            <h1 class="mb-5">Masukkan Preferensi Anda</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form action="hitung.php" method="POST" class="p-4 rounded shadow-sm" style="background-color: #f9f9f9;">
                    <div class="mb-3">
                        <label for="keasaman" class="form-label">Tingkat Keasaman</label>
                        <select name="keasaman" id="keasaman" class="form-select">
                            <option value="rendah">Rendah</option>
                            <option value="sedang">Sedang</option>
                            <option value="tinggi">Tinggi</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kepahitan" class="form-label">Tingkat Kepahitan</label>
                        <select name="kepahitan" id="kepahitan" class="form-select">
                            <option value="rendah">Rendah</option>
                            <option value="sedang">Sedang</option>
                            <option value="tinggi">Tinggi</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="aroma" class="form-label">Kekuatan Aroma</label>
                        <select name="aroma" id="aroma" class="form-select">
                            <option value="kompleks">Kompleks</option>
                            <option value="unik">Unik</option>
                            <option value="rempah">Rempah</option>
                            <option value="buah">Buah</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="karakteristik" class="form-label">Karakteristik Rasa</label>
                        <select name="karakteristik" id="karakteristik" class="form-select">
                            <option value="Halus_Ringan">Halus, Ringan</option>
                            <option value="Halus_Manis">Halus, Manis</option>
                            <option value="kuat">Kuat</option>
                            <option value="tebal">Tebal</option>
                            <option value="halus">Halus</option>
                            <option value="segar_buah">Segar, Rasa Buah</option>
                            
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kafein" class="form-label">Pilih Tingkat Kafein </label>
                        <select name="kafein" id="kafein" class="form-select">
                            <option value="halus">Halus</option>
                            <option value="strong">Strong</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Proses Rekomendasi</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Form Input End -->

<?php include 'footer.php'; ?>
