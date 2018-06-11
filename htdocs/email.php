<?php
	$name = $_REQUEST['contactName'];
	$email = $_REQUEST['contactEmail'];
	$subject = $_REQUEST['contactSubject'];
	$message = $_REQUEST['contactMessage'];

	mail('me@ericharrison.info', '[WEBSITE CONTACT] ' . $subject, $email . "\r\n\r\n" . $message)

