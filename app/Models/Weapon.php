<?php namespace App\Models;

use Bsapaka\EloquentAttribute\AttributesTrait;
use Bsapaka\EloquentAttribute\Attribute;
use Bsapaka\EloquentAttribute\ValueSet;

class Weapon extends Item {

	protected static $singleTableSubclasses = [
		Melee::class,
		Ranged::class
	];
	protected static $persisted = [
		'wpn_hands'
	];


	public static function defineAttributes() {
		return array(
			Attribute::make()
				->setName('wpn_hands')
				->setAlias('hands to wield')
				->addTag('spec')
				->setValueSet(ValueSet::make([1,2]))
		);
	}
}