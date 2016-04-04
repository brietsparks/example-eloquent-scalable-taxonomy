<?php namespace App\Models;

use Bsapaka\EloquentAttribute\Attribute;
use Bsapaka\EloquentAttribute\ValueSet;

class Ranged extends Weapon {
	protected static $singleTableType = 'ranged';
	protected static $persisted = [
		'rng_projectile',
		'rng_range'
	];

	public static function defineAttributes() {
		return array(
			Attribute::make()
				->setName('rng_projectile')
				->setAlias('projectile')
				->addTag('spec')
				->setValueSet(ValueSet::make(['arrow','quarrel','other'])),
			Attribute::make()
				->setName('rng_range')
				->setAlias('max range')
				->setUom('ft.')
				->addTag('spec')
				->addValidationRule('numeric')
		);
	}
}