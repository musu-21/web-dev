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