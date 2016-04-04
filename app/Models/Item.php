<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Bsapaka\EloquentAttribute\Attribute;
use Bsapaka\EloquentAttribute\ValueSet;

use Bsapaka\ScalableTaxonomy\ScalableTaxonomyTrait;

class Item extends Model {

	protected $table = 'items';
	protected $primaryKey = 'item_id';
	protected $guarded = [];

	use ScalableTaxonomyTrait;
	protected static $singleTableTypeField = 'item_type';
	protected static $singleTableSubclasses = [
		Weapon::class,
		Protection::class
	];
	protected static $persisted = [
		'item_name',
		'item_weight',
		'item_description'
	];

	public static function defineAttributes() {
		return array(
			Attribute::make()
				->setName('item_name')
				->setAlias('name')
				->addValidationRule('required'),
			Attribute::make()
				->setName('item_weight')
				->setAlias('weight')
				->setUom('lbs.')
				->addValidationRule('required')
				->addValidationRule('numeric')
				->addTag('spec'),
			Attribute::make()
				->setName('item_type')
				->setAlias('type')
				->setValueSet(ValueSet::make(static::leafClasses(false)))
				->addValidationRule('required')
		);
	}
}