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
                     <form method="POST" action="{{ route('product-save') }}" enctype="multipart/form-data" >
                     @csrf
	                    <div class="col-12">	

		                <div class="row"> <!-- start 1st row  -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Wybierz producenta <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="brand_id" class="form-control">
                                        <option value="" selected="" disabled="">Wybierz producenta</option>
                                            @foreach($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>	
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
                                        <input type="text" name="name" class="form-control" required data-validation-required-message="To pole jest wymagane"> </div>
                                </div> 
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Kod produktu <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="product_code" class="form-control" required data-validation-required-message="To pole jest wymagane"> </div>
                                </div> 
                            </div>
                        </div>
                        <div class="row"> <!-- start 2t row  -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Kolor <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="product_color" class="form-control" required data-validation-required-message="To pole jest wymagane"> </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Cena <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="number" name="selling_price" class="form-control" required data-validation-required-message="To pole jest wymagane">
                                </div>
                            </div>
                        </div></div>
                        <!-- end 2t row  -->
                        <div class="row"> <!-- start 2t row  -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Opis <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <textarea name="desc" id="textarea" class="form-control" required placeholder="Textarea text"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end 2t row  -->
                        <div class="row"> <!-- start 3t row  -->
                             <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Główne zdjęcie <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="file" name="product_thumbnail" class="form-control"  onChange="mainThamUrl(this)" required data-validation-required-message="To pole jest wymagane"> </div>
                                        <img src="" id="mainThmb" style= "object-fit:contain">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Zdjęcia <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="file" name="product_img[]" class="form-control" multiple="" id="multiImg" > </div>
                                        <div class="row" id="preview_img"></div>
                                </div>
                            </div>
                        </div>
                           
	                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="controls">
                                <fieldset>
                                    <input type="checkbox" id="checkbox_2" name="hot_deals" value="1">
                                    <label for="checkbox_2">Gorąca oferta</label>
                                </fieldset>
                                <fieldset>
                                    <input type="checkbox" id="checkbox_3" name="featured" value="1">
                                    <label for="checkbox_3">Polecany produkt</label>
                                </fieldset>
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