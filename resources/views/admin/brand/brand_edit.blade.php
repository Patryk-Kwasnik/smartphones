@extends('admin.admin')
@section('admin')

	  <div class="container-full">
	
		<!-- Main content -->
		<section class="content">
			<!-- /.col -->
            <div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Edytuj producenta</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
                        <form action="{{ route('brand.update') }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="{{ $brand->id }}">
                        <input type="hidden" name="old_image" value="{{ $brand->image }}">

                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName">Nazwa</label>
                                <input type="text" name="name" class="form-control" id="exampleInputName" value="{{ $brand->name }}">
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

                            <input type="submit" class="btn btn-primary btn-rounded mb-5" value="Aktualizuj"></button>
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