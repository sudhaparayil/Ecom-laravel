@extends('master')
@section('content')
<div class="custom-product">

    <div class="col-sm-10">
        <table class="table">

            <tbody>
              <tr>
                <td>Amount</td>
                <td>₹{{$total}}</td>
               
              </tr>
              <tr>
                <td>Tax</td>
                <td>₹10</td>
             
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>₹{{$total+10}}</td>
                
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                  <textarea type="address" name="address" placeholder="Enter your address" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pay">Payment Methode:</label><br><br>
                  <input type="radio" value="cash" name="payement" ><span>Online payement</span><br><br>
                  <input type="radio" value="cash" name="payement" ><span>EMI payement</span><br><br>
                  <input type="radio" value="cash" name="payement" ><span>Payement On Delivery</span><br><br>
                </div>
              
                <button type="submit" class="btn btn-default">Order Now</button>
              </form>
          </div>
    </div>
</div>


@endsection