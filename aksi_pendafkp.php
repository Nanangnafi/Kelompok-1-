<?php
//panggil koneksi database
include "koneksi.php";

//uji coba tombol simpan
if (isset($_POST['bsimpan'])) {
    //persiapan simpan data baru
    $simpan = mysqli_query($koneksi, "INSERT INTO tb_pendaftarankp (id,tempat_kp,alamat_kp,tanggal_mulai,tanggal_selesai,proposal,anggota_kelompok,dosen,perusahaan)
                                    VALUES('$_POST[tid]',
                                            '$_POST[ttempat_kp]',
                                            '$_POST[talamat_kp]',
                                            '$_POST[ttanggal_mulai]',
                                            '$_POST[ttanggal_selesai]',
                                            '$_POST[tproposal]',
                                            '$_POST[tanggota_kelompok]',
                                            '$_POST[tdosen]',
                                            '$_POST[tperusahaan]' )
                                            ");
    if ($simpan) {
        echo "<script>
                alert('Simpan data succes!');
                document.location='pendaftaran_KP.php';
                </script>";
    } else {
        echo "<script>
                alert('Simpan data Gagal!');
                document.location='pendaftaran_KP.php';
                </script>";
    }
}

//uji jika tombol ubah di klik
if (isset($_POST['bubah'])) {

    //persiapan Ubah data 
    $ubah = mysqli_query($koneksi, "UPDATE tb_pendaftarankp SET
                                                    tempat_kp = '$_POST[ttempat_kp]',
                                                    alamat_kp = '$_POST[talamat_kp]',
                                                    tanggal_mulai = '$_POST[ttanggal_mulai]',
                                                    tanggal_selesai = '$_POST[ttanggal_selesai]',
                                                    anggota_kelompok = '$_POST[tanggota_kelompok]',
                                                    dosen = '$_POST[tdosen]',
                                                    perusahaan = '$_POST[tperusahaan]'
                                                WHERE id = '$_POST[id]'
                                                    ");

    //jika ubah sukses
    if ($ubah) {
        echo "<script>
                alert('Ubah Data Sukes!');
                document.location='pendaftaran_KP.php';
                </script>";
    } else {
        echo "<script>
                alert('Ubah Data Gagal!');
                document.location='pendaftaran_KP.php';
                </script>";
    }
}

//uji coba tombol Hapus
if (isset($_POST['bhapus'])) {
    //persiapan hapus data baru 
    $hapus = mysqli_query($koneksi, "DELETE FROM tb_pendaftarankp WHERE id = '$_POST[id]' ");

    //jika hapus sukses
    if ($hapus) {
        echo "<script>
                alert('Hapus data succes!');
                document.location='pendaftaran_KP.php';
                </script>";
    } else {
        echo "<script>
                alert('Hapus data Gagal!');
                document.location='pendaftaran_KP.php';
                </script>";
    }
}
