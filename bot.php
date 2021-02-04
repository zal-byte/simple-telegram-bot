<?php

	include 'lib/send.php';

	$request = file_get_contents("php://input");
	$request = json_decode($request, 1);

	$chat_id = $request["message"]["chat"]["id"];
	$message_id = $request['message']['message_id'];
	$text = $request['message']['text'];

	//membuat class send
	$send = new Send();

	if(strtolower($text) == "/start"){
		$param = http_build_query([
			'chat_id'=>$chat_id,
			'reply_to_message_id'=>$message_id,
			'text'=>'Hai, Terima kasih telah menggunakan BOT ini :).'
		]);
		$send->sendMessage($param);
	}else if(strtolower($text) == "sendimage"){
		$path = array('lib/img/img1.jpg','lib/img/img2.jpg','lib/img/img3.jpg','lib/img/img4.jpg');
		$rand_int = array_rand($path, 1);
		$files = new CURLFile(realpath($path[$rand_int]));

		$params = array('chat_id'=>$chat_id,'reply_to_message_id'=>$message_id,'photo'=>$files,'caption'=>'Send image');
		$send->sendPhoto($params);
	}else if(strtolower($text) == "sendvideo"){
		$file = 'https://media.tenor.com/images/9ff97f372dfff54467f1295a3cf6d074/tenor.gif';
		$param = array('chat_id'=>$chat_id,'reply_to_message_id'=>$message_id,'video'=>$file,'caption'=>'Send video');
		$send->sendVideo($param);
	}else if(strtolower($text) == "sendaudio"){
		$file = new CURLFile(realpath('lib/audio/oniichan1.ogg'));
		$param = array('chat_id'=>$chat_id,'reply_to_message_id'=>$message_id,'audio'=>$file,'caption'=>'Send audio');
		$send->sendAudio($param);
	}else{
		if($text){
			$param = http_build_query([
				'chat_id'=> $chat_id,
				'reply_to_message_id'=>$message_id,
				'text'=>'Kamu mengetik : '.$text
			]);
			$send->sendMessage($param);
		}
	}



?>