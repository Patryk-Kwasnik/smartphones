@extends('admin.admin')
@section('admin')


	  <div class="container-full">
		<!-- Content Header (Page header) -->


		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Dodaj produkt </h4>

			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form novalidate>
					  <div class="row">
	<div class="col-12">	


		<div class="row"> <!-- start 1st row  -->
			<div class="col-md-4">

	 <div class="form-group">
	<h5>Marka <span class="text-danger">*</span></h5>
	<div class="controls">
		<select name="brand_id" class="form-control"  >
			<option value="" selected="" disabled="">Wybierz</option>
		</select>
		@error('brand_id') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	 </div>
		 </div>

			</div> <!-- end col md 4 -->

			<div class="col-md-4">

				 <div class="form-group">
	<h5>Model <span class="text-danger">*</span></h5>
	<div class="controls">
		<select name="category_id" class="form-control"  >
			<option value="" selected="" disabled="">Wybierz</option>

		</select>
		@error('category_id') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	 </div>
		 </div>

			</div> <!-- end col md 4 -->

		</div> <!-- end 1st row  -->


		<div class="form-group">
			<h5>Nazwa <span class="text-danger">*</span></h5>
			<div class="controls">
				<input type="email" name="email" class="form-control" required data-validation-required-message="This field is required"> </div>
		</div>

		<div class="form-group">
			<h5>Zdjęcie <span class="text-danger">*</span></h5>
			<div class="controls">
				<input type="file" name="file" class="form-control" required> </div>
		</div>



		<div class="form-group">
			<h5>Opis <span class="text-danger">*</span></h5>
			<div class="controls">
				<textarea name="textarea" id="textarea" class="form-control" required placeholder="Tekst"></textarea>
			</div>
		</div>
	</div>
  </div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				
				<div class="controls">
					<input type="checkbox" id="checkbox_1" required value="single">
					<label for="checkbox_1">Dostępny</label>
				</div>								
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				
				<div class="controls">
					<fieldset>
						<input type="checkbox" id="checkbox_2" required value="x">
						<label for="checkbox_2">Promocja</label>
					</fieldset>
					<fieldset>
						<input type="checkbox" id="checkbox_3" value="y">
						<label for="checkbox_3">Nowość</label>
					</fieldset>
				</div>
			</div>
		</div>
						</div>

						<div class="text-xs-right">
<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Dodaj produkt">
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>



@endsection 