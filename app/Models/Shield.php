<?php namespace App\Models;

use Bsapaka\EloquentAttribute\Attribute;
use Bsapaka\EloquentAttribute\ValueSet;

class Shield extends Protection {
	protected static $singleTableType = 'shield';

	protected static $persisted = [
		'shld_shape',
		'shld_height',
		'shld_width'
	];

	public static function defineAttributes() {
		return array(
			Attribute::make()
				->setName('shld_shape')
				->setAlias('shape')
				->addTag('spec')
				->setValueSet(ValueSet::make(['rectangular','circular','other'])),
			Attribute::make()
				->setName('shld_height')
				->setAlias('height')
				->setUom('in.')
				->addTag('spec')
				->addValidationRule('numeric'),
			Attribute::make()
				->setName('shld_width')
				->setAlias('width')
				->setUom('in.')
				->addTag('spec')
				->addValidationRule('numeric')
		);
	}
}