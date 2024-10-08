@extends('frontend.main')
@section('content')

    <div class="body-content">
        <div class="container">
            <div class="row">
                @include('frontend.user.user_sidebar')
                <div class="col-md-2">
                </div>
                <div class="col-md-8"><br>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr style="background: #e2e2e2;">
                                <td class="col-md-1">
                                    <label for=""> Data</label>
                                </td>
                                <td class="col-md-3">
                                    <label for=""> Wartość zamówienia</label>
                                </td>
                                <td class="col-md-2">
                                    <label for=""> Status</label>
                                </td>
                                <td class="col-md-1">
                                    <label for=""> Opcje </label>
                                </td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td class="col-md-1">
                                        <label for=""> {{ $order->created_at }}</label>
                                    </td>

                                    <td class="col-md-3">
                                        <label for=""> {{ $order->amount }} zł</label>
                                    </td>
                                    <td class="col-md-2">
                                        <label for="">
                                            <span class="badge badge-pill badge-warning" style="background: #800080;"> {{$order->status}} </span>
                                        </label>
                                    </td>
                                    <td class="col-md-1">
                                        <a href="{{ url('user/order_details/'.$order->id ) }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> Podgląd</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> <!-- / end col md 8 -->
            </div> <!-- // end row -->
        </div>
    </div>
@endsection
