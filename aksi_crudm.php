<?php
//panggil koneksi database
include "koneksi.php";

//uji coba tombol simpan
if (isset($_POST['bsimpan'])) {
    //persiapan simpan data baru
    $simpan = mysqli_query($koneksi, "INSERT INTO mahasiswa (Nama_Mahasiswa, Nim, Kelas, EmaiL, Alamat)
                                    VALUES('$_POST[tnama]',
                                            '$_POST[tnim]',
                                            '$_POST[tkelas]',
                                            '$_POST[temail]',
                                            '$_POST[talamat]')");
    if ($simpan) {
        echo "<script>
                alert('Simpan data succes!');
                document.location='mahasiswaori.php';
                </script>";
    } else {
        echo "<script>
                alert('Simpan data Gagal!');
                document.location='mahasiswaori.php';
                </script>";
    }
}

//uji coba tombol ubah
if (isset($_POST['bubah'])) {
    //persiapan ubah data baru 
    $ubah = mysqli_query($koneksi, "UPDATE mahasiswa SET Nama_Mahasiswa = '$_POST[tnami]',
                                                        Nim            = '$_POST[tnimu]',
                                                        Kelas          = '$_POST[tkelase]',
                                                        Email          = '$_POST[temaile]',
                                                        Alamat         = '$_POST[talamate]'
                                                        WHERE id       = '$_POST[id]'
                                                        ");
    if ($ubah) {
        echo "<script>
                alert('Ubah data succes!');
                document.location='mahasiswaori.php';
                </script>";
    } else {
        echo "<script>
                alert('Ubah  data Gagal!');
                document.location='mahasiswaori.php';
                </script>";
    }
}

//uji coba tombol Hapus
if (isset($_POST['bhapus'])) {
    //persiapan hapus data baru 
    $hapus = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = '$_POST[id]' ");

    //jika hapus sukses
    if ($hapus) {
        echo "<script>
                alert('Hapus data succes!');
                document.location='mahasiswaori.php';
                </script>";
    } else {
        echo "<script>
                alert('Hapus data Gagal!');
                document.location='mahasiswaori.php';
                </script>";
    }
}
