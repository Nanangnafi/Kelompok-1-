<?php
//panggil koneksi database
include "koneksi.php";

//uji coba tombol simpan
if (isset($_POST['bsimpan'])) {
    //persiapan simpan data baru
    $simpan = mysqli_query($koneksi, "INSERT INTO tb_ijinkp (id,nama_lengkap,surat_ijin)
                                    VALUES('$_POST[tid]',
                                            '$_POST[tnama_lengkap]',
                                            '$_POST[tsurat_ijin]' )
                                            ");
    if ($simpan) {
        echo "<script>
                alert('Simpan data succes!');
                document.location='IjinProjek.php';
                </script>";
    } else {
        echo "<script>
                alert('Simpan data Gagal!');
                document.location='IjinProjek.php';
                </script>";
    }
}
