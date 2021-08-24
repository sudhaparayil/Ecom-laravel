@extends('master')
@section('content')
<div class="custom-product">

    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h3>My Cart</h3>
           
            @foreach ($products as $product)
            <div class="row search-item cart-listdivider">
            <div class="col-sm-3">
                <a href="detail/{{$product->id}}">
                    <img class="trending-image" src="{{$product->gallery}}" >
 
                  </a>
            </div>
            <div class="col-sm-4">
            
                    <div class="">
                      <h2>{{$product->name}}</h2>
                      <h5>{{$product->discription}}</h5>
                      <h2>₹ {{$product->price}}</h2>
                    </div>  
                 
            </div>
            <div class="col-sm-3">
                <a href="/removecart/{{$product->cart_id}}" class = "btn btn-warning" >Remove form cart</a>
            </div>
          </div>
          @endforeach

          {{$products->links()}}
          </div>
          <a class="btn btn-success" href="/ordernow">Order Now</a><br><br>
    </div>
</div>


@endsection