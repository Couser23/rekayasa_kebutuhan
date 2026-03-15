<?php
// api.php
header('Content-Type: application/json');

// Menangkap parameter 'action' dari URL
$action = isset($_GET['action']) ? $_GET['action'] : '';

// 1. Inisialisasi Data Master (Simulasi Database)
$data_master = [
    [
        "nama_lengkap" => "Budi Santoso", 
        "tahun_lulus" => "2022", 
        "kota" => "Malang", 
        "status" => "Belum Dilacak"
    ]
];

// 2. Definisi Sumber Pencarian (Sesuai ToS)
$sumber_diizinkan = ["LinkedIn", "Google Scholar", "ResearchGate", "GitHub", "Direktori Perusahaan"];

if ($action === 'init_profil') {
    $profil_tersimpan = [];
    foreach ($data_master as $alumni) {
        $nama = $alumni['nama_lengkap'];
        // Generate variasi nama
        $variasi_nama = [$nama, strtolower($nama), strtoupper($nama)];
        
        $profil = [
            "nama_variasi" => $variasi_nama,
            "kata_kunci" => ["Universitas Muhammadiyah Malang", "UMM", "Informatika", $alumni['tahun_lulus'], $alumni['kota']],
            "status" => "Belum Dilacak"
        ];
        $profil_tersimpan[] = $profil;
    }
    
    echo json_encode(["message" => "Profil berhasil disiapkan ke database", "data" => $profil_tersimpan]);
    exit;
}

if ($action === 'lacak') {
    $hasil_pelacakan = [];
    
    foreach ($data_master as &$alumni) {
        if ($alumni['status'] === "Belum Dilacak") {
            $daftar_kandidat = [];
            
            // 4 & 5. Simulasi Pencarian di berbagai sumber
            foreach ($sumber_diizinkan as $sumber) {
                // Simulasi ekstraksi sinyal identitas dan pemberian skor acak (60-95)
                $daftar_kandidat[] = [
                    "sumber" => $sumber,
                    "nama" => $alumni['nama_lengkap'],
                    "afiliasi" => "Perusahaan Teknologi / Kampus",
                    "skor" => rand(60, 95) 
                ];
            }
            
            // 7. Disambiguasi dan Penilaian: Urutkan berdasarkan skor tertinggi
            usort($daftar_kandidat, function($a, $b) {
                return $b['skor'] <=> $a['skor'];
            });
            $kandidat_terbaik = $daftar_kandidat[0]; // Ambil skor tertinggi
            
            // 8 & 9. Verifikasi Silang & Update Status
            if ($kandidat_terbaik['skor'] >= 80) {
                $alumni['status'] = "Teridentifikasi dari sumber publik";
            } else {
                $alumni['status'] = "Perlu Verifikasi Manual";
            }
            
            $hasil_pelacakan[] = [
                "nama" => $alumni['nama_lengkap'],
                "status_baru" => $alumni['status'],
                "detail_terbaik" => $kandidat_terbaik
            ];
        }
    }
    
    echo json_encode(["message" => "Pelacakan selesai dieksekusi", "hasil" => $hasil_pelacakan]);
    exit;
}

echo json_encode(["error" => "Action tidak dikenali"]);
?>