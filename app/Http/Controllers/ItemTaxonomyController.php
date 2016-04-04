<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequest;
use App\Models\Item;

class ItemTaxonomyController extends Controller {

	protected $taxons = array();

	public function index($type) {
		$items = Item::instanceOfType($type)->all();
		$subTypes = Item::subClassesOfType($type, false);

		return view('items/index',[
			'items' => $items,
			'type' => $type,
			'subTypes' => $subTypes
		]);
	}

	public function show($type,$id) {
		$item = Item::instanceOfType($type)->findOrFail($id);

		return view('items/show', [
			'item'    => $item
		]);
	}

	public function edit($type, $id) {
		$item = Item::instanceOfType($type)->findOrFail($id);

		return view('items/edit', [
			'item'    => $item
		]);
	}

	public function update($id, ItemRequest $request) {
		$input = $request->all();

		// (persist to database)

		// output for example
		$item = Item::findOrFail($id)->fill($input);
		return view('items/postResult', ['item' => $item]);
	}

	public function create($type) {
		$subTypes = Item::subClassesOfType($type, false);
		if(count($subTypes) > 0) {
			return view('items/create', [
				'type' => $type,
				'subTypes' => $subTypes
			]);
		} else {
			return view('items/create', [
				'type' => $type,
				'item' => Item::instanceOfType($type)
			]);
		}
	}

	public function store(ItemRequest $request) {
		$input = $request->all();

		// (persist to database)

		// output for example
		$item = Item::instanceOfType($input['item_type'])->fill($input);
		return view('items/postResult', ['item' => $item]);
	}

	public function destroy($type, $id) {

	}


}

