# Example Application Using Scalable Taxonomy

Adding classes No need to create a new set of routes for each class in the hierarchy. 
Define routes using the name of the top node:


### Taxonomy classes in this example app ###
```
Item
	|___Weapon
	|		|___Melee
	|		|___Ranged
	|
	|___Protection
			|___Armor
			|___Shield

```


### The routes of the root class handle routing for all its subclasses:###

#### Routes.php ####
The `{type}` parameter is any valid class in the taxonomy.
```
$types = implode("|", App\Models\Item::allClasses(false));

Route::get('{type}/{id}', 'ItemTaxonomyController@show')->where('type', $types);
```

#### ItemTaxonomyController.php ####
The `$type` parameter determines which model is created.
```
public function show($type,$id) {
	$item = Item::instanceOfType($type)->findOrFail($id);

	return view('items/show', [
		'item'    => $item
	]);
}
```

As a result, you can retrieve a resource of a given id by using any `$type` that is part of its classification lineage. For example, if a given item has the classification lineage of:

```
Item
	|___Weapon
			|___Melee
```

and an `item_id` of 1, then it can be retrieved using the following routes:
```
item/1
weapon/1
melee/1
```

### Root class and subclasses are presented by the same set of views ###

#### views/items/show.blade.php ####
Model attributes are contained in classes so that the presentation can be abstracted.
```
<h3>{{ $item->item_name }}</h3>

<ul class="attributes">
@foreach($item->getAttributeList()->all() as $attribute)
    @if($attribute->hasTag('spec'))
        <li>
            {{ucwords($attribute->getAlias())}}: {{ ucwords($item->{$attribute->getName()}) }} {{ $attribute->getUom() }}</li>
    @endif
@endforeach
</ul>
```


### Attribute behavior is defined in the model it belongs to ###

#### Weapon.php ####
```
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
```