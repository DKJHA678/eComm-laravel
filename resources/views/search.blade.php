@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-4">
        <a href=""> Filter</a>
    </div>
    <div class="col-sm-4">
        <div class="trainding-wrapping">
            <h3>Trainding Products</h3>
              @foreach($_Products as $item)
              <div class="searched-item">
                  <a href="detail/{{ $item['id'] }}">
                <img class="trainding-img" src="{{$item['galleries'] }}" >
                <div class="">
                  <h3>{{$item['name'] }}</h3>
                  <h4>{{$item['descriptions'] }}</h4>

                </div>
              </a>
              </div>

              @endforeach

            </div>
    </div>



</div>
@endsection
