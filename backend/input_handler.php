<?php

include 'config.php';
include '../vendor/autoload.php';

use React\EventLoop\Factory;
use unreal4u\TelegramAPI\HttpClientRequestHandler;
use unreal4u\TelegramAPI\Telegram\Methods\SendMessage;
use unreal4u\TelegramAPI\Telegram\Types\Inline\Keyboard\Markup;
use unreal4u\TelegramAPI\TgLog;

$nama = $_POST['nama'];
$alamat_rumah = $_POST['alamat_rumah'];
$nomor_telepon = $_POST['no_telepon'];
$nik = $_POST['nik'];
$keperluan = $_POST['keperluan'];
$guru = $_POST['guru'];
$nama_instansi = $_POST['nama_instansi'];
$alamat_instansi = $_POST['alamat_instansi'];


$query = "INSERT INTO guests (name,address,phone,nik,need,intendeed_teacher,company_name,company_address) VALUES (
    '$nama',
    '$alamat_rumah',
    '$nomor_telepon',
    '$nik',
    '$keperluan',
    '$guru',
    '$nama_instansi',
    '$alamat_instansi'
)";

if($nama_instansi == NULL ){
    
$query = "INSERT INTO guests (name,address,phone,nik,need,intendeed_teacher,company_name,company_address) VALUES (
    '$nama',
    '$alamat_rumah',
    '$nomor_telepon',
    '$nik',
    '$keperluan',
    '$guru',
    '$alamat_instansi'
)";    
}

if($alamat_instansi == NULL){
    
$query = "INSERT INTO guests (name,address,phone,nik,need,intendeed_teacher,company_name,company_address) VALUES (
    '$nama',
    '$alamat_rumah',
    '$nomor_telepon',
    '$nik',
    '$keperluan',
    '$guru',
    '$nama_instansi'
)";
}

$result_query = mysqli_query($sql,$query);

if($result_query){
    

    $token = "727683351:AAFVIzhEVVRuxQBHwWe162G0VfZH2yjmTu0";
    $chat = "-381126773";

    $loop = \React\EventLoop\Factory::create();
    $handler = new HttpClientRequestHandler($loop);
    $tgLog = new TgLog($token, $handler);

    $sendMessage = new SendMessage();
    $sendMessage->chat_id = $chat;
    $sendMessage->parse_mode = 'html';
    $word = '<b>Perhatian Kepada Bapak/Ibu Guru</b>'.PHP_EOL.PHP_EOL.'<b>Nama</b> : '.$nama.PHP_EOL.'<b>Alamat Rumah</b> : '.$alamat_rumah.PHP_EOL.'<b>Nomor Telepon</b> : '.$nomor_telepon.PHP_EOL.'<b>NIK</b> : '.$nik.
            PHP_EOL.'<b>Keperluan</b> : '.$keperluan.PHP_EOL.'<b>Guru</b> : '.$guru.PHP_EOL.'<b>Nama Instansi</b> : '.$nama_instansi.PHP_EOL.'<b>Alamat Instansi</b> : '.$alamat_instansi;

    $sendMessage->text = $word;
    $tgLog->performApiRequest($sendMessage);
    
    $loop->run();

    
}else{
    echo mysqli_error($sql);
}