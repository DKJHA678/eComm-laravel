@extends('master')
@section('content')
<div class="custom-product">

    <div class="col-sm-10">
        <div class="trainding-wrapping">
            <h3>Cart List</h3>
            <a class="btn btn-success" href="/ordernow">Order Now</a><br> <br>
            <div class="">
                @foreach ($_Products as $item)

                <div class=" row searched-item cart-list-devider">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trainding-img" src="{{$item->galleries}}" >

                          </a>
                          </div>
                          <div class="col-sm-3">

                                <div class="">
                                  <h3>{{$item->name }}</h3>
                                  <h4>{{$item->descriptions}}</h4>

                                </div>

                              </div>
                              <div class="col-sm-3">
                                  <a href="/removecart/ {{ $item->cart_id }}"class="btn btn-warning">Remove From Cart</a>



                                  </div>

                    </div>



              @endforeach
              <a class="btn btn-success" href="/ordernow">Ordered Now</a><br> <br>

            </div>
        </div>
    </div>



</div>
@endsection
