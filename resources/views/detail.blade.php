@extends("master")
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h2>Product Name :{{$product['name']}}</h2>
            <h3>Price : {{$product['price']}}</h3>
            <h4>Discription : {{$product['discription']}}</h4>
            <h4>Category : {{$product['category']}}</h4>
            <br><br>
            <form action="/add-to-cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-primary">Add to Cart</button>
            </form>
            <br><br>
            <button class="btn btn-success">Buy Now</button>
        </div>
    </div>
</div>
@endsection