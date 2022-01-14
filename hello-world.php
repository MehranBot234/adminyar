<?php
	$token = "1966150907:AAGt-ev-NNmHA4GSaB2StGgSAh0rQVWi5qY";
	$update = json_decode(file_get_contents('php://input'), true);
	file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$update['message']['chat']['id']."&text=ربات ادمین یار در خدمتگزاری حاضر است،امر بفرمایید.");
?>