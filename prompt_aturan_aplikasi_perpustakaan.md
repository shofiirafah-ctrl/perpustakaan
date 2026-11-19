# Prompt Aturan Pembuatan Aplikasi Perpustakaan

Gunakan dokumen ini sebagai prompt utama saat meminta AI atau developer
membuat aplikasi perpustakaan. Ikuti seluruh aturan dan spesifikasi
berikut secara konsisten.

## 1. Tujuan Aplikasi

Buat aplikasi perpustakaan yang membantu pengelolaan data buku, anggota,
peminjaman, pengembalian, dan laporan secara terstruktur. Aplikasi harus
mudah digunakan oleh petugas perpustakaan maupun anggota, memiliki
tampilan modern, rapi, responsif, dan mudah dipahami oleh pengguna
pemula.

## 2. Tema dan Identitas Visual

Terapkan tema warna **Primary Blue** dan **Secondary Pink**.

-   **Primary color:** Biru (`#2563EB`) untuk warna utama, tombol utama,
    tautan aktif, ikon penting, dan elemen navigasi terpilih.
-   **Secondary color:** Pink (`#EC4899`) untuk aksen, label, ilustrasi
    kecil, penanda informasi, dan elemen pendukung.
-   **Background:** Putih atau abu-abu sangat muda (`#F8FAFC`) agar
    tampilan bersih dan nyaman dibaca.
-   **Text utama:** Abu-abu gelap (`#1E293B`).
-   **Text sekunder:** Abu-abu (`#64748B`).
-   **Success:** Hijau untuk status berhasil.
-   **Warning:** Kuning atau oranye untuk peringatan.
-   **Danger:** Merah untuk kesalahan, penghapusan, atau keterlambatan.

Aturan penggunaan warna: 1. Biru harus menjadi warna yang paling
dominan. 2. Pink hanya digunakan sebagai warna aksen dan tidak boleh
mengalahkan dominasi biru. 3. Pastikan teks memiliki kontras yang cukup
dengan latar belakang. 4. Gunakan warna status secara konsisten di
seluruh halaman. 5. Hindari penggunaan terlalu banyak warna, gradasi
berlebihan, dan efek visual yang mengganggu.

## 3. Gaya Desain Antarmuka

-   Gunakan desain modern, minimalis, bersih, dan profesional.
-   Gunakan layout yang konsisten pada seluruh halaman.
-   Gunakan sidebar untuk navigasi utama pada tampilan desktop.
-   Pada perangkat mobile, ubah navigasi menjadi menu yang mudah
    diakses.
-   Gunakan card untuk mengelompokkan informasi.
-   Gunakan sudut komponen yang sedikit membulat dan bayangan yang
    halus.
-   Berikan jarak antar elemen yang cukup agar halaman tidak terlihat
    padat.
-   Gunakan ikon yang mudah dikenali dan konsisten.
-   Gunakan tipografi yang jelas serta ukuran teks yang mudah dibaca.
-   Hindari tampilan yang terlalu ramai, dekorasi berlebihan, dan
    animasi yang tidak diperlukan.
-   Tampilkan indikator hover, focus, loading, dan disabled pada elemen
    interaktif.

## 4. Struktur dan Fitur Aplikasi

Aplikasi sekurang-kurangnya memiliki halaman dan fitur berikut.

### A. Login

-   Sediakan halaman login untuk pengguna yang memiliki akun.
-   Sediakan input nama pengguna atau email dan kata sandi.
-   Sediakan tombol tampil/sembunyikan kata sandi.
-   Tampilkan pesan yang jelas jika data login salah.
-   Batasi halaman internal agar hanya dapat diakses setelah login.
-   Jangan menampilkan kata sandi dalam bentuk teks biasa.

### B. Dashboard

Tampilkan ringkasan informasi perpustakaan dalam bentuk kartu statistik,
seperti: - Total buku. - Total anggota. - Buku yang sedang dipinjam. -
Jumlah transaksi peminjaman. - Jumlah pengembalian yang terlambat.

Tambahkan bagian informasi terbaru, misalnya transaksi terakhir dan buku
yang baru ditambahkan. Gunakan grafik hanya jika memang membantu
memahami data.

### C. Data Buku

Sediakan fitur untuk: - Menampilkan daftar buku. - Menambahkan buku
baru. - Mengubah informasi buku. - Menghapus buku dengan konfirmasi. -
Melihat detail buku. - Mencari buku berdasarkan judul, penulis, ISBN,
atau kategori. - Memfilter buku berdasarkan kategori atau ketersediaan.

Informasi buku minimal meliputi: - Kode buku atau ID buku. - ISBN (jika
tersedia). - Judul buku. - Penulis. - Penerbit. - Tahun terbit. -
Kategori. - Jumlah stok. - Lokasi rak. - Deskripsi atau sinopsis
(opsional). - Sampul buku (opsional).

Validasi agar stok tidak bernilai negatif dan data wajib tidak boleh
kosong.

### D. Data Anggota

Sediakan fitur untuk: - Menampilkan daftar anggota. - Menambahkan
anggota. - Mengubah data anggota. - Melihat detail anggota. - Menghapus
atau menonaktifkan anggota dengan aturan yang aman. - Mencari anggota
berdasarkan nama atau nomor anggota.

Informasi anggota minimal meliputi: - Nomor anggota. - Nama lengkap. -
Email. - Nomor telepon. - Alamat. - Tanggal bergabung. - Status
keanggotaan.

Pastikan nomor anggota bersifat unik.

### E. Peminjaman Buku

Sediakan fitur untuk: - Membuat transaksi peminjaman. - Memilih anggota
yang meminjam. - Memilih satu atau beberapa buku. - Menentukan tanggal
peminjaman. - Menentukan tanggal jatuh tempo. - Menampilkan daftar
transaksi peminjaman. - Melihat detail transaksi dan statusnya.

Aturan peminjaman: 1. Peminjaman hanya dapat dilakukan oleh anggota yang
aktif. 2. Buku hanya dapat dipinjam jika stok tersedia. 3. Stok buku
berkurang ketika transaksi peminjaman berhasil disimpan. 4. Setiap
transaksi memiliki kode atau ID unik. 5. Sistem harus mencegah jumlah
peminjaman melebihi stok yang tersedia.

### F. Pengembalian Buku

Sediakan fitur untuk: - Memilih transaksi yang akan dikembalikan. -
Memproses pengembalian buku. - Mencatat tanggal pengembalian. - Mengubah
status transaksi menjadi selesai. - Menghitung keterlambatan berdasarkan
tanggal jatuh tempo. - Menampilkan riwayat pengembalian.

Aturan pengembalian: 1. Stok buku bertambah kembali setelah pengembalian
berhasil diproses. 2. Buku yang sama tidak boleh dikembalikan lebih dari
satu kali untuk transaksi yang sama. 3. Jika tanggal pengembalian
melewati tanggal jatuh tempo, tampilkan status terlambat. 4. Jika sistem
menerapkan denda, tampilkan perhitungan denda secara transparan dan
gunakan aturan nominal yang dapat diatur.

### G. Laporan

Sediakan laporan yang dapat difilter berdasarkan periode, antara lain: -
Laporan data buku. - Laporan anggota. - Laporan peminjaman. - Laporan
pengembalian. - Laporan keterlambatan.

Sediakan tampilan tabel yang mudah dibaca dan fitur ekspor atau cetak
jika didukung oleh teknologi yang digunakan.

### H. Pengaturan dan Profil

-   Tampilkan informasi akun pengguna yang sedang login.
-   Sediakan fitur mengubah profil jika diperlukan.
-   Sediakan tombol logout.
-   Jika terdapat pengaturan aplikasi, buat tampilannya sederhana dan
    mudah dipahami.

## 5. Hak Akses Pengguna

Gunakan pembagian hak akses yang jelas.

**Admin/Petugas:** - Mengelola data buku. - Mengelola data anggota. -
Memproses peminjaman dan pengembalian. - Melihat laporan. - Mengelola
akun sesuai kewenangannya.

**Anggota (jika fitur anggota disediakan):** - Melihat katalog buku. -
Melihat ketersediaan buku. - Melihat riwayat peminjaman miliknya. -
Melihat status dan tanggal jatuh tempo peminjaman.

Jangan izinkan anggota mengakses atau mengubah data pribadi dan
transaksi milik anggota lain.

## 6. Navigasi Aplikasi

Gunakan navigasi yang mudah dipahami. Urutan menu yang disarankan:

1.  Dashboard
2.  Data Buku
3.  Data Anggota
4.  Peminjaman
5.  Pengembalian
6.  Laporan
7.  Pengaturan
8.  Logout

Berikan penanda visual pada menu yang sedang aktif. Nama menu harus
jelas dan tidak membingungkan.

## 7. Aturan Interaksi dan Pengalaman Pengguna

-   Semua tombol harus memiliki fungsi yang benar-benar berjalan.
-   Formulir harus memiliki label yang jelas dan validasi.
-   Tampilkan notifikasi ketika data berhasil ditambahkan, diubah, atau
    dihapus.
-   Tampilkan pesan kesalahan yang mudah dimengerti.
-   Gunakan dialog konfirmasi sebelum tindakan penting seperti menghapus
    data.
-   Sediakan kolom pencarian, filter, dan pengurutan pada tabel yang
    relevan.
-   Sediakan tampilan ketika data masih kosong.
-   Berikan indikator proses ketika aplikasi sedang memuat atau
    menyimpan data.
-   Jangan menggunakan tombol atau menu yang hanya menjadi pajangan.
-   Pastikan pengguna dapat kembali ke halaman sebelumnya atau dashboard
    dengan mudah.

## 8. Aturan Data dan Keamanan

-   Gunakan struktur data yang konsisten dan relasi yang tepat
    antartabel.
-   Gunakan ID unik sebagai identitas setiap data.
-   Validasi data di sisi antarmuka dan sisi server jika aplikasi
    menggunakan backend.
-   Lindungi halaman berdasarkan status login dan hak akses.
-   Simpan kata sandi menggunakan metode hashing yang aman jika
    autentikasi dikelola sendiri.
-   Gunakan parameterized query atau ORM untuk mencegah SQL injection.
-   Jangan menyimpan informasi rahasia langsung di dalam kode sumber.
-   Tangani kesalahan tanpa menampilkan informasi teknis sensitif kepada
    pengguna.
-   Pastikan perubahan stok dan transaksi peminjaman/pengembalian
    dilakukan secara konsisten agar stok tidak salah hitung.
-   Siapkan data contoh untuk pengujian, tetapi pisahkan dari data
    penggunaan sebenarnya.

## 9. Responsivitas dan Aksesibilitas

-   Aplikasi harus dapat digunakan pada desktop, tablet, dan smartphone.
-   Tabel harus tetap mudah dibaca pada layar kecil, misalnya dengan
    scroll horizontal atau tampilan alternatif.
-   Tombol dan input harus memiliki ukuran area klik yang nyaman.
-   Jangan hanya mengandalkan warna untuk menyampaikan status; sertakan
    teks atau ikon.
-   Pastikan navigasi dapat digunakan dengan keyboard.
-   Gunakan teks alternatif untuk gambar yang bermakna.

## 10. Aturan Teknis Pengerjaan

Sebelum mulai membuat aplikasi: 1. Periksa dan jelaskan teknologi yang
akan digunakan untuk frontend, backend, dan database. 2. Susun struktur
folder dan file terlebih dahulu. 3. Jelaskan fungsi setiap bagian secara
singkat. 4. Buat rancangan database beserta tabel, kolom, primary key,
foreign key, dan relasinya jika aplikasi menggunakan database
relasional. 5. Buat aplikasi secara bertahap dan pastikan setiap tahap
dapat dijalankan sebelum melanjutkan. 6. Jangan mengganti teknologi atau
struktur proyek tanpa alasan dan persetujuan. 7. Jangan menghapus kode
atau fitur yang sudah berjalan tanpa memeriksa dampaknya. 8. Gunakan
penamaan variabel, fungsi, tabel, dan file yang konsisten. 9. Hindari
kode duplikat dan kode yang tidak diperlukan. 10. Sertakan cara
menjalankan dan menguji aplikasi.

Jika teknologi belum ditentukan, tanyakan terlebih dahulu atau berikan
rekomendasi yang sesuai dengan kebutuhan dan tingkat kemampuan pengguna.
Jangan menganggap aplikasi harus menggunakan framework, bahasa
pemrograman, atau database tertentu tanpa konfirmasi.

## 11. Tahapan Pengerjaan

Kerjakan aplikasi secara bertahap dengan urutan berikut:

1.  Analisis kebutuhan dan penentuan fitur.
2.  Rancangan alur aplikasi dan navigasi.
3.  Rancangan database.
4.  Pembuatan struktur proyek.
5.  Pembuatan halaman login dan layout utama.
6.  Pembuatan dashboard.
7.  Pembuatan fitur data buku.
8.  Pembuatan fitur data anggota.
9.  Pembuatan fitur peminjaman.
10. Pembuatan fitur pengembalian.
11. Pembuatan laporan.
12. Penerapan validasi dan keamanan.
13. Pengujian seluruh fitur.
14. Perbaikan tampilan dan responsivitas.
15. Dokumentasi dan panduan penggunaan.

Jangan langsung membuat seluruh aplikasi dalam satu langkah. Selesaikan
dan uji satu tahap terlebih dahulu, kemudian lanjutkan setelah tahap
tersebut disetujui.

## 12. Standar Hasil Akhir

Aplikasi dianggap memenuhi kebutuhan apabila: - Seluruh halaman utama
tersedia dan saling terhubung. - Fitur tambah, tampil, ubah, dan hapus
data berjalan sesuai hak akses. - Proses peminjaman dan pengembalian
memperbarui stok dengan benar. - Pencarian dan filter berfungsi. -
Validasi dan pesan kesalahan ditampilkan dengan jelas. - Tampilan
konsisten menggunakan biru sebagai warna utama dan pink sebagai aksen. -
Layout responsif pada desktop dan perangkat mobile. - Tidak ada tombol
utama yang tidak berfungsi. - Aplikasi dapat dijalankan mengikuti
panduan yang disediakan.

## 13. Instruksi untuk AI atau Developer

Patuhi seluruh ketentuan dalam dokumen ini selama proses pembuatan
aplikasi. Utamakan fungsi yang benar, keamanan data, kemudahan
penggunaan, dan konsistensi desain.

Jika ada informasi penting yang belum ditentukan, tanyakan sebelum
mengambil keputusan yang dapat memengaruhi struktur atau fungsi
aplikasi. Jangan menambahkan fitur besar di luar kebutuhan tanpa
menjelaskan manfaatnya dan meminta persetujuan.

**Identitas desain yang wajib dipertahankan:** - Primary: Blue
`#2563EB` - Secondary: Pink `#EC4899` - Background: `#F8FAFC` - Gaya:
modern, minimalis, bersih, responsif, dan mudah digunakan.
