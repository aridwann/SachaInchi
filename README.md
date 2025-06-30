## Prasyarat:

1. Punya xampp
2. Sudah install composer

## Bagaimana cara berkolaborasi?

1. Buka **C:\xampp\htdocs**, lalu klik kanan dan buka terminal
2. Kloning repositori ini dengan perintah  
   `git clone https://github.com/aridwann/SachaInchi.git`
3. Buka folder **sachainchi** di VS Code
4. Buat file **.env**, caranya:  
   a. Duplikasi file **.env.example**  
   b. Rename jadi **.env**  
   c. Isi **APP_KEY** dengan key dari grup
5. Install paket node yang diperlukan  
   `npm run install`
6. Install paket composer yang diperlukan  
   `composer install`
7. Jalankan migrasi database (membuat file db sqlite)  
   `php artisan migrate --seed`
8. Buka terminal, lalu jalankan  
   `npm run dev`  
   \*Jangan tutup terminal ini
9. Buka terminal baru, lalu jalankan  
   `php artisan serve`  
   lalu buka link yang muncul
10. Selesai ~~