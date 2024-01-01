<?php
class FileWriter {
	static $instances = [];
	private $filename;

	private function __construct($filename) {
		$this->filename = $filename;
	}

	static function getInstance($filename) {
		if (!isset(self::$instances[$filename])) {
			self::$instances[$filename] = new FileWriter($filename);
		}

		return self::$instances[$filename];
	}

	function functionName() {
		echo "writing Data to {$this->filename}";
	}

	static function dump() {
		print_r(self::$instances);
	}
}

$f1 = FileWriter::getInstance("ok");
$f1->functionName();
$f2 = FileWriter::getInstance("o5");
$f2->functionName();
FileWriter::dump();
