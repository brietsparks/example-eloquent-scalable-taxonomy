<ul class="attributes">
@foreach($item->getAttributeList()->all() as $attribute)
    @if($attribute->hasTag('spec'))
        <li>
            {{ucwords($attribute->getAlias())}}: {{ ucwords($item->{$attribute->getName()}) }} {{ $attribute->getUom() }}</li>
    @endif
@endforeach
</ul>