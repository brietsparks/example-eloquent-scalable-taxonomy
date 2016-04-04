<?php

use Bsapaka\EloquentAttribute\AttributesTrait;
use Nanigans\SingleTableInheritance\SingleTableInheritanceTrait;

trait ScalableTaxonomyTraitold {

	use AttributesTrait;
	use SingleTableInheritanceTrait;

	/**
	 * @param array $attributes
	 */
	public function hydrateAttributeList(array $attributes) {
		$typeField = static::$singleTableTypeField;

		$classType = isset($attributes[$typeField]) ? $attributes[$typeField] : null;

		if ($classType !== null) {
			$childTypes = static::getSingleTableTypeMap();
			if (array_key_exists($classType, $childTypes)) {
				$class = $childTypes[$classType];
			}
		}

		$classes = class_parents($class);

		$attributes = array();
		foreach($classes as $class) {
			if(method_exists($class, 'defineAttributes')) {
				$attributes = array_merge($attributes, $class::defineAttributes());
			}
		}

		static::getAttributeList()->add($attributes);
	}

	public static function bootScalableTaxonomyTrait() {
		dd('bar');
	}

	public function foo() {

	}


	/**
	 * @return array
	 */
	public static function entityList() {
		$entityList = array();

		$leaves = static::getSingleTableTypeMap();
		foreach($leaves as $name => $classPath) {
			foreach(class_parents($classPath) as $parent) {
				echo "<pre>";
				print_r($parent);
				echo "</pre>";
			}
		}

		return $entityList;
	}
}