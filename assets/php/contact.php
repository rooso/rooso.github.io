<?php

	$form_data = [];

	$name        	= $_POST['name'];
	$msg       	= $_POST['msg'];
	$email        	= $_POST['email'];
	$cell        	= $_POST['cell'];
	$count        	= $_POST['count'];

	$message     	= "Name/Gruppe: $name, \nNachricht: $msg, \nEmail: $email, \nTelefon: $cell, \nGäste: $count";

	if(mail('oliver.roos@outlook.com', "Test Sub", $message))
		$form_data['success'] = true;
	else
		$form_data['success'] = false;

	echo json_encode($form_data);
	return;
?>