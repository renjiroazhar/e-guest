<?php

include '../../../../config/config.php';
include '../../../../vendor/autoload.php';

use React\EventLoop\Factory;
use unreal4u\TelegramAPI\HttpClientRequestHandler;
use unreal4u\TelegramAPI\Telegram\Methods\SendMessage;
use unreal4u\TelegramAPI\Telegram\Types\Inline\Keyboard\Markup;
use unreal4u\TelegramAPI\TgLog;

$nama = htmlspecialchars($_POST['nama']);
$alamat_rumah = htmlspecialchars($_POST['alamat_rumah']);
$nomor_telepon = htmlspecialchars($_POST['no_telepon']);
$keperluan = htmlspecialchars($_POST['keperluan']);
$guru = htmlspecialchars($_POST['guru']);
$nama_instansi = htmlspecialchars($_POST['nama_instansi']);
$alamat_instansi = htmlspecialchars($_POST['alamat_instansi']);
$query = null;

if($alamat_rumah == NULL ){
    $query = "INSERT INTO guest (name,phone,need,intendeed_teacher,company_name,company_address) VALUES (
    '$nama',
    '$nomor_telepon',
    '$keperluan',
    '$guru',
    '$nama_instansi',
    '$alamat_instansi')";    
}
else{
    $query = "INSERT INTO guest (name,address,phone,need,intendeed_teacher,company_name,company_address) VALUES (
        '$nama',
        '$alamat_rumah',
        '$nomor_telepon',
        '$keperluan',
        '$guru',
        '$nama_instansi',
        '$alamat_instansi'
    )";
}

echo PHP_EOL.$query;
$result_query = mysqli_query($sql,$query);

if($result_query){
    $loop = \React\EventLoop\Factory::create();
    $handler = new HttpClientRequestHandler($loop);
    $tgLog = new TgLog($token, $handler);

    $sendMessage = new SendMessage();
    $sendMessage->chat_id = $chat;
    $sendMessage->parse_mode = 'html';
    $word = '<b>Perhatian Kepada Bapak/Ibu Guru</b>'.PHP_EOL.PHP_EOL.'<b>Nama</b> : '.$nama.PHP_EOL.'<b>Alamat Rumah</b> : '.$alamat_rumah.PHP_EOL.'<b>Nomor Telepon</b> : '.$nomor_telepon.
            PHP_EOL.'<b>Keperluan</b> : '.$keperluan.PHP_EOL.'<b>Guru</b> : '.$guru.PHP_EOL.'<b>Nama Instansi</b> : '.$nama_instansi.PHP_EOL.'<b>Alamat Instansi</b> : '.$alamat_instansi
            .PHP_EOL.PHP_EOL.'Apakah Bapak/Ibu '.$guru.' dapat menemui?';

    $sendMessage->text = $word;
    $tgLog->performApiRequest($sendMessage);
    
    $loop->run();

    return header('Location: ../../../../views/users/layouts/input_page.php');
    
}else{
    echo mysqli_error($sql);
}

?>