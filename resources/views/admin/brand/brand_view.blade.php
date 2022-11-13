@extends('admin.admin')
@section('admin')

	  <div class="container-full">

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			<div class="col-8">
			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Producenci</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Nazwa</th>
								<th>Slug</th>
								<th>Zdjęcie</th>
								<th>Opcje</th>
							</tr>
						</thead>
						<tbody>
                            @foreach($brands as $row)
							<tr>
								<td class="text-center">{{ $row->name }}</td>
								<td class="text-center">{{ $row->slug }}</td>
								<td class="text-center"> @if($row->image) <img src = "{{ asset ($row->image) }}" style ="width:70px;">@endif </td>
                                <td class="text-center">
									<a href =" {{ route('brand.edit', $row->id) }}" class= "btn-sm btn btn-info"> <i class="fa fa-pencil"></i> Edytuj </a>
									<a href =" {{ route('brand.delete', $row->id) }}" class= "btn-sm btn btn-dark" id="delete"><i class="fa fa-trash"></i> Usuń </a>
								</td>
							</tr>
							@endforeach
						</tbody>
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			</div>
			<!-- /.col -->
            <div class="col-4">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Dodaj producenta</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
                        <form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName">Nazwa</label>
                                <input type="text" name="name" class="form-control" id="exampleInputName">
                                    @error('name')
                                        <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputImage">Zdjęcie</label>
                                <input type="file" name="image" class="form-control" id="exampleInputImage">

                                    @error('image')
                                        <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                            </div>

                            <input type="submit" class="btn btn-primary btn-rounded mb-5"></button>
                        </form>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			</div>
			<!-- /.col -->
		  </div>
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->

	  </div>
@endsection
