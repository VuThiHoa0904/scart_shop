<!--Footer-->

<!--Module top footer -->
  @isset ($blocksContent['footer'])
      @foreach ( $blocksContent['footer']  as $layout)
        @php
          $arrPage = explode(',', $layout->page)
        @endphp
        @if ($layout->page == '*' ||  (isset($layout_page) && in_array($layout_page, $arrPage)))
          @if ($layout->type =='html')
            {!! $layout->text !!}
          @elseif($layout->type =='view')
            @if (view()->exists('blockView.'.$layout->text))
             @include('blockView.'.$layout->text)
            @endif
          @endif
        @endif
      @endforeach
  @endisset
<!--//Module top footer -->

{{--  <footer id="footer"><!--Footer-->--}}
{{--    <div class="footer-widget">--}}
{{--      <div class="container">--}}
{{--        <div class="row">--}}
{{--          <div class="col-sm-3">--}}
{{--            <div class="single-widget">--}}
{{--              <h2><a href="{{ route('home') }}"><img style="max-width: 150px;" src="{{  asset(sc_store('logo')) }}"></a></h2>--}}
{{--             <ul class="nav nav-pills nav-stacked">--}}
{{--               <li>{{ sc_store('title') }}</li>--}}
{{--             </ul>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="col-sm-3">--}}
{{--            <div class="single-widget">--}}
{{--              <h2>{{ trans('front.my_account') }}</h2>--}}
{{--              <ul class="nav nav-pills nav-stacked">--}}
{{--                @if (!empty($layoutsUrl['footer']))--}}
{{--                  @foreach ($layoutsUrl['footer'] as $url)--}}
{{--                    <li><a {{ ($url->target =='_blank')?'target=_blank':''  }} href="{{ sc_url_render($url->url) }}">{{ sc_language_render($url->name) }}</a></li>--}}
{{--                  @endforeach--}}
{{--                @endif--}}
{{--              </ul>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="col-sm-3">--}}
{{--            <div class="single-widget">--}}
{{--              <h2>{{ trans('front.about') }}</h2>--}}
{{--              <ul class="nav nav-pills nav-stacked">--}}
{{--                <li><a href="#">{{ trans('front.shop_info.address') }}: {{ sc_store('address') }}</a></li>--}}
{{--                <li><a href="#">{{ trans('front.shop_info.hotline') }}: {{ sc_store('long_phone') }}</a></li>--}}
{{--                <li><a href="#">{{ trans('front.shop_info.email') }}: {{ sc_store('email') }}</a></li>--}}
{{--            </ul>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="col-sm-3">--}}
{{--            <div class="single-widget">--}}
{{--              <h2>{{ trans('front.subscribe.title') }}</h2>--}}
{{--              <form action="{{ route('subscribe') }}" method="post" class="searchform">--}}
{{--                @csrf--}}

{{--                <input type="email" name="subscribe_email" required="required" placeholder="{{ trans('front.subscribe.subscribe_email') }}">--}}
{{--                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>--}}
{{--                <p>{{ trans('front.subscribe.subscribe_des') }}</p>--}}
{{--              </form>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}

{{--    <div class="footer-bottom">--}}
{{--      <div class="container">--}}
{{--        <div class="row">--}}
{{--          <p class="pull-left">Copyright © {{date('Y')}} <a href="{{ route('home') }}">{{ sc_store('title') }} </a> Inc. All rights reserved.</p>--}}
{{--          <p class="pull-right">Power by <a href="{{ config('scart.homepage') }}">{{ config('scart.name') }} {{ config('scart.version') }}</a>. Hosted by  <span><a target="_blank" href="https://giaiphap247.com">GiaiPhap247</a></span></p>--}}
{{--            <!----}}
{{--            S-Cart is free open source and you are free to remove the powered by S-cart if you want, but its generally accepted practise to make a small donation.--}}
{{--            Please donate via PayPal to https://www.paypal.me/LeLanh or Email: fastle.ktc@gmail.com--}}
{{--            //-->--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </footer>--}}




{{--new footer--}}

<!-- ##### Newsletter Area Start ##### -->
<section class="newsletter-area section-padding-100-0">
  <div class="container">
    <div class="row align-items-center">
      <!-- Newsletter Text -->
      <div class="col-12 col-lg-6 col-xl-7">
        <div class="newsletter-text mb-100">
          <h2>Subscribe for a <span>25% Discount</span></h2>
          <p>Nulla ac convallis lorem, eget euismod nisl. Donec in libero sit amet mi vulputate consectetur. Donec auctor interdum purus, ac finibus massa bibendum nec.</p>
        </div>
      </div>
      <!-- Newsletter Form -->
      <div class="col-12 col-lg-6 col-xl-5">
        <div class="newsletter-form mb-100">
          <form action="#" method="post">
            <input type="email" name="email" class="nl-email" placeholder="Your E-mail">
            <input type="submit" value="Subscribe">
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ##### Newsletter Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer_area clearfix">
  <div class="container">
    <div class="row align-items-center">
      <!-- Single Widget Area -->
      <div class="col-12 col-lg-4">
        <div class="single_widget_area">
          <!-- Logo -->
          <div class="footer-logo mr-50">
            <a href="index.html"><img src="{{asset('/templates/amado-master/img/core-img/logo2.png')}}" alt=""></a>
          </div>
          <!-- Copywrite Text -->
          <p class="copywrite"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> & Re-distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
      </div>
      <!-- Single Widget Area -->
      <div class="col-12 col-lg-8">
        <div class="single_widget_area">
          <!-- Footer Menu -->
          <div class="footer_menu">
            <nav class="navbar navbar-expand-lg justify-content-end">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
              <div class="collapse navbar-collapse" id="footerNavContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="shop.html">Shop</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="product-details.html">Product</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="cart.html">Cart</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="checkout.html">Checkout</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- ##### Footer Area End ##### -->
<!--//Footer-->
