<?php
	header("Content-Type: text/plain");
	header("X-Node: localhost");
	$from = $_REQUEST['from'];
	$toemail = $_REQUEST['toemail'];
	$subject = $_REQUEST['subject'];
	$message = $_REQUEST['message'];
	if ( $from == "" || $toemail == "" ) {
		header("HTTP/1.1 500 WhatAreYouDoing");
		header("Content-Type: text/plain");
		echo 'FAIL: You must fill in From: and To: fields.';
		exit;
	}
	$result = mail($toemail, $subject, $message, "From: $from" );
	if ( $result ) {
		echo 'OK';
	} else {
		echo 'FAIL';
	}
	exit;?>