<?php

//panggil kokneksi database
include "koneksi.php";

//uji jika tombol simpan di klik

if(isset($_POST ['bsimpan'])) {

    //persiapan simpan data baru
    $simpan = mysqli_query($koneksi, "INSERT INTO nilai (nama, nim, kelas, nilai_pbo, nilai_k3, nilai_web, nilai_matematika)
    VALUES ('$_POST[tnama]',
           '$_POST[tnim]',
           '$_POST[tkelas]',
           '$_POST[tnilai_pbo]',
           '$_POST[tnilai_k3]',
           '$_POST[tnilai_web]',
           '$_POST[tnilai_matematika]')");
    //jika simpan sukses
    if($simpan){
        echo "<script>
            alert('Simpan data Sukses!');
            document.location='unggah_nilai.php';
        </script>";
    }else{
        echo "<script>
            alert()'Simpan data Gagal!';
            document.location='unggah_nilai.php';
        </script>"; 
    }
}




//uji jika tombol ubah di klik

if(isset($_POST ['bubah'])) {

    //persiapan ubah data
    $ubah = mysqli_query($koneksi, "UPDATE nilai SET
                                                    nama = '$_POST[tnama]', 
                                                    nim = '$_POST[tnim]',
                                                    kelas = '$_POST[tkelas]',
                                                    nilai_pbo = '$_POST[tnilai_pbo]',
                                                    nilai_k3 = '$_POST[tnilai_k3]',
                                                    nilai_web = '$_POST[tnilai_web]',
                                                    nilai_matematika = '$_POST[tnilai_matematika]'
                                                    WHERE id = '$_POST[id]' 
                                                        ");
    //jika ubah  sukses
    if($ubah){
        echo "<script>
            alert('Ubah data Sukses!');
            document.location='unggah_nilai.php';
        </script>";
    }else{
        echo "<script>
            alert('Ubah data Gagal!');
            document.location='unggah_nilai.php';
        </script>"; 
    }
}



//uji jika tombol hapus di klik

if(isset($_POST ['bhapus'])) {

    //persiapan hapus data
    $hapus = mysqli_query($koneksi, "DELETE FROM nilai WHERE id = '$_POST[id]' ");
    //jika hapus  sukses
    if($hapus){
        echo "<script>
            alert('Hapus data Sukses!');
            document.location='unggah_nilai.php';
        </script>";
    }else{
        echo "<script>
            alert('Hapus data Gagal!');
            document.location='unggah_nilai.php';
        </script>"; 
    }
}