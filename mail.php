<?php
    $name = $_POST['user_comment'];
	$phone = $_POST['user_phone'];
    $text = $_POST['user_text'];

	$to = "syleiman.gybaidullin1@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка в ролку";

	
	$msg="
    Имя: $name /n
    Фамилия: $surname /n
    Телефон: $phone /n
    Почта: $email /n
    Текст: $text"; 	
	mail($to, $subject, $msg, "From: $from ");

?>

<p>Запрос отправлен. Спасибо!</p>
<a href="index.html">Вернутся назад</a>