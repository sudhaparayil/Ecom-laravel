@extends('master')
@section('content')
<div class="custom-product">

    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h3>My Orders</h3>
           
            @foreach ($products as $product)
            <div class="row search-item cart-listdivider">
            <div class="col-sm-3">
                <a href="detail/{{$product->id}}">
                    <img class="trending-image" src="{{$product->gallery}}" >
 
                  </a>
            </div>
            <div class="col-sm-4">
            
                    <div class="">
                      <h2>Name : {{$product->name}}</h2>
                      <h5>Delivery Status :{{$product->status}}</h5>
                      <h5>Address : {{$product->address}}</h5>
                      <h5>Payement Status : {{$product->payment_status}}</h5>
                      <h5>Payement Methode : {{$product->payment_methode}}</h5>
                      
                    </div>  
                 
            </div>

          </div>
          @endforeach
          </div>
         
    </div>
</div>


@endsection