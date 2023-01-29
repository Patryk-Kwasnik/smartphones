<!DOCTYPE html>
<html lang="en">
	<head>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="MediaCenter, Template, eCommerce">
<meta name="robots" content="all">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<title>Smartphones</title>

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">

<!-- Customizable CSS -->
<link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/blue.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/owl.transitions.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/rateit.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap-select.min.css')}}">
<link href="{{asset('frontend/assets/css/lightbox.css')}}" rel="stylesheet">

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="{{asset('frontend/assets/css/font-awesome.css')}}">

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
    <body class="cnt-home">
		<!-- ============================================== HEADER ============================================== -->
@include('frontend.body.header')

<!-- ===== ======== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li><a href="#">{{ $brand->name }}</a></li>
				<li class='active'>{{ $product->name }}</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row single-product'>
			<div class='col-md-3 sidebar'>
				<div class="sidebar-module-container">
				<div class="home-banner outer-top-n">
</div>
    	<!-- ============================================== HOT DEALS ============================================== -->
<div class="sidebar-widget hot-deals wow fadeInUp outer-top-vs">
	<h3 class="section-title">Gorące okazje</h3>
	<div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-xs">

				<div class="item">
					<div class="products">
						<div class="hot-deal-wrapper">
                        <div class="image"> <a href="detail"><img  src="{{asset('frontend/assets/images/products/a40.jpg')}}" alt=""></a> </div>

							<div class="sale-offer-tag"><span>35%<br>off</span></div>

						</div><!-- /.hot-deal-wrapper -->

						<div class="product-info text-left m-t-20">
							<h3 class="name"><a href="{{ url('product/details/'.$product->id.'/'.$product->slug ) }}"> {{ $product->name }}</a></h3>
							<div class="rating rateit-small"></div>

							<div class="product-price">
								<span class="price">
                                    {{ $product->selling_price }} zł
								</span>
							</div><!-- /.product-price -->

						</div><!-- /.product-info -->

						<div class="cart clearfix animate-effect">
							<div class="action">

								<div class="add-cart-button btn-group">
									<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
										<i class="fa fa-shopping-cart"></i>
									</button>
									<button class="btn btn-primary cart-btn" type="button">Dodaj do koszyka</button>

								</div>

							</div><!-- /.action -->
						</div><!-- /.cart -->
					</div>


					</div>


    </div><!-- /.sidebar-widget -->
</div>
<!-- ============================================== HOT DEALS: END ============================================== -->

				</div>
			</div><!-- /.sidebar -->
			<div class='col-md-9'>
            <div class="detail-block">
				<div class="row  wow fadeInUp">

            <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
    <div class="product-item-holder size-big single-product-gallery small-gallery">

        <div id="owl-single-product">
			@foreach($productImg as $img)
				<div class="single-product-gallery-item" id="slide{{ $img->id }}">
					<a data-lightbox="image-1" data-title="Gallery" href="{{ asset($img->name ) }} ">
						<img class="img-responsive" alt="" src="{{ asset($img->name ) }} " data-echo="{{ asset($img->name ) }} " />
					</a>
				</div><!-- /.single-product-gallery-item -->
            @endforeach

        </div><!-- /.single-product-slider -->


        <div class="single-product-gallery-thumbs gallery-thumbs">

            <div id="owl-single-product-thumbnails">
            @foreach($productImg as $img)
                <div class="item">
                    <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide{{ $img->id }}">
                        <img class="img-responsive" width="85" alt="" src="{{ asset($img->name ) }}" data-echo="{{ asset($img->name ) }}" />
                    </a>
                </div>

            @endforeach
            </div><!-- /#owl-single-product-thumbnails -->



        </div><!-- /.gallery-thumbs -->

    </div><!-- /.single-product-gallery -->
</div><!-- /.gallery-holder -->
					<div class='col-sm-6 col-md-7 product-info-block'>
						<div class="product-info">
							<h1 class="name" id="pname" >{{ $product->name }}</h1>

							<div class="rating-reviews m-t-20">
								<div class="row">
									<div class="col-sm-3">
										<div class="rating rateit-small"></div>
									</div>
									<div class="col-sm-8">
										<div class="reviews">
											<a href="#" class="lnk">(13 Opini)</a>
										</div>
									</div>
								</div><!-- /.row -->
							</div><!-- /.rating-reviews -->
							<div class="description-container m-t-20">
                                <strong>Informacje podstawowe</strong><hr>
                               Kolor: <span>{{ $product->color }}</span><br>
                                Wielkość ekranu: <span>{{ $product->size_screen }}</span><br>
                                Zegar procesora (GHz): <span>{{ $product->cpu_clock }}</span><br>
                                Pamięc ram (GB): <span>{{ $product->ram }}</span><br>
                                Aparat(mpx): <span>{{ $product->camera_mpx }}</span><br>
                                Pojemność bateri (mAh): <span>{{ $product->battery_capacity }}</span><br>
							</div><!-- /.description-container -->

							<div class="price-container info-container m-t-20">
								<div class="row">


									<div class="col-sm-6">
										<div class="price-box">
											<span class="price">{{ $product->selling_price }} zł</span>

										</div>
									</div>

									<div class="col-sm-6">

									</div>

								</div><!-- /.row -->
							</div><!-- /.price-container -->

							<div class="quantity-container info-container">
								<div class="row">

									<div class="col-sm-2">
										<span class="label">Ilość :</span>
									</div>

									<div class="col-sm-2">
										<div class="cart-quantity">
											<div class="quant-input">
								                <div class="arrows">
								                  <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
								                  <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
								                </div>
												<input type="text" id="qty" value="1" min="1">
							              </div>
							            </div>
									</div>
									<input type="hidden" id="product_id" value="{{ $product->id }}" min="1">
									<div class="col-sm-7">
										<button type="submit" onclick="addToCart()" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> Dodaj do koszyka</button>
									</div>


								</div><!-- /.row -->
							</div><!-- /.quantity-container -->

						</div><!-- /.product-info -->
					</div><!-- /.col-sm-7 -->
				</div><!-- /.row -->
                </div>

				<div class="product-tabs inner-bottom-xs  wow fadeInUp">
					<div class="row">
						<div class="col-sm-3">
							<ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
								<li class="active"><a data-toggle="tab" href="#description">Opis</a></li>
							</ul><!-- /.nav-tabs #product-tabs -->
						</div>
						<div class="col-sm-9">

							<div class="tab-content">

								<div id="description" class="tab-pane in active">
									<div class="product-tab">
										<p class="text">{{ $product->desc }}</p>
									</div>
								</div><!-- /.tab-pane -->

							</div><!-- /.tab-content -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.product-tabs -->

			</div><!-- /.col -->
			<div class="clearfix"></div>
		</div><!-- /.row -->


		<!-- ==== ================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider wow fadeInUp">

		<div class="logo-slider-inner">
			<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
				<div class="item m-t-15">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item m-t-10">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->
		    </div><!-- /.owl-carousel #logo-slider -->
		</div><!-- /.logo-slider-inner -->

</div><!-- /.logo-slider -->
<!-- == = BRANDS CAROUSEL : END = -->	</div><!-- /.container -->
</div><!-- /.body-content -->

<!-- ============================================================= FOOTER ============================================================= -->
@include('frontend.body.footer')
<!-- ============================================================= FOOTER : END============================================================= -->


	<!-- For demo purposes – can be removed on production -->


	<!-- For demo purposes – can be removed on production : End -->

	<!-- JavaScripts placed at the end of the document so the pages load faster -->
    <script src="{{asset('frontend/assets/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap-hover-dropdown.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/echo.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.easing-1.3.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap-slider.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.rateit.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/assets/js/lightbox.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/scripts.js')}}"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

	<script>
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
	function miniCart(){
        $.ajax({
            type: 'GET',
            url: '/product/mini/cart',
            dataType:'json',
            success:function(response){
				$('span[id="cartSubTotal"]').text(response.cartTotal);
                $('#cartQty').text(response.cartQty);
				var miniCart = ""
                $.each(response.carts, function(key,value){
                    miniCart += `<div class="cart-item product-summary">
					<div class="row">
						<div class="col-xs-4">
						<div class="image"> <a href="detail.html"><img src="/${value.options.image}" alt=""></a> </div>
						</div>
						<div class="col-xs-7">
						<h3 class="name"><a href="index.php?page-detail">${value.name}</a></h3>
						<div class="price"> ${value.price} * ${value.qty} </div>
						</div>
						<div class="col-xs-1 action">
          					<button type="submit" id="${value.rowId}" onclick="miniCartRemove(this.id)"><i class="fa fa-trash"></i></button> </div>
						</div>
					</div>
					<!-- /.cart-item -->
					<div class="clearfix"></div>
					<hr>`
                });

                $('#miniCart').html(miniCart);
            }
        })
     }
	 miniCart();
    function addToCart(){
        var product_name = $('#pname').text();
        var id = $('#product_id').val();
        var quantity = $('#qty').val();
        $.ajax({
            type: "POST",
            dataType: 'json',
            data:{
               quantity:quantity, product_name:product_name
            },
            url: "/cart/data/store/"+id,
            success:function(data){
                // Start Message
                const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      icon: 'success',
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
					miniCart()
                    Toast.fire({
                        type: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        title: data.error
                    })
                }
            }
        })
    }
	//czyszcenie koszyka
	function miniCartRemove(rowId){
        $.ajax({
            type: 'GET',
            url: '/minicart/product-remove/'+rowId,
            dataType:'json',
            success:function(data){
            miniCart();
             // Start Message
                const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      icon: 'success',
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        title: data.error
                    })
                }
            }
        });
    }
    </script>
</body>
</html>
