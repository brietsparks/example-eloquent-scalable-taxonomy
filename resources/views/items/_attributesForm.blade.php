<ul class="attributes">
<li class="form-group">
    {!! Form::label('item_name', 'Item Name') !!}
    {!! Form::input('text', 'item_name') !!}
</li>


@foreach($item->attributeTemplate()->all() as $attribute)
    <?php
    $attributeName = $attribute->getName();
    $attributeAlias = ucwords($attribute->getAlias());
    ?>
    @if($attribute->hasTag('spec'))
        <li class="form-group">
            {!! Form::label( $attributeName, $attributeAlias) !!}

            @if($attribute->hasValueSet())
                <?php
                $values = [];
                foreach ((array)$attribute->getValueSet()->getValues() as $value) $values[$value] = $value;
                ?>
                {!! Form::select($attributeName, $values) !!}

            @elseif($attribute->hasValidationRule('boolean'))
                {!! Form::checkbox($attributeName) !!}

            @elseif($attribute->hasValidationRule('numeric'))
                {!! Form::input( 'number', $attributeName, null, ['step' => 'any']) !!}

            @elseif($attribute->hasValidationRule('integer'))
                {!! Form::input( 'number', $attributeName, null, ['step' => '1']) !!}

            @elseif($attribute->hasValidationRule('string'))
                {!! Form::input( 'text', $attributeName) !!}

            @endif
        </li>
    @endif
@endforeach
</ul>

<div class="form-group">
    {!! Form::Submit(
            'Go',
            ['class' => 'btn btn-success']

    ) !!}
</div>

@include('items/_formErrors')





