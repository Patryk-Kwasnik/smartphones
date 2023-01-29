@extends('frontend.main')
@section('content')
    <div class="body-content">
        <div class="container">
            <div class="row">
                @include('frontend.user.user_sidebar')
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header"><h4>Informacje o zamówieniu</h4></div>
                        <hr>
                        <div class="card-body">
                            <table class="table table-striped table-bordered table-sm">
                                <tr>
                                    <th> Telefon: </th>
                                    <th> {{ $order->phone }} </th>
                                </tr>
                                <tr>
                                    <th>  Adres Email: </th>
                                    <th> {{ $order->email }} </th>
                                </tr>
                                <tr>
                                    <th> Miejscowość: </th>
                                    <th> {{ $order->city }} </th>
                                </tr>
                                <tr>
                                    <th> Kod pocztowy: </th>
                                    <th> {{ $order->post_code }} </th>
                                </tr>
                                <tr>
                                    <th> Ulica: </th>
                                    <th> {{ $order->street }} </th>
                                </tr>
                                <tr>
                                    <th> Data zamówienia: </th>
                                    <th> {{ $order->created_at }} </th>
                                </tr>
                                <tr>
                                    <th> Wartość zamówienia: </th>
                                    <th> {{ $order->amount }} zł </th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div> <!-- // end col md -5 -->
                <!--produkty-->
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            <tr style="background: #e2e2e2;">
                                <td class="col-md-1">
                                    <label for=""> Zdjęcie</label>
                                </td>
                                <td class="col-md-3">
                                    <label for=""> Nazwa produktu </label>
                                </td>
                                <td class="col-md-2">
                                    <label for=""> Kolor </label>
                                </td>
                                <td class="col-md-1">
                                    <label for=""> Ilość </label>
                                </td>
                                <td class="col-md-1">
                                    <label for=""> Cena </label>
                                </td>
                            </tr>
                            @foreach($orderItem as $item)
                                <tr>
                                    <td class="col-md-1">
                                        <label for=""><img src="{{ asset($item->product->product_thumbnail) }}" height="50px;" width="50px;"> </label>
                                    </td>
                                    <td class="col-md-3">
                                        <label for=""> {{ $item->product->name }}</label>
                                    </td>
                                    <td class="col-md-2">
                                        <label for=""> {{ $item->color }}</label>
                                    </td>
                                    <td class="col-md-2">
                                        <label for=""> {{ $item->count }}</label>
                                    </td>
                                    <td class="col-md-2">
                                        <label for=""> {{ $item->price }}zł  (  {{ $item->price * $item->count}} zł ) </label>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> <!-- / end col md 8 -->
            </div> <!-- // END ORDER ITEM ROW -->
        </div>
    </div>
@endsection
