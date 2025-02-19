<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Event Donasi Baru</title>
    <link rel="stylesheet" href="css/admincrevent.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="main-container">
        <!-- Sidebar (same as previous) -->
        <div class="sidebar">
            <div class="logo">
                <span class="logo-blue">Donasi</span><span class="logo-orange">Aja!</span>
            </div>
            
            <div class="menu-item">Admin Dashboard</div>
            
            <div class="dropdown">
                <button class="dropdown-toggle active" data-bs-toggle="collapse" data-bs-target="#eventMenu" aria-expanded="false">
                    <i class="far fa-calendar"></i>
                    Event
                </button>
                <div id="eventMenu" class="collapse show">
                    <a href="#daftar-event">Daftar Event</a>
                    <a href="#tambahkan-event" class="active">Tambahkan Event</a>
                </div>
            </div>
            
            <div class="menu-item with-icon">
                <i class="far fa-comment"></i>
                Testimoni
            </div>
            
            <div class="menu-item with-icon">
                <i class="fas fa-cog"></i>
                Settings
            </div>
            
            <div class="logout">
                <i class="fas fa-sign-out-alt"></i>
                Logout
            </div>
        </div>

        <!-- Main Content -->
        <div class="content">
            <div class="header">
                <div class="title-group">
                    <h1>Tambah Event Donasi Baru</h1>
                    <i class="fas fa-external-link-alt"></i>
                </div>
            </div>

            <div class="form-container">
                <form id="newEventForm" class="event-form">
                    <div class="form-group">
                        <label for="nama_program">Nama Program*</label>
                        <input type="text" id="nama_program" name="nama_program" required maxlength="100">
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Program</label>
                        <textarea id="deskripsi" name="deskripsi" rows="4"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="target_donasi">Target Donasi (Rp)*</label>
                        <input type="number" id="target_donasi" name="target_donasi" required min="0" step="1000">
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="tanggal_mulai">Tanggal Mulai*</label>
                            <input type="date" id="tanggal_mulai" name="tanggal_mulai" required>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_selesai">Tanggal Selesai*</label>
                            <input type="date" id="tanggal_selesai" name="tanggal_selesai" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="gambar">Gambar Program</label>
                        <div class="file-input-container">
                            <input type="file" id="gambar" name="gambar" accept="image/*">
                            <label for="gambar" class="file-input-label">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <span>Pilih File</span>
                            </label>
                            <span class="file-name">Tidak ada file yang dipilih</span>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn-secondary">Batal</button>
                        <button type="submit" class="btn-primary">Simpan Event</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>