## Bagaimana cara berkolaborasi?

1. Buka direktori yang akan dijadikan tempat menyimpan project, lalu klik kanan dan buka terminal
2. Kloning repositori ini dengan perintah  
   `git clone https://github.com/aridwann/SachaInchi.git`
3. Buka folder **sachainchi** di VS Code
4. Buat file **.env**, caranya:  
   a. `cp .env.example .env`  
   b. `php artisan key:generate`
6. Buka terminal VS Code, Install paket node yang diperlukan  
   `npm install`
7. Install paket composer yang diperlukan  
   `composer install`
8. Jalankan migrasi database (membuat file db sqlite)  
   `php artisan migrate --seed` (Jika ada warning, klik enter)
9. Jalankan  
   `npm run dev`  
   \*Jangan tutup terminal ini
10. Buka terminal baru, lalu jalankan  
   `php artisan serve`  
   buka link yang muncul
11. Selesai ~~
