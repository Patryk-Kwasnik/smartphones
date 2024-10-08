@extends('frontend.main')
@section('content')
<div class="body-content">
    <div class="container">
        <div class="row">
            @include('frontend.user.user_sidebar')
            <div class="col-md-2">
            </div> <!-- // end col md 2 -->
            <div class="col-md-6">
                <div class="card">
                    <h3 class="text-center"><span class="text-danger">Witaj </span><strong>{{ Auth::user()->name }}</strong>  </h3>
                    <div class="card-body">
                        <form method="post" action="{{ route('user.profile.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Name <span> </span></label>
                                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Email <span> </span></label>
                                <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- // end col md 6 -->
        </div> <!-- // end row -->
    </div>
</div>
@endsection
