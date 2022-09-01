<?php

//panggil kokneksi database
include "koneksi.php";

//uji jika tombol simpan di klik

if(isset($_POST ['bsimpan'])) {

    //persiapan simpan data baru
    $simpan = mysqli_query($koneksi, "INSERT INTO tdosen (kode_matkul, tanggal, matkul, jam)
    VALUES ('$_POST[tkode_matkul]',
           '$_POST[ttanggal]',
           '$_POST[tmatkul]',
           '$_POST[tjam]')");
    //jika simpan sukses
    if($simpan){
        echo "<script>
            alert('Simpan data Sukses!');
            document.location='jadwalujian.php';
        </script>";
    }else{
        echo "<script>
            alert()'Simpan data Gagal!';
            document.location='jadwalujian.php';
        </script>"; 
    }
}




//uji jika tombol ubah di klik

if(isset($_POST ['bubah'])) {

    //persiapan ubah data
    $ubah = mysqli_query($koneksi, "UPDATE tdosen SET
                                                    kode_matkul = '$_POST[tkode_matkul]',
                                                    tanggal = '$_POST[ttanggal]',
                                                    matkul = '$_POST[tmatkul]',
                                                    jam = '$_POST[tjam]'
                                                    WHERE id = '$_POST[id]' 
                                                        ");
    //jika ubah  sukses
    if($ubah){
        echo "<script>
            alert('Ubah data Sukses!');
            document.location='jadwalujian.php';
        </script>";
    }else{
        echo "<script>
            alert('Ubah data Gagal!');
            document.location='jadwalujian.php';
        </script>"; 
    }
}



//uji jika tombol hapus di klik

if(isset($_POST ['bhapus'])) {

    //persiapan hapus data
    $hapus = mysqli_query($koneksi, "DELETE FROM tdosen WHERE id = '$_POST[id]' ");
    //jika hapus  sukses
    if($hapus){
        echo "<script>
            alert('Hapus data Sukses!');
            document.location='jadwalujian.php';
        </script>";
    }else{
        echo "<script>
            alert('Hapus data Gagal!');
            document.location='jadwalujian.php';
        </script>"; 
    }
}