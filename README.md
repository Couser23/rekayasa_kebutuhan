# [cite_start]Sistem Pelacakan Alumni Otomatis Berbasis OSINT [cite: 4]

**Informasi Mahasiswa**
* [cite_start]**Nama:** Pradipta Adiya Ananta [cite: 1]
* [cite_start]**NIM:** 202310370311362 [cite: 2]
* [cite_start]**Kelas:** Rekayasa Kebutuhan A [cite: 3]

## Tautan Proyek
* **Source Code (GitHub):** `https://github.com/Couser23/rekayasa_kebutuhan.git`
* **Web Publish (Live):** `https://pradipta-rekayasa23.infinityfree.me/`

## Deskripsi Sistem
Proyek ini adalah implementasi *web-based* dari rancangan Sistem Pelacakan Alumni Otomatis. Sistem dibangun menggunakan kombinasi **HTML/JS (Frontend)** dan **PHP (Backend API)** untuk menyimulasikan proses otomasi pencarian, ekstraksi identitas, dan verifikasi silang alumni dari berbagai sumber publik seperti LinkedIn, Google Scholar, dan GitHub.

## Pengujian Aplikasi (Berdasarkan Aspek Kualitas)

Tabel berikut merupakan hasil pengujian kualitas perangkat lunak berdasarkan *Use Case* dan perancangan sistem pada Daily Project 2:

| ID Uji | Skenario Pengujian (Use Case) | Aspek Kualitas | Hasil yang Diharapkan | Status | Keterangan / Bukti |
| :--- | :--- | :--- | :--- | :--- | :--- |
| TC-01 | (UC1) Siapkan Profil Target Pencarian | *Functionality* | Sistem berhasil membuat variasi nama dan kata kunci pencarian (Informatika, UMM, dll), lalu menyimpannya dengan status awal "Belum Dilacak". | **PASS** | Saat tombol diklik, sistem merespons dengan JSON berisi pesan `"Profil berhasil disiapkan ke database"` dan menampilkan *array* variasi nama alumni. |
| TC-02 | (UC3) Jalankan Job Pelacakan Berkala | *Functionality* / *Reliability* | Sistem otomatis mengekstrak data dari sumber diizinkan dan melakukan penilaian (scoring) kecocokan kandidat. | **PASS** | Sistem berhasil menampilkan *log* proses pelacakan di layar. Data kandidat muncul beserta angka *skor* acak simulasi (antara 60-95). |
| TC-03 | (UC7) Verifikasi Silang Antar Sumber | *Accuracy* | Jika skor tinggi, status alumni otomatis berubah menjadi "Teridentifikasi dari sumber publik". Jika sedang, menjadi "Perlu Verifikasi Manual". | **PASS** | Pada JSON *response*, terlihat perubahan status secara otomatis. Kandidat dengan skor >= 80 berstatus `"Teridentifikasi dari sumber publik"`, sedangkan skor di bawah 80 berstatus `"Perlu Verifikasi Manual"`. |
| TC-04 | Kinerja Dasbor Admin | *Performance Efficiency* | Halaman `index.php` dan proses pemanggilan data API PHP (`api.php`) merespons dengan cepat tanpa ada *blocking*. | **PASS** | Halaman Dasbor Admin termuat langsung (kurang dari 1 detik) di *browser* *localhost*, dan API mengeksekusi data tanpa waktu tunggu (*delay*) yang berarti. |
| TC-05 | Pembaruan Log Proses | *Usability* | Log hasil JSON tampil secara dinamis di layar tanpa mengharuskan pengguna memuat ulang (*refresh*) seluruh halaman. | **PASS** | Teks pada kotak log berwarna hitam berubah otomatis memunculkan data terbaru setiap kali tombol di panel admin ditekan, tanpa perlu *refresh* halaman *browser*. |
