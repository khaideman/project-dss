<?php
$konek=new mysqli('localhost','root','','spksaw');
if ($konek->connect_errno){
    "Database Error".$konek->connect_error;
}
?>

<?php
// $konek = new mysqli('localhost', 'id20708148_projectsaw', 'fch}S~5(Vw8S2wIW', 'id20708148_spksaw');
// if ($konek->connect_errno) {
//     die("Koneksi ke database gagal: " . $konek->connect_error);
// } else {
//     echo "Koneksi ke database berhasil";
// }
?>
