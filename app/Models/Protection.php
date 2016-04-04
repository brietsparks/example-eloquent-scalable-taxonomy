<?php namespace App\Models;


class Protection extends Item {
	protected static $singleTableSubclasses = [
		Armor::class,
		Shield::class
	];

}