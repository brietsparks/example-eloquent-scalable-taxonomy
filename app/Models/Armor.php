<?php namespace App\Models;

use Bsapaka\EloquentAttribute\Attribute;
use Bsapaka\EloquentAttribute\ValueSet;

class Armor extends Protection {
	protected static $singleTableType = 'armor';

	protected static $persisted = [
		'armr_material'
	];

	public static function defineAttributes() {
		return array(
			Attribute::make()
				->setName('armr_material')
				->setAlias('material')
				->addTag('spec')
				->setValueSet(ValueSet::make([
					'padded cloth',
					'maille',
					'plates',
					'other'
					])
				)
		);
	}
}