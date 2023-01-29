@extends('frontend.main')
@section('content')
<div class="body-content outer-top-xs" id="top-banner-and-menu">
  <div class="container">
    <div class="row">
      <!-- ============================================== SIDEBAR ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

        <!-- ================================== TOP NAVIGATION ================================== -->
        <div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Marki</div>
          <nav class="yamm megamenu-horizontal">
          @php
          $brands = App\Models\Brand::orderBy('name','ASC')->get();
          @endphp
            <ul class="nav">
            @foreach($brands as $brand)
              <li class="dropdown menu-item">
                <a href="{{ url('brands/'.$brand->id.'/'.$brand->slug ) }}" class="dropdown-toggle">{{ $brand->name}}</a>
               </li>
            @endforeach
              <!-- /.menu-item -->

                <!-- ================================== MEGAMENU VERTICAL ================================== --> </li>
            </ul>
            <!-- /.nav -->
          </nav>
          <!-- /.megamenu-horizontal -->
        </div>
        <!-- /.side-menu -->
        <!-- ================================== TOP NAVIGATION : END ================================== -->

        <!-- ============================================== HOT DEALS ============================================== -->
        <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
          <h3 class="section-title">Gorąca oferta</h3>
          <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
          @foreach($hot_deals as $hot_deal)
            <div class="item">
              <div class="product">
                <div class="hot-deal-wrapper">
                    <div class="image"> <a href="{{ url('product/details/'.$hot_deal->id.'/'.$hot_deal->slug ) }}"><img  src="{{ asset($hot_deal->product_thumbnail) }}" alt=""></a> </div>
                </div>
                <!-- /.hot-deal-wrapper -->
                <div class="product-info text-left m-t-20">
                    <h3 class="name"><a href="{{ url('product/details/'.$hot_deal->id.'/'.$hot_deal->slug ) }}"> {{ $hot_deal->name }}</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="product-price"> <span class="price"> {{ $hot_deal->selling_price }} zł </span> </div>                  <!-- /.product-price -->
                </div>
                  <div class="cart clearfix animate-effect">
                      <div class="action">
                          <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                  <button type="submit" onclick="addToCart(this)" data-toggle="tooltip" data-idProduct="{{ $hot_deal->id }}" data-nameProduct="{{ $hot_deal->name }}" class="btn btn-primary icon"title="Dodaj do koszyka"> <i class="fa fa-shopping-cart"></i> </button>
                                  <input type="hidden" id="product_id" value="{{ $hot_deal->id }}" min="1">
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
            </div>
          @endforeach
          </div>
          <!-- /.sidebar-widget -->
        </div>
        <!-- ============================================== HOT DEALS: END ============================================== -->

        <div class="home-banner">  </div>
      </div>
      <!-- /.sidemenu-holder -->
      <!-- ============================================== SIDEBAR : END ============================================== -->

      <!-- ============================================== CONTENT ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
        <!-- ========================================== SECTION – HERO ========================================= -->

        <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
            <div class="item" style='background-image: url({{ asset("frontend/assets/images/sliders/smartphone.jpg") }});'>
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1">Polecamy</div>
                  <div class="big-text fadeInDown-1"> Konfigurator smartfonów </div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span>Nie możesz sie zdecydować? Skorzystaj z naszego konifguratora. Z nim wybór staje się prostszy.</span> </div>
                  <div class="button-holder fadeInDown-3"> <a href="/configurator" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Przejdź</a> </div>
                </div>
                <!-- /.caption -->
              </div>
              <!-- /.container-fluid -->
            </div>
            <!-- /.item -->

          </div>
          <!-- /.owl-carousel -->
        </div>

        <!-- ========================================= SECTION – HERO : END ========================================= -->

        <!-- ============================================== INFO BOXES ============================================== -->
        <div class="info-boxes wow fadeInUp">
          <div class="info-boxes-inner">
            <div class="row">
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">zwrot pieniędzy</h4>
                    </div>
                  </div>
                  <h6 class="text">Zwrot pieniędzy w przypadku niezadowolenia z produktu</h6>
                </div>
              </div>
              <!-- .col -->

              <div class="hidden-md col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">Darmowa dostawa</h4>
                    </div>
                  </div>
                  <h6 class="text">Darmowa dostawa dla zamówień powyżej 200zł</h6>
                </div>
              </div>
              <!-- .col -->

              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">Specjalna okazja</h4>
                    </div>
                  </div>
                  <h6 class="text">5% zniżki na pierwsze zakupy </h6>
                </div>
              </div>
              <!-- .col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.info-boxes-inner -->

        </div>
        <!-- /.info-boxes -->
        <!-- ============================================== INFO BOXES : END ============================================== -->
        <!-- ============================================== SCROLL TABS ============================================== -->
        <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
          <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left">Nowość</h3>

            <!-- /.nav-tabs -->
          </div>
          <div class="tab-content outer-top-xs">
            <div class="tab-pane in active" id="all">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                @foreach($products as $product)
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                            <div class="image"> <a href="{{ url('product/details/'.$product->id.'/'.$product->slug ) }}"><img  src="{{ asset($product->product_thumbnail) }}" alt=""></a> </div>
                            <div class="tag new"><span>nowość</span></div>
                        </div>
                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{ url('product/details/'.$product->id.'/'.$product->slug ) }}"> {{ $product->name }}</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> {{ $product->selling_price }} zł </span> </div>
                          <!-- /.product-price -->
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button type="submit" onclick="addToCart(this)" data-toggle="tooltip" data-idProduct="{{ $product->id }}" data-nameProduct="{{ $product->name }}" class="btn btn-primary icon"title="Dodaj do koszyka"> <i class="fa fa-shopping-cart"></i> </button>
                                <input type="hidden" id="product_id" value="{{ $product->id }}" min="1">
                              </li>
                            </ul>
                          </div>
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                  @endforeach
                  <!-- /.item -->


                    </div>
                    <!-- /.products -->
                  </div>
                  <!-- /.item -->
                </div>
                <!-- /.home-owl-carousel -->
              </div>
              <!-- /.product-slider -->
            </div>
          </div>
          <!-- /.tab-content -->
        </div>
        <!-- /.scroll-tabs -->
        <!-- ============================================== SCROLL TABS : END ============================================== -->
        <!-- ============================================== WIDE PRODUCTS ============================================== -->
        <div class="wide-banners wow fadeInUp outer-bottom-xs">
          <div class="row">
            <div class="col-md-7 col-sm-7">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="assets/images/banners/home-banner1.jpg" alt=""> </div>
              </div>
              <!-- /.wide-banner -->
            </div>
            <!-- /.col -->
            <div class="col-md-5 col-sm-5">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="assets/images/banners/home-banner2.jpg" alt=""> </div>
              </div>
              <!-- /.wide-banner -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.wide-banners -->
      </div>
      <!-- /.homebanner-holder -->
      <!-- ============================================== CONTENT : END ============================================== -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</div>
@endsection
