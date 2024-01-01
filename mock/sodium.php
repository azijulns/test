<?php
class Sodium {
	static function addForm(): self {
		return new self();
	}

	function addColum(): self {
		return $this;
	}

	function addFields(): self {
		return $this;
	}
}

Sodium::addForm()->addColum()->addFields();
