@extends('admin.admin')
@section('admin')

  <!-- Content Wrapper. Contains page content -->
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<!-- Main content -->
		<section class="content">
		  <div class="row">
			<div class="col-12">
			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Produkty</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Miniatura </th>
								<th>Nazwa produktu</th>
								<th>Ilość </th>
								<th>Cena </th>
								<th>Opcje</th>
							</tr>
						</thead>
						<tbody>
                            @foreach($products as $item)
                            <tr>
                                <td> <img src="{{ asset($item->product_thumbnail) }}" style="width: auto; height: 50px;">  </td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->count}}</td>
                                <td>{{ $item->selling_price }}</td>
                                <td>
                                    <a href="{{ route('product.edit',$item->id) }}" class="btn-sm btn btn-info" title="Edytuj"><i class="fa fa-pencil"></i> Edytuj</a>
                                    <a href="{{ route('product.delete',$item->id) }}" class="btn-sm btn btn-dark" title="Usuń" id="delete"><i class="fa fa-trash"></i> Usuń</a>
                                </td>
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
