@extends('master')
@section('content')
<div class="custom-product">

    <div class="col-sm-10">
        <div class="trainding-wrapping">
            <h3>Orders List</h3>
            <a class=""> </a>
            <div class="">
                @foreach ($orders as $item)

                <div class=" row searched-item cart-list-devider">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trainding-img" src="{{$item->galleries}}" >

                          </a>
                          </div>
                          <div class="col-sm-3">

                                <div class="">
                                  <h3>{{$item->name }}</h3>
                                  <h4>Delivery Status:{{$item->status}}</h4>
                                  <h4>Payment Status:{{$item->payment_status}}</h4>
                                  <h4>Payment Method: {{$item->payment_method}}</h4>
                                  <h4>Delivery Address: {{$item->address}}</h4>
                                  <h4>Products Price: {{$item->prices}}</h4>

                                </div>

                              </div>
                              <div class="col-sm-3">
                            {{-- <a href="/removecart/$item->cart_id "class="btn btn-warning">Remove From Cart</a> --}}



                                  </div>

                    </div>



              @endforeach


            </div>
        </div>
    </div>



</div>
@endsection
