<?php

namespace Esojtec\Messages\Libraries;

class Message {

	var $_messages = [];

	function __Construct(){

	}

	funciton message($message, $type = 'info') {
		$this->_messages[] = ['message' => $message, 'type' => $type];
	}

	funciton render() {
		return $this->_messages;
	}
}