<html>
    <head>
        <title>Praktikum 6 - Pemrograman PHP</title>
    </head>
<body>
    
<?php 
echo '<h2>================================= PHP Function ================================= </h2>'; 
// Pembuatan function
function tampilkan_nama() {
    echo "Nama Saya I Gede Dio Kumara";
}
// pemanggilan function
tampilkan_nama();


echo '<br/><br/><h2>================================= STRING FUNCTION ================================= </h2>';
$nama = "i gede dio Kumara";
echo $nama;
echo '<br/>';
echo strtoupper($nama);
echo ' [strtoupper] <br/>';
echo ucwords($nama);
echo ' [ucwords] <br/>';
echo lcfirst($nama);
echo ' [lcfirst] <br/>';
echo strtolower($nama);
echo ' [strtolower] <br/>';


echo "<br/><br/><h2>================================= STRING FUNCTION ================================= </h2>";
// Fungsi Void
function salam($nama=""){
    echo "<h2>Assalamu'alaykum ".strtoupper($nama)."</h2>";
}

salam("ali");
salam("fadil");
salam();


echo "<br/><br/><h2>================================= STRING FUNCTION ================================= </h2>";
// Fungsi return value
function jumlah($a , $b) {
    return $a + $b;
}

echo '$a + $b = '.jumlah(2,8)."<br/>";

// =========================================================================
// mengembalikan nilai berupa variable
$a = 2; $b=8;
$c = jumlah($a,$b);

echo "$a + $b = $c ";


echo "<br/><br/><h2>================================= FUNCTION DEFINE BY USER ::VOID (TANPA ARGUMEN) ================================= </h2>";
// Membuat fungsi TANPA Argumen
function perkenalkan(){
    echo "Assalamu'alaykum, ";
    echo " Perkenalkan, nama saya Bedu<br/>";
    echo " Senang berkenalan dengan Anda<br/> ";
}

// memanggil fungsi yang sudah dibuat
perkenalkan();

echo "<hr/>";

$saya = "Bedu";
$ucapanSalam = "Selamat Pagi";

// memanggil lagi
perkenalkan();


echo "<br/><br/><h2>================================= FUNCTION DEFINE BY USER ::VOID (DENGAN ARGUMEN) ================================= </h2>";
// Membuat fungsi DENGAN Argumen
function perkenalan($nama, $salam){
    echo $salam.",";
    echo " Perkenalkan, nama saya ".$nama."<br/>";
    echo " Senang berkenalan dengan Anda<br/> ";
}

// memanggil fungsi yang sudah dibuat
perkenalan("Usro", "Hai");

echo "<hr/>";

$saya = "Bedu";
$ucapanSalam = "Selamat Pagi";

// memanggil lagi
perkenalan($saya, $ucapanSalam);


echo "<br/><br/><h2>================================= FUNCTION DEFINE BY USER ::VOID (NILAI DEFAULT) ================================= </h2>";
// Membuat fungsi DENGAN Argumen
function kenalan($nama, $salam="Assalamu'alaykum"){
    echo $salam.",";
    echo " Perkenalkan, nama saya ".$nama."<br/>";
    echo " Senang berkenalan dengan Anda<br/> ";
}

// memanggil fungsi yang sudah dibuat
kenalan("Jarwo", "Hi");

echo "<hr/>";

$saya = "Bambang";
$ucapanSalam = "Selamat Pagi";

// memanggil lagi
kenalan($saya);


echo '<br/><br/><h2>================================= RETURN VALUE ================================= </h2>'; 
// Pembuatan function
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

echo "Umur saya adalah ". hitungUmur(2005, 2024). " tahun";


echo '<br/><br/><h2>================================= FUNCTION DEFINE BY USER ::VOID (DENGAN ARGUMEN LAIN) ================================= </h2>'; 
// Pembuatan function
function htngUmur($thn_lhr, $thn_skrng) {
    $usia = $thn_skrng - $thn_lhr;
    return $usia;
}

function kenal($name, $salm="Assalamu'alaykum"){
    echo $salm.", ";
    echo "perkenalkan, nama Saya ".$name."<br/>";
    // memanggil fungsi lain
    echo "Saya berusia ". htngUmur(2003, 2024). " tahun<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

// memnaggil fungsi kenal
kenal("Ardianta");


echo '<br/><br/><h2>================================= FUNCTION::VOID (CONTOH LAIN) ================================= </h2>'; 
function faktorial($angka) {
    if ($angka < 2) {
        return 1;
    } else {
        //memanggil dirinya sendiri
        return ($angka * faktorial($angka-1));
    }
}
    //memanggil fungsi
    echo "Faktorial 5 adalah ". faktorial(5);


echo '<br/><br/><h2>================================= VARIABLE LOCAL FUNCTION ================================= </h2>'; 
echo '(<i>Hanya dikenal dalam fungsi saja)</i><br/><br/>';
function pangkatDua($a){
    $a = $a * $a;
}
$a = 20;
echo 'Sebelum Nilai $a :'.$a;
pangkatDua($a);
echo '<br/>Sesudah Nilai $a :'.$a;


echo '<br/><br/><h2>================================= VARIABLE GLOBAL FUNCTION ================================= </h2>'; 
echo '<i>(Dikenal oleh Seluruh Program)</i><br/><br/>';
function pngktDua($a){
    global $a;
    $a = $a * $a;
}
$a = 20;
echo 'Sebelum Nilai $a :'.$a;
pngktDua($a);
echo '<br/>Sesudah Nilai $a :'.$a;
?>

</body> 
</html>