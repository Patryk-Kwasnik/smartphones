@extends('admin.admin')
@section('admin')
    <div class="container-full">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Zamówienia</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Nr zamówienia</th>
                                        <th>Data </th>
                                        <th>Zamawiający</th>
                                        <th>Wartość </th>
                                        <th>Status </th>
                                        <th>Opcje</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $item)
                                        <tr>
                                            <td> {{ $item->nr_order }}  </td>
                                            <td> {{ $item->created_at }}  </td>
                                            <td> {{ $item->name }}  </td>
                                            <td> {{ $item->amount }}  </td>
                                            <td> <span class="badge badge-pill badge-primary">{{ $item->status }} </span>  </td>
                                            <td> <a href="{{ route('order.detail',$item->id) }}" class="btn btn-info btn-sm" title="Podgląd"><i class="fa fa-eye"></i> </a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection
