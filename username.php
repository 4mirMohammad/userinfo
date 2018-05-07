<?php
/**
 * Created by https://t.me/c_7777
 * User: amir
 * Date: 5/7/2018
 * Time: 2:57 PM
 */
include("Telegram.php");
mkdir("data/$form_id");
$token = "token";
$API_KEY = 'token';
$message= file_get_contents("php://input");
$arrayMessage= json_decode($message, true);
$command= $arrayMessage['message']['text'];
date_default_timezone_set("asia/tehran");
$ali = file_get_contents("data/".$from_id."/ali.txt");
$mtn = file_get_contents("data/".$from_id."/mtn.txt");
$admin = "put id adadi for sudo bot";
$from_id = $message->from->id;
$arrayMessage = json_decode($message, true);
$channel = "@AmirHack025";
$telegram = new Telegram($token);
$text = $telegram->Text();
$username = $telegram->Username();
$name = $telegram->FirstName();
$family = $telegram->LastName();
$message_id = $telegram->MessageID();
$user_id = $telegram->UserID();
$chat_id = $telegram->ChatID();
define('API_KEY',$API_KEY);
if(!is_null($text) && !is_null($chat_id)){
$content = ['chat_id' => $chat_id, 'text' =>"information you      !
@$username
ID: $chat_id
first: $name
last: $family
lang: fa^^IR
IranðŸ‡®ðŸ‡·
 ----------------------------------------------------------------------------
$channel"];
            $telegram->sendMessage($content);
}
// created by #4mir
