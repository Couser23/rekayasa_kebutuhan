<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pelacakan Alumni OSINT</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 40px; background-color: #f9f9f9; color: #333;}
        .container { max-width: 800px; margin: auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        button { padding: 10px 20px; margin: 5px 0; cursor: pointer; background-color: #0056b3; color: white; border: none; border-radius: 4px; font-weight: bold;}
        button:hover { background-color: #004494; }
        #log { margin-top: 20px; padding: 15px; background: #1e1e1e; color: #00ff00; border-radius: 4px; min-height: 200px; overflow-x: auto; font-family: monospace;}
    </style>
</head>
<body>
    <div class="container">
        <h2>Dasbor Admin: Pelacakan Alumni (OSINT)</h2>
        <p><strong>Aktor:</strong> Admin / Operator | <strong>Target:</strong> Alumni Informatika UMM</p>
        
        <hr>
        
        <button onclick="initProfil()">1. Siapkan Profil Target (UC1)</button>
        <button onclick="lacakBerkala()">2. Jalankan Pelacakan Berkala (UC3)</button>

        <h3>Log Sistem / JSON Response:</h3>
        <pre id="log">Menunggu instruksi...</pre>
    </div>

    <script>
        async function initProfil() {
            document.getElementById('log').innerText = "Memproses inisialisasi profil...";
            try {
                const response = await fetch('api.php?action=init_profil');
                const data = await response.json();
                document.getElementById('log').innerText = JSON.stringify(data, null, 2);
            } catch (error) {
                document.getElementById('log').innerText = "Terjadi kesalahan: " + error;
            }
        }

        async function lacakBerkala() {
            document.getElementById('log').innerText = "Menjalankan pelacakan sumber publik...";
            try {
                const response = await fetch('api.php?action=lacak');
                const data = await response.json();
                document.getElementById('log').innerText = JSON.stringify(data, null, 2);
            } catch (error) {
                document.getElementById('log').innerText = "Terjadi kesalahan: " + error;
            }
        }
    </script>
</body>
</html>