<?php namespace App\Http\Requests;

use Bsapaka\ScalableTaxonomy\Request;
use App\Models\Item;

class ItemRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $class = $this->request->get('item_type');
        return Item::instanceOfType($class)->validationRules();
    }
}
