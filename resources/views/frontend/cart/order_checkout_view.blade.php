@extends('frontend.main')
@section('content')

@section('title')
My Checkout
@endsection

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Checkout</li>
			</ul>
		</div>
	</div>
</div>

<div class="body-content">
	<div class="container">
		<div class="checkout-box ">
			<div class="row">
				<div class="col-md-8">
					<div class="panel-group checkout-steps" id="accordion">
                        <div id="collapseOne" class="panel panel-default panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="row">
                                    <h4 class="checkout-subtitle"><b>Adres dostawy</b></h4>
                                    <form class="shipping-form" action="{{ route('addOrder') }}" method="POST">
                                        @csrf
                                        <div class="col-md-6 col-sm-6 already-registered-login">
                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputEmail1">Nazwa użytkownika <span>*</span></label>
                                                <input type="text" name="name" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="Full Name" value="{{ Auth::user()->name }}" required="">
                                            </div>
                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputEmail1">Email <span>*</span></label>
                                                <input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="Email" value="{{ Auth::user()->email }}" required="">
                                            </div>
                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputEmail1">Telefon <span>*</span></label>
                                                <input type="number" name="phone" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="Phone" value="{{ Auth::user()->phone }}" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 already-registered-login">
                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputStreet">Miasto <span>*</span></label>
                                                <input type="text" name="city" class="form-control unicase-form-control text-input" id="exampleInputStreet" placeholder="Miasto" required="">
                                            </div>
                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputStreet">Ulica <span>*</span></label>
                                                <input type="text" name="street" class="form-control unicase-form-control text-input" id="exampleInputStreet" placeholder="Ulica" required="">
                                            </div>
                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputStreet">Numer <span>*</span></label>
                                                <input type="text" name="number" class="form-control unicase-form-control text-input" id="exampleInputStreet" placeholder="Numer" required="">
                                            </div>
                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputEmail1">Kod pocztowy <span>*</span></label>
                                                <input type="text" name="post_code" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="Kod pocztowy" required="">
                                            </div>
                                        </div>
                                    <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Potwierdź zamówienie</button>
                                    </form>
                                </div>
                            </div>
                            <!-- panel-body  -->
                        </div><!-- row -->
					</div>
				</div>
				<div class="col-md-4">
					<!-- checkout-progress-sidebar -->
<div class="checkout-progress-sidebar ">
	<div class="panel-group">
		<div class="panel panel-default">
			<div class="panel-heading">
		    	<h4 class="unicase-checkout-title">Your Checkout Progress</h4>
		    </div>
		    <div class="">
				<ul class="nav nav-checkout-progress list-unstyled">

					@foreach($carts as $item)
					<li>
						<strong>Image: </strong>
						<img src="{{ asset($item->options->image) }}" style="height: 50px; width: 50px;">
					</li>

					<li>
						<strong>Qty: </strong>
						 ( {{ $item->qty }} )

						 <strong>Color: </strong>
						 {{ $item->options->color }}

						 <strong>Size: </strong>
						 {{ $item->options->size }}
					</li>
                    @endforeach
<hr>
		 <li>
            <strong>SubTotal: </strong> ${{ $cartTotal }} <hr>
            <strong>Grand Total : </strong> ${{ $cartTotal }} <hr>
		 </li>

				</ul>
			</div>
		</div>
	</div>
</div>
<!-- checkout-progress-sidebar -->				</div>
			</div><!-- /.row -->
		</div><!-- /.checkout-box -->
		<!-- === ===== BRANDS CAROUSEL ==== ======== -->
<!-- ===== == BRANDS CAROUSEL : END === === -->
</div><!-- /.container -->
</div><!-- /.body-content -->

@endsection
