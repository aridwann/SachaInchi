## Bagaimana cara berkolaborasi?

1. Buka direktori yang akan dijadikan tempat menyimpan project, lalu klik kanan dan buka terminal
2. Kloning repositori ini dengan perintah  
   `git clone https://github.com/aridwann/SachaInchi.git`
3. Buka folder **sachainchi** di VS Code
4. Buat file **.env**, caranya:  
   a. Buat file baru, beri nama **.env**  
   b. Copy yang ada di dalam file **.env.example** ke file **.env** yang baru dibuat  
   c. Isi **APP_KEY** dengan key dari grup
5. Buka terminal VS Code, Install paket node yang diperlukan  
   `npm install`
6. Install paket composer yang diperlukan  
   `composer install`
7. Jalankan migrasi database (membuat file db sqlite)  
   `php artisan migrate --seed` (Jika ada warning, klik enter)
8. Jalankan  
   `npm run dev`  
   \*Jangan tutup terminal ini
9. Buka terminal baru, lalu jalankan  
   `php artisan serve`  
   buka link yang muncul
10. Selesai ~~
