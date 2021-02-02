@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{ $_Products['galleries'] }}" alt="" srcset="">

        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h2>Name: {{ $_Products['name'] }}</h2>
            <h3>Price: {{ $_Products['prices'] }}</h3>
            <h4>Category: {{ $_Products['categories'] }}</h4>
            <h5>Descreption: {{ $_Products['descriptions'] }}</h5>
            <br><br>
            <form action="/add_to_cart" method="POST">
                <input type="text" name="product_id" value="{{$_Products['id'] }}">
                @csrf
                <button class="btn btn-success">Add TO Cart</button>
            </form>

            <br><br>
            <button class="btn btn-primary">Buy Now</button>
            <br><br>

        </div>
    </div>




</div>
@endsection
