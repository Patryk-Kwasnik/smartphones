@extends('frontend.main')
@section('content')
<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
        <!-- ============================================== SIDEBAR ============================================== -->

        <div class='container' style="display:flex;">
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                <!-- ================================== TOP NAVIGATION ================================== -->
                <div class="side-menu animate-dropdown outer-bottom-xs">
                    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Marki</div>
                    <nav class="yamm megamenu-horizontal">
                        @php
                            $brands = App\Models\Brand::orderBy('name','ASC')->get();
                        @endphp
                        <ul class="nav">
                            @foreach($brands as $brand)
                                <li class="dropdown menu-item">
                                    <a href="{{ url('brands/'.$brand->id.'/'.$brand->slug ) }}" class="dropdown-toggle">{{ $brand->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                        <!-- /.nav -->
                    </nav>
                    <!-- /.megamenu-horizontal -->
                </div>
                <!-- ================================== TOP NAVIGATION : END ================================== -->
                <div class="home-banner">  </div>
            </div>
            <div class = "configurator_box">
                <h1>Konfigurator smartfonów</h1>

                <div class="configurator_items configurator_content_item" data-col="brand_id" data-step="1">
                    @foreach($brands as $brand)
                        <div class="configurator_item">
                            <label>
                                <img src = "{{ asset ($brand->image) }}" width="200">
                                <input class="select_item" type="radio" name="selected_brand" value="{{ $brand->id }}">
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

