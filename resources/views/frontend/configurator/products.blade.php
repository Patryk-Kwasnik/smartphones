<div class="container_configurator">
    <a href="/configurator" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Skonfiguruj ponownie</a>
    @if($productsCount == 0)
        <h3>Niestety nie mamy produtków spełniających podane kryteria</h3>
    @else

    <h3>Propozycje dla Ciebie:</h3>
    <div class="box_configurator">
        @foreach($products as $product)
            <div class="box_item">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image"> <a href="{{ url('product/details/'.$product->id.'/'.$product->slug ) }}"><img  src="{{ asset($product->product_thumbnail) }}" alt=""></a> </div>
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
    @endif
    <!-- /.products -->
</div>
