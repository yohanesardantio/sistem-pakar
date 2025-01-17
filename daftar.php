<?php
session_start();

// Cek apakah pengguna sudah mendaftar
if (isset($_SESSION['user_registered'])) {
    header('Location: form_input.php'); // Redirect ke form input
    exit();
}
?>

<?php include 'header.php'; ?>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="mb-4">Form Daftar</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form action="proses_daftar.php" method="POST" class="p-4 rounded shadow-sm" style="background-color: #f9f9f9;">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
