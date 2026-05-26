<?php

$data = json_decode(file_get_contents("php://input"), true);

$name = $data['name'] ?? '';
$contact = $data['contact'] ?? '';
$type = $data['type'] ?? '';
$message = $data['message'] ?? '';

$text = "
🎂 Новая заявка

👤 Имя: $name
📱 Контакт: $contact
🍰 Тип: $type

💬 Пожелания:
$message
";

$token = "1805801654:AAFzamsFKtlOqXB5KkFHuBa-ekxnSdaLxa0";
$chat_id = "739889656";

$url = "https://api.telegram.org/bot$token/sendMessage";

file_get_contents($url . "?" . http_build_query(['chat_id' => $chat_id, 'text' => $text]));

echo json_encode(['success' => true]);
