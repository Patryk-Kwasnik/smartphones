@extends('admin.admin')
@section('admin')
    <div class="container-full">
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Szczegóły zamówienia</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page">Zamówienie nr {{ $order->nr_order }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="box box-bordered border-primary">
                        <div class="box-header with-border">
                            <h4 class="box-title"><strong>Dostawa</strong> </h4>
                        </div>
                        <table class="table">
                            <tr>
                                <th> Shipping Name : </th>
                                <th> {{ $order->name }} </th>
                            </tr>

                            <tr>
                                <th> Telefon kontaktowy: </th>
                                <th> {{ $order->phone }} </th>
                            </tr>

                            <tr>
                                <th> Adres Email : </th>
                                <th> {{ $order->email }} </th>
                            </tr>
                            <tr>
                                <th> Miasto : </th>
                                <th>{{ $order->city }} </th>
                            </tr>
                            <tr>
                                <th> Kod pocztowy : </th>
                                <th> {{ $order->post_code }} </th>
                            </tr>
                            <tr>
                                <th> Ulica : </th>
                                <th> {{ $order->street }} </th>
                            </tr>
                            <tr>
                                <th> Nr : </th>
                                <th> {{ $order->nr }} </th>
                            </tr>
                        </table>
                    </div>
                </div> <!--  // cod md -6 -->
                <div class="col-md-6 col-12">
                    <div class="box box-bordered border-primary">
                        <div class="box-header with-border">
                            <h4 class="box-title"><strong>Zamówienie</strong><span class="text-danger"></span></h4>
                        </div>
                        <table class="table">
                            <tr>
                                <th>  Użytkownik : </th>
                                <th> {{ $order->user->name }} </th>
                            </tr>
                            <tr>
                                <th> Wartość zamówienia : </th>
                                <th>{{ $order->amount }} zł</th>
                            </tr>

                            <tr>
                                <th> Status : </th>
                                <th>
                                    <input type="hidden" id="id_order" value="{{ $order->id }}">
                                    <select name="status_order" id="status_order" class="form-control">
                                        <option value="" selected="" disabled="">Status</option>
                                            <option value="Nowe" {{ $order->status == 'Nowe' ? 'selected': '' }}>Nowe</option>
                                            <option value="W trakcie realizacji" {{ $order->status == 'W trakcie realizacji' ? 'selected': '' }}>W trakcie realizacji</option>
                                            <option value="Wysłane" {{ $order->status == 'Wysłane' ? 'selected': '' }}>Wysłane</option>
                                            <option value="Anulowane" {{ $order->status == 'Anulowane' ? 'selected': '' }}>Anulowane</option>
                                    </select>

                            </tr>
                        </table>
                    </div>
                </div> <!--  // cod md -6 -->
                <div class="col-md-12 col-12">
                    <div class="box box-bordered border-primary">
                        <div class="box-header with-border">
                        </div>
                        <table class="table">
                            <tbody>
                            <tr>
                                <td width="10%">
                                    <label for=""> Zdjęcie</label>
                                </td>
                                <td width="20%">
                                    <label for=""> Produkt</label>
                                </td>
                                <td width="10%">
                                    <label for=""> Kolor </label>
                                </td>
                                <td width="10%">
                                    <label for=""> Ilość </label>
                                </td>
                                <td width="10%">
                                    <label for=""> Cena </label>
                                </td>
                            </tr>

                            @foreach($orderItem as $item)
                                <tr>
                                    <td width="10%">
                                        <label for=""> @if(isset($item->product->product_thumbnail)) <img src="{{ asset($item->product->product_thumbnail) }}" height="50px;" width="50px;">@else - @endif </label>
                                    </td>
                                    <td width="20%">
                                        <label for=""> {{ $item->product->name }}</label>
                                    </td>
                                    <td width="10%">
                                        <label for=""> {{ $item->color }}</label>
                                    </td>
                                    <td width="10%">
                                        <label for=""> {{ $item->count }}</label>
                                    </td>
                                    <td width="10%">
                                        <label for=""> {{ $item->price }} zł  ( {{ $item->price * $item->count}} zł ) </label>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>  <!--  // cod md -12 -->
            </div>
            <!-- /. end row -->
        </section>
        <!-- /.content -->
    </div>


@endsection

