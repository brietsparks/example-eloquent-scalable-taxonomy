<?php namespace App\Models;

use Bsapaka\EloquentAttribute\Attribute;

class Melee extends Weapon {
	protected static $singleTableType = 'melee';
	protected static $persisted = [
		'mel_oal',
		'mel_pob'
	];

	public static function defineAttributes() {
		return array(
			Attribute::make()
				->setName('mel_oal')
				->setAlias('overall length')
				->setUom('in.')
				->addTag('spec')
				->addValidationRule('numeric')
				->addValidationRule('required'),
			Attribute::make()
				->setName('mel_pob')
				->setAlias('point of balance')
				->setUom('in.')
				->addTag('spec')
				->addValidationRule('numeric')
				->addValidationRule('required')
		);
	}
}