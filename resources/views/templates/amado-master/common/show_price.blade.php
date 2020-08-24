
@php
/*
This view use render price
$price
$priceFinal
$kind
*/
@endphp

@switch($kind)
    @case(SC_PRODUCT_GROUP)
        {!! trans('product.price_group') !!}
        @break
    @default
        @if ($price == $priceFinal)
            {!! sc_currency_render($price) !!}
        @else
            <span class="sc-new-price">{!! sc_currency_render($priceFinal) !!}</span><span class="sc-old-price">{!!  sc_currency_render($price) !!}</span>
        @endif
        
@endswitch