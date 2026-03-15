# [cite_start]Sistem Pelacakan Alumni Otomatis Berbasis OSINT [cite: 4]

**Informasi Mahasiswa**
* [cite_start]**Nama:** Pradipta Adiya Ananta [cite: 1]
* [cite_start]**NIM:** 202310370311362 [cite: 2]
* [cite_start]**Kelas:** Rekayasa Kebutuhan A [cite: 3]

## Deskripsi Sistem
[cite_start]Proyek ini adalah implementasi *web-based* dari rancangan Sistem Pelacakan Alumni Otomatis[cite: 4]. [cite_start]Sistem dibangun menggunakan kombinasi **HTML/JS (Frontend)** dan **PHP (Backend API)** untuk menyimulasikan proses otomasi pencarian, ekstraksi identitas, dan verifikasi silang alumni dari berbagai sumber publik seperti LinkedIn, Google Scholar, dan GitHub[cite: 6, 17].

## Pengujian Aplikasi (Berdasarkan Aspek Kualitas)

Tabel berikut merupakan hasil pengujian kualitas perangkat lunak berdasarkan *Use Case* dan perancangan sistem pada Daily Project 2:

| ID Uji | Skenario Pengujian (Use Case) | Aspek Kualitas | Hasil yang Diharapkan | Status | Keterangan / Bukti |
| :--- | :--- | :--- | :--- | :--- | :--- |
| TC-01 | (UC1) [cite_start]Siapkan Profil Target Pencarian [cite: 75] | *Functionality* | [cite_start]Sistem berhasil membuat variasi nama dan kata kunci pencarian (Informatika, UMM, dll), lalu menyimpannya dengan status awal "Belum Dilacak". [cite: 11, 12, 13] | [PASS/FAIL] | *[Isi dengan bukti pengujian]* |
| TC-02 | (UC3) [cite_start]Jalankan Job Pelacakan Berkala [cite: 77] | *Functionality* / *Reliability* | [cite_start]Sistem otomatis mengekstrak data dari sumber diizinkan dan melakukan penilaian (scoring) kecocokan kandidat. [cite: 26, 36] | [PASS/FAIL] | *[Isi dengan bukti pengujian]* |
| TC-03 | (UC7) [cite_start]Verifikasi Silang Antar Sumber [cite: 77] | *Accuracy* | Jika skor tinggi, status alumni otomatis berubah menjadi "Teridentifikasi dari sumber publik". [cite_start]Jika sedang, menjadi "Perlu Verifikasi Manual". [cite: 40, 41, 44, 45] | [PASS/FAIL] | *[Isi dengan bukti pengujian]* |
| TC-04 | Kinerja Dasbor Admin | *Performance Efficiency* | Halaman `index.php` dan proses pemanggilan data API PHP (`api.php`) merespons dengan cepat tanpa ada *blocking*. | [PASS/FAIL] | *[Isi dengan bukti pengujian]* |
| TC-05 | Pembaruan Log Proses | *Usability* | Log hasil JSON tampil secara dinamis di layar tanpa mengharuskan pengguna memuat ulang (*refresh*) seluruh halaman. | [PASS/FAIL] | *[Isi dengan bukti pengujian]* |
