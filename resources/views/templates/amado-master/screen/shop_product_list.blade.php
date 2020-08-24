@php
    /*
    $layout_page = product_list
    $itemsList: paginate
    Use paginate: $itemsList->appends(request()->except(['page','_token']))->links()
    $products: paginate
    Use paginate: $products->appends(request()->except(['page','_token']))->links()
    */
@endphp

@extends($templatePath.'.layout')

@section('center')

{{--    <div class="row ">--}}
{{--            <div class="col-md-2">--}}
                <div class="shop_sidebar_area">

                    <!-- ##### Single Widget ##### -->
                    <div class="widget catagory mb-50">
                        <!-- Widget Title -->
                        <h6 class="widget-title mb-30">Catagories</h6>

                        <!--  Catagories  -->
                        <div class="catagories-menu">
                            <ul>
                                <li class="active"><a href="#">Chairs</a></li>
                                <li><a href="#">Beds</a></li>
                                <li><a href="#">Accesories</a></li>
                                <li><a href="#">Furniture</a></li>
                                <li><a href="#">Home Deco</a></li>
                                <li><a href="#">Dressings</a></li>
                                <li><a href="#">Tables</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- ##### Single Widget ##### -->
                    <div class="widget brands mb-50">
                        <!-- Widget Title -->
                        <h6 class="widget-title mb-30">Brands</h6>

                        <div class="widget-desc">
                            <!-- Single Form Check -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="amado">
                                <label class="form-check-label" for="amado">Amado</label>
                            </div>
                            <!-- Single Form Check -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="ikea">
                                <label class="form-check-label" for="ikea">Ikea</label>
                            </div>
                            <!-- Single Form Check -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="furniture">
                                <label class="form-check-label" for="furniture">Furniture Inc</label>
                            </div>
                            <!-- Single Form Check -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="factory">
                                <label class="form-check-label" for="factory">The factory</label>
                            </div>
                            <!-- Single Form Check -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="artdeco">
                                <label class="form-check-label" for="artdeco">Artdeco</label>
                            </div>
                        </div>
                    </div>

                    <!-- ##### Single Widget ##### -->
                    <div class="widget color mb-50">
                        <!-- Widget Title -->
                        <h6 class="widget-title mb-30">Color</h6>

                        <div class="widget-desc">
                            <ul class="d-flex">
                                <li><a href="#" class="color1"></a></li>
                                <li><a href="#" class="color2"></a></li>
                                <li><a href="#" class="color3"></a></li>
                                <li><a href="#" class="color4"></a></li>
                                <li><a href="#" class="color5"></a></li>
                                <li><a href="#" class="color6"></a></li>
                                <li><a href="#" class="color7"></a></li>
                                <li><a href="#" class="color8"></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- ##### Single Widget ##### -->
                    <div class="widget price mb-50">
                        <!-- Widget Title -->
                        <h6 class="widget-title mb-30">Price</h6>

                        <div class="widget-desc">
                            <div class="slider-range">
                                <div data-min="10" data-max="1000" data-unit="$"
                                     class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                     data-value-min="10" data-value-max="1000" data-label-result="">
                                    <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                </div>
                                <div class="range-price">$10 - $1000</div>
                            </div>
                        </div>
                    </div>
                </div>
{{--            </div>--}}
{{--        <div class="col-md-10">--}}
            <div class="amado_product_area section-padding-100">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                                <!-- Total Products -->
                                <div class="total-products">
                                    <p>Showing 1-8 0f 25</p>
                                    <div class="view d-flex">
                                        <a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <!-- Sorting -->
                                <div class="product-sorting d-flex">
                                    <div class="sort-by-date d-flex align-items-center mr-15">
                                        <p>Sort by</p>
                                        <form action="#" method="get">
                                            <select name="select" id="sortBydate">
                                                <option value="value">Date</option>
                                                <option value="value">Newest</option>
                                                <option value="value">Popular</option>
                                            </select>
                                        </form>
                                    </div>
                                    <div class="view-product d-flex align-items-center">
                                        <p>View</p>
                                        <form action="#" method="get">
                                            <select name="select" id="viewProduct">
                                                <option value="value">12</option>
                                                <option value="value">24</option>
                                                <option value="value">48</option>
                                                <option value="value">96</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <!-- Single Product Area -->
                        <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                            <div class="single-product-wrapper">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <img src="{{asset('/templates/amado-master/img/product-img/product1.jpg')}}" alt="">
                                    <!-- Hover Thumb -->
                                    <img class="hover-img" src="img/product-img/product2.jpg" alt="">
                                </div>

                                <!-- Product Description -->
                                <div class="product-description d-flex align-items-center justify-content-between">
                                    <!-- Product Meta Data -->
                                    <div class="product-meta-data">
                                        <div class="line"></div>
                                        <p class="product-price">$180</p>
                                        <a href="product-details.html">
                                            <h6>Modern Chair</h6>
                                        </a>
                                    </div>
                                    <!-- Ratings & Cart -->
                                    <div class="ratings-cart text-right">
                                        <div class="ratings">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <div class="cart">
                                            <a href="cart.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Cart"><img src="img/core-img/cart.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product Area -->
                        <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                            <div class="single-product-wrapper">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <img src="{{asset('/templates/amado-master/img/product-img/product2.jpg')}}" alt="">
                                    <!-- Hover Thumb -->
                                    <img class="hover-img"
                                         src="{{asset('/templates/amado-master/img/product-img/product3.jpg')}}" alt="">
                                </div>

                                <!-- Product Description -->
                                <div class="product-description d-flex align-items-center justify-content-between">
                                    <!-- Product Meta Data -->
                                    <div class="product-meta-data">
                                        <div class="line"></div>
                                        <p class="product-price">$180</p>
                                        <a href="product-details.html">
                                            <h6>Modern Chair</h6>
                                        </a>
                                    </div>
                                    <!-- Ratings & Cart -->
                                    <div class="ratings-cart text-right">
                                        <div class="ratings">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <div class="cart">
                                            <a href="cart.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Cart"><img
                                                        src="{{asset('/templates/amado-master/img/core-img/cart.png')}}"
                                                        alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product Area -->
                        <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                            <div class="single-product-wrapper">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <img src="{{asset('/templates/amado-master/img/product-img/product3.jpg')}}" alt="">
                                    <!-- Hover Thumb -->
                                    <img class="hover-img"
                                         src="{{asset('/templates/amado-master/img/product-img/product4.jpg')}}'"
                                         alt="">
                                </div>

                                <!-- Product Description -->
                                <div class="product-description d-flex align-items-center justify-content-between">
                                    <!-- Product Meta Data -->
                                    <div class="product-meta-data">
                                        <div class="line"></div>
                                        <p class="product-price">$180</p>
                                        <a href="product-details.html">
                                            <h6>Modern Chair</h6>
                                        </a>
                                    </div>
                                    <!-- Ratings & Cart -->
                                    <div class="ratings-cart text-right">
                                        <div class="ratings">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <div class="cart">
                                            <a href="cart.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Cart"><img
                                                        src="{{asset('/templates/amado-master/img/core-img/cart.png')}}"
                                                        alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product Area -->
                        <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                            <div class="single-product-wrapper">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <img src="{{asset('/templates/amado-master/img/product-img/product4.jpg')}}" alt="">
                                    <!-- Hover Thumb -->
                                    <img class="hover-img"
                                         src="{{asset('/templates/amado-master/img/product-img/product5.jpg')}}" alt="">
                                </div>

                                <!-- Product Description -->
                                <div class="product-description d-flex align-items-center justify-content-between">
                                    <!-- Product Meta Data -->
                                    <div class="product-meta-data">
                                        <div class="line"></div>
                                        <p class="product-price">$180</p>
                                        <a href="product-details.html">
                                            <h6>Modern Chair</h6>
                                        </a>
                                    </div>
                                    <!-- Ratings & Cart -->
                                    <div class="ratings-cart text-right">
                                        <div class="ratings">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <div class="cart">
                                            <a href="cart.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Cart"><img
                                                        src="{{asset('/templates/amado-master/img/core-img/cart.png')}}"
                                                        alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product Area -->
                        <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                            <div class="single-product-wrapper">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <img src="{{asset('/templates/amado-master/img/product-img/product5.jpg')}}" alt="">
                                    <!-- Hover Thumb -->
                                    <img class="hover-img"
                                         src="{{asset('/templates/amado-master/img/product-img/product6.jpg')}}" alt="">
                                </div>

                                <!-- Product Description -->
                                <div class="product-description d-flex align-items-center justify-content-between">
                                    <!-- Product Meta Data -->
                                    <div class="product-meta-data">
                                        <div class="line"></div>
                                        <p class="product-price">$180</p>
                                        <a href="product-details.html">
                                            <h6>Modern Chair</h6>
                                        </a>
                                    </div>
                                    <!-- Ratings & Cart -->
                                    <div class="ratings-cart text-right">
                                        <div class="ratings">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <div class="cart">
                                            <a href="cart.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Cart"><img
                                                        src="{{asset('/templates/amado-master/img/core-img/cart.png')}}"
                                                        alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product Area -->
                        <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                            <div class="single-product-wrapper">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <img src="{{asset('/templates/amado-master/img/product-img/product6.jpg')}}" alt="">
                                    <!-- Hover Thumb -->
                                    <img class="hover-img"
                                         src="{{asset('/templates/amado-master/img/product-img/product1.jpg')}}" alt="">
                                </div>

                                <!-- Product Description -->
                                <div class="product-description d-flex align-items-center justify-content-between">
                                    <!-- Product Meta Data -->
                                    <div class="product-meta-data">
                                        <div class="line"></div>
                                        <p class="product-price">$180</p>
                                        <a href="product-details.html">
                                            <h6>Modern Chair</h6>
                                        </a>
                                    </div>
                                    <!-- Ratings & Cart -->
                                    <div class="ratings-cart text-right">
                                        <div class="ratings">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <div class="cart">
                                            <a href="cart.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Cart"><img
                                                        src="{{asset('/templates/amado-master/img/core-img/cart.png')}}"
                                                        alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <!-- Pagination -->
                            <nav aria-label="navigation">
                                <ul class="pagination justify-content-end mt-50">
                                    <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02.</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03.</a></li>
                                    <li class="page-item"><a class="page-link" href="#">04.</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
{{--        </div>--}}
{{--    </div>--}}


    {{--  <div class="features_items">--}}
    {{--    <h2 class="title text-center">{{ $title }}</h2>--}}

    {{--    @isset ($itemsList)--}}
    {{--      @if($itemsList->count())--}}
    {{--      <div class="item-folder">--}}
    {{--            @foreach ($itemsList as  $key => $item)--}}
    {{--            <div class="col-sm-3 col-xs-4">--}}
    {{--                <div class="item-folder-wrapper product-single">--}}
    {{--                  <div class="single-products">--}}
    {{--                    <div class="productinfo text-center product-box-{{ $item->id }}">--}}
    {{--                      <a href="{{ $item->getUrl() }}"><img src="{{ asset($item->getThumb()) }}" alt="{{ $item->title }}" /></a>--}}
    {{--                      <a href="{{ $item->getUrl() }}"><p>{{ $item->title }}</p></a>--}}
    {{--                    </div>--}}
    {{--                  </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            @endforeach--}}
    {{--        <div style="clear: both; ">--}}
    {{--          <ul class="pagination">--}}
    {{--            {{ $itemsList->appends(request()->except(['page','_token']))->links() }}--}}
    {{--          </ul>--}}
    {{--        </div>--}}
    {{--      </div>--}}
    {{--      @endif--}}
    {{--    @endisset--}}

    {{--      @if (count($products) ==0)--}}
    {{--        {{ trans('front.empty_product') }}--}}
    {{--      @else--}}
    {{--          @foreach ($products as  $key => $product)--}}
    {{--          <div class="col-sm-4 col-xs-6">--}}
    {{--              <div class="product-image-wrapper product-single">--}}
    {{--                <div class="single-products">--}}
    {{--                  <div class="productinfo text-center product-box-{{ $product->id }}">--}}
    {{--                    <a href="{{ $product->getUrl() }}"><img src="{{ asset($product->getThumb()) }}" alt="{{ $product->name }}" /></a>--}}

    {{--                    {!! $product->showPrice() !!}--}}

    {{--                    <a href="{{ $product->getUrl() }}"><p>{{ $product->name }}</p></a>--}}

    {{--                      @if ($product->allowSale())--}}
    {{--                       <a class="btn btn-default add-to-cart" onClick="addToCartAjax('{{ $product->id }}','default')">--}}
    {{--                         <i class="fa fa-shopping-cart"></i>{{trans('front.add_to_cart')}}--}}
    {{--                      </a>--}}
    {{--                      @else--}}
    {{--                        &nbsp;--}}
    {{--                      @endif--}}
    {{--                  </div>--}}
    {{--                      @if ($product->price != $product->getFinalPrice() && $product->kind != SC_PRODUCT_GROUP)--}}
    {{--                      <img src="{{ asset($templateFile.'/images/home/sale.png') }}" class="new" alt="" />--}}
    {{--                      @elseif($product->kind == SC_PRODUCT_BUILD)--}}
    {{--                      <img src="{{ asset($templateFile.'/images/home/bundle.png') }}" class="new" alt="" />--}}
    {{--                      @elseif($product->kind == SC_PRODUCT_GROUP)--}}
    {{--                      <img src="{{ asset($templateFile.'/images/home/group.png') }}" class="new" alt="" />--}}
    {{--                      @endif--}}
    {{--                </div>--}}
    {{--                <div class="choose">--}}
    {{--                  <ul class="nav nav-pills nav-justified">--}}
    {{--                    <li><a  onClick="addToCartAjax({{ $product->id }},'wishlist')"><i class="fa fa-plus-square"></i>{{trans('front.add_to_wishlist')}}</a></li>--}}
    {{--                    <li><a  onClick="addToCartAjax({{ $product->id }},'compare')"><i class="fa fa-plus-square"></i>{{trans('front.add_to_compare')}}</a></li>--}}
    {{--                  </ul>--}}
    {{--                </div>--}}
    {{--              </div>--}}
    {{--          </div>--}}
    {{--          @endforeach--}}
    {{--      @endif--}}

    {{--    <div style="clear: both; ">--}}
    {{--        <ul class="pagination">--}}
    {{--          {{ $products->appends(request()->except(['page','_token']))->links() }}--}}
    {{--      </ul>--}}
    {{--    </div>--}}
    {{--</div>--}}
@endsection


{{--@section('breadcrumb')--}}
{{--    <div class="breadcrumbs pull-left">--}}
{{--        <ol class="breadcrumb">--}}
{{--          <li><a href="{{ route('home') }}">{{ trans('front.home') }}</a></li>--}}
{{--          <li class="active">{{ $title }}</li>--}}
{{--        </ol>--}}
{{--      </div>--}}
{{--@endsection--}}

{{--@section('filter')--}}
{{--  <form action="" method="GET" id="filter_sort">--}}
{{--        <div class="pull-right">--}}
{{--        <div>--}}
{{--            @php--}}
{{--              $queries = request()->except(['filter_sort','page']);--}}
{{--            @endphp--}}
{{--            @foreach ($queries as $key => $query)--}}
{{--              <input type="hidden" name="{{ $key }}" value="{{ $query }}">--}}
{{--            @endforeach--}}
{{--          <select class="custom-select" name="filter_sort">--}}
{{--            <option value="">{{ trans('front.filters.sort') }}</option>--}}
{{--            <option value="price_asc" {{ ($filter_sort =='price_asc')?'selected':'' }}>{{ trans('front.filters.price_asc') }}</option>--}}
{{--            <option value="price_desc" {{ ($filter_sort =='price_desc')?'selected':'' }}>{{ trans('front.filters.price_desc') }}</option>--}}
{{--            <option value="sort_asc" {{ ($filter_sort =='sort_asc')?'selected':'' }}>{{ trans('front.filters.sort_asc') }}</option>--}}
{{--            <option value="sort_desc" {{ ($filter_sort =='sort_desc')?'selected':'' }}>{{ trans('front.filters.sort_desc') }}</option>--}}
{{--            <option value="id_asc" {{ ($filter_sort =='id_asc')?'selected':'' }}>{{ trans('front.filters.id_asc') }}</option>--}}
{{--            <option value="id_desc" {{ ($filter_sort =='id_desc')?'selected':'' }}>{{ trans('front.filters.id_desc') }}</option>--}}
{{--          </select>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--  </form>--}}

{{--@endsection--}}

@push('styles')
    {{-- style css --}}
@endpush

@push('scripts')
    <script type="text/javascript">
        $('[name="filter_sort"]').change(function (event) {
            $('#filter_sort').submit();
        });
    </script>
@endpush
