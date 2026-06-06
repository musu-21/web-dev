Hari 3
- baris pertama : seperti membuka pintu rumah untuk memulai aktivitas

- baris 2 : untuk menaruh barang bernama "x" di ruang tamu.
    > Ruang tamu = global scope
    > barang = variable $x
    > isinya = 5
    jadi di ruang tmau ada barang bernilai 5

- baris 4-7 : membuat sebuah kamar tertutup bernama myTest()
    > function = kamar
    > isi function = aktivitas didalam kamar

    namun didalam kamar ini menyatkan "ambil barang x dari rumah", tapi kamr ini tidak otomatis bisa lihat ruang tamu sehingga hasilnya "warning: undefined variable"

- baris 9 : ini masuk ke kamar dan menjalankan perintah didalamnya 
    > PHP masuk ke function
    > mencoba menjalankan echo tadi
    > tap $x tidak ditemukan di kamar
    hasilnya "warning muncul"

- baris 10 : balik ke ruang tmau dan benar $x = 5 masih ada di ruang tmau jadi output nya 5

--------------------

- Hari 3 06/06/26
- baris 12 = analogi nya sebagai mesin tiket di bank 
- baris 13 = ini seperti mesin tiket yang punya papan angka internal, jadi ketika pertama kali dinyalakan angkanya 0 tapi "static" yang artinya papan angkanya tidak di-reset setiap kali orang baru datang, jadi mesin ini ingat angka terakhir 

- baris 14 = mesin sedang menampilkan nomor antrian saat ini

- baris 15 = setelah nomor ditampilkan, mesin menaikkan angka untuk orang berikutnya

- baris 18 = 
    > $x belum pernah dipakai => mulai dari 0, tampilkan 0, lalu naik jadi 1 maka output nya 0
    > static tidak direset, $x sekarang adalah 1, jadi tampilkan 1, lalu naik jadi 2, maka output nya 1
    > $x sekarang 2, tampilkan 2, naik jadi 3, maka outputnya 2
