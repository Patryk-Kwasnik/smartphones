@extends('frontend.main')
@section('content')

@section('title')
My Cart Page 
@endsection


<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>MyCart</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
        <div class="shopping-cart">
			<div class="row">
				<div class="shopping-cart-table">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="cart-img item">Zdjęcie</th>
					                <th class="cart-description item">Nazwa</th>
                                    <th class="cart-sub-total item">Razem</th>
					                <th class="cart-total last-item">Opcje</th>
                                </tr>
                            </thead>
                                <tbody id="cartPage">
                            </tbody>
                        </table>
                    </div>
                </div>			
            </div><!-- /.row -->		
        </div><!-- /.sigin-in-->
    </div>
    <br>
    @include('frontend.body.brands')
</div>
@endsection