@extends('admin.admin')
@section('admin')


<div class="container-full">
<!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Edytuj produkt </h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
                     <form method="post" action="{{ route('product-update') }}" >
                     @csrf
                     <input type="hidden" name="id" value="{{ $products->id }}">
	                    <div class="col-12">

		                <div class="row"> <!-- start 1st row  -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Wybierz producenta <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="brand_id" class="form-control">
                                        <option value="" selected="" disabled="">Wybierz producenta</option>
                                            @foreach($brands as $brand)
                                                <option value="{{ $brand->id }}" {{ $brand->id == $products->brand_id ? 'selected': '' }}>{{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('brand_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div> <!-- end col md 4 -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Nazwa <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="name" class="form-control" value="{{ $products->name }}" required data-validation-required-message="To pole jest wymagane"> </div>
                                </div>
                            </div>

                        </div>
                        <div class="row"> <!-- start 2t row  -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Kolor <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="color" class="form-control" value="{{ $products->color }}" required data-validation-required-message="To pole jest wymagane"> </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <h5>Wielkość ekranu <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="number" step="0.1" name="size_screen" class="form-control" value="{{ $products->size_screen }}" required data-validation-required-message="To pole jest wymagane"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="row"> <!-- start 3t row  -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>Cena <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="number" step="0.01" name="selling_price" class="form-control" value="{{ $products->selling_price }}" required data-validation-required-message="To pole jest wymagane">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>Ilość <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="number" name="count" class="form-control" value="{{ $products->count }}" required data-validation-required-message="To pole jest wymagane">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row"> <!-- start 3t row  -->
                        <div class="col-md-4">
                            <div class="form-group">
                            <h5>Ilość rdzeni <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="count_cores" class="form-control">

                                            <option value="1" {{$products->count_cores == '1' ? 'selected': '' }}>1</option>
                                            <option value="2" {{$products->count_cores == '2' ? 'selected': '' }}>2</option>
                                            <option value="4" {{$products->count_cores == '4' ? 'selected': '' }}>4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>Zegar procesora (GHz)<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="number" step="0.1" name="cpu_clock" class="form-control" value="{{ $products->cpu_clock }}" required data-validation-required-message="To pole jest wymagane"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="row"> <!-- start 3t row  -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>Pamięc ram (GB)<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="number" name="ram" class="form-control" value="{{ $products->ram }}" required data-validation-required-message="To pole jest wymagane"> </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>Główny apart- mpx <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="number" name="camera_mpx" class="form-control" value="{{ $products->camera_mpx }}" required data-validation-required-message="To pole jest wymagane"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="row"> <!-- start 3t row  -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>Wbudowana pamięć (GB)<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="number" name="memory" class="form-control" value="{{ $products->memory }}" required data-validation-required-message="To pole jest wymagane"> </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>Pojemność bateri (mAh)<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="number" name="battery_capacity" class="form-control" value="{{ $products->battery_capacity }}" required data-validation-required-message="To pole jest wymagane"> </div>
                            </div>
                        </div>
                    </div>
                        <!-- end 3t row  -->
                        <div class="row"> <!-- start 2t row  -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Opis <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <textarea name="desc" id="textarea" class="form-control" required placeholder="Textarea text"> 	{!! $products->desc !!}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end 2t row  -->

	                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="controls">
                                <fieldset>
                                    <input type="checkbox" id="checkbox_2" name="hot_deals" value="1" {{ $products->hot_deals == 1 ? 'checked': '' }}>
                                    <label for="checkbox_2">Gorąca oferta</label>
                                </fieldset>
                                <fieldset>
                                    <input type="checkbox" id="checkbox_3" name="featured" value="1"  {{ $products->featured == 1 ? 'checked': '' }}>
                                    <label for="checkbox_3">Polecany produkt</label>
                                </fieldset>
                            </div>
                        </div>

                    </div>
                    <div class="text-xs-right">
                        <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Aktualizuj produkt">
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
        <section class="content">
 	        <div class="row">
                <div class="col-md-12">
				    <div class="box bt-3 border-info p-3">
				        <div class="box-header">
		                    <h4 class="box-title">Miniaturka produktu</h4>
				        </div>
                        <form method="post" action="{{ route('update-product-thumbnail') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $products->id }}">
                        <input type="hidden" name="old_img" value="{{ $products->product_thumbnail }}">
			                <div class="row row-sm">
				                <div class="col-md-3">
                                    <div class="card">
                                        <img src="{{ asset($products->product_thumbnail) }}" class="card-img-top" style="height: 130px; width: 280px; object-fit: contain;">
                                            <div class="card-body">
                                                <p class="card-text">
                                                <div class="form-group">
                                                    <label class="form-control-label">Zmień zdjęcie <span class="tx-danger"></span></label>
                                                    <input type="file" name="product_thumbnail" class="form-control" onChange="mainThamUrl(this)"  >
                                                    <img src="" id="mainThmb" style ="object-fit: contain;">
                                                </div></p>
                                            </div>
                                    </div>
				                </div><!--  end col md 3		 -->
		                	</div>
		                <div class="text-xs-right">
                            <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Aktualizuj miniaturkę produktu">
                                </div>

                        </form>
                    </div>
                </div>
            </div> <!-- // end row  -->
        </section>
		<!-- ///////////////// Start Multiple Image Update Area ///////// -->

 <section class="content">
 	<div class="row">
        <div class="col-md-12">
			<div class="box bt-3 border-info p-3">
				<div class="box-header">
		            <h4 class="box-title">Zdjęcia produktu</h4>
				</div>
                <form method="post" action="{{ route('update-product-image') }}" enctype="multipart/form-data">
                @csrf
                    <div class="row row-sm">
                        @foreach($productImgs as $img)
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{ asset($img->name) }}" class="card-img-top" style="height: 130px; width: 280px; object-fit: contain;">
                                <div class="card-body">
                                    <h5 class="card-title">
                                       <a href="{{ route('product.multiimg.delete',$img->id) }}" class="btn btn-sm btn-danger" id="delete" title="Delete Data"><i class="fa fa-trash"></i>Usuń</a>
                                    </h5>
                                    <p class="card-text">
                                        <div class="form-group">
                                            <label class="form-control-label">Zmień zdjęcie <span class="tx-danger"></span></label>
                                            <input class="form-control" type="file" name="multi_img[{{ $img->id }}]">
                                        </div>
                                    </p>
                                </div>
                            </div>
				        </div><!--  end col md 3		 -->
				        @endforeach

			        </div>
                    <div class="text-xs-right">
                        <input type="submit" class="btn btn-rounded btn-primary mb-5 mt-3" value="Aktualizuj zdjęcie">
                    </div>

                </form>
            </div>
        </div>
 	</div> <!-- // end row  -->
 </section>
</div>

<script type="text/javascript">
	function mainThamUrl(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainThmb').attr('src',e.target.result).width(80).height(80);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}
</script>
<script>

  $(document).ready(function(){
   $('#multiImg').on('change', function(){ //on file input change
      if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
      {
          var data = $(this)[0].files; //this file data

          $.each(data, function(index, file){ //loop though each file
              if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                  var fRead = new FileReader(); //new filereader
                  fRead.onload = (function(file){ //trigger function on successful read
                  return function(e) {
                      var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(80)
                  .height(80); //create image element
                      $('#preview_img').append(img); //append image to output element
                  };
                  })(file);
                  fRead.readAsDataURL(file); //URL representing the file's data.
              }
          });

      }else{
          alert("Your browser doesn't support File API!"); //if File API is absent
      }
   });
  });

  </script>
@endsection
