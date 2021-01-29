@extends('master')
@section('content')
<div class="container custom-product">
    <div class="row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              @foreach ($_products as $item)
              <div class="item {{ $item['id']==21?'active':'' }}">
                <a href="detail/{{ $item['id'] }}">
                    <img class="slide-img" src="{{$item['galleries'] }}" alt="India">
                <div class="carousel-caption">
                  <h3>{{$item['name'] }}</h3>
                  <p>{{$item['descriptions'] }}</p>
                </div>
                </a>
              </div>

              @endforeach

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="trainding-wrapping">
              <h1>Trainding Products</h1>
              <div class="">
                @foreach ($_products as $item)
                <div class="trainding-item">
                    <a href="detail/{{ $item['id'] }}">
                  <img class="trainding-img" src="{{$item['galleries'] }}" >
                  <div class="">
                    <h3>{{$item['name'] }}</h3>

                  </div>
                </a>
                </div>

                @endforeach

              </div>
          </div>



    </div>



</div>
@endsection
