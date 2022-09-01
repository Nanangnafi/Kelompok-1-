<?php
//panggil koneksi database
include "koneksi.php";

//uji coba tombol simpan
if (isset($_POST['bsimpan'])) {
    //persiapan simpan data baru
    $simpan = mysqli_query($koneksi, "INSERT INTO lembar_kerja (Tanggal,File)
                                    VALUES('$_POST[ttanggal]',
                                            '$_POST[tfile]')");
    if ($simpan) {
        echo "<script>
                alert('Simpan data succes!');
                document.location='lembar_kerja.php';
                </script>";
    } else {
        echo "<script>
                alert('Simpan data Gagal!');
                document.location='lembar_kerja.php';
                </script>";
    }
}

//uji coba tombol ubah
if (isset($_POST['bubah'])) {
    //persiapan ubah data baru 
    $ubah = mysqli_query($koneksi, "UPDATE lembar_kerja SET Tanggal = '$_POST[ttanggal]',
                                                            File    =  '$_POST[tfile]'
                                                        WHERE id = '$_POST[id]'
                                                        ");
    if ($ubah) {
        echo "<script>
                alert('Ubah data succes!');
                document.location='lembar_kerja.php';
                </script>";
    } else {
        echo "<script>
                alert('Ubah  data Gagal!');
                document.location='lembar_kerja.php';
                </script>";
    }
}

//uji coba tombol Hapus
if (isset($_POST['bhapus'])) {
    //persiapan hapus data baru 
    $hapus = mysqli_query($koneksi, "DELETE FROM lembar_kerja WHERE id = '$_POST[id]' ");

    //jika hapus sukses
    if ($hapus) {
        echo "<script>
                alert('Hapus data succes!');
                document.location='lembar_kerja.php';
                </script>";
    } else {
        echo "<script>
                alert('Hapus data Gagal!');
                document.location='lembar_kerja.php';
                </script>";
    }
}
