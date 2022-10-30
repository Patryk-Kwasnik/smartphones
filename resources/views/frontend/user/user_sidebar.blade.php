@php
    $id = Auth::user()->id;
    $user = App\Models\User::find($id);
@endphp
<div class="col-md-2"><br>
    <ul class="list-group list-group-flush">
        <a href="{{ route('user.profile') }}" class="btn btn-primary btn-sm btn-block">Edycja profilu</a>
        <a href="{{ route('change.password') }}" class="btn btn-primary btn-sm btn-block">Zmień hasło</a>
        <a href="{{ route('my.orders') }}" class="btn btn-primary btn-sm btn-block">Moje zamówienia</a>
        <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Wyloguj</a>
    </ul>
</div>
