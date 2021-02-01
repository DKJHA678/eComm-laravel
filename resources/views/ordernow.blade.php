@extends('master')
@section('content')
<div class="custom-product">

    <div class="col-sm-6">
        <table class="table table-striped">

            <tbody>
              <tr>
                <td>Price</td>
                <td>Rs. {{ $total }} </td>

              </tr>
              <tr>
                <td>Tax</td>
                <td>Rs. 0</td>

              </tr>
              <tr>
                <td>Delivery Charges</td>
                <td>Rs. 100 </td>

              </tr>
              <tr>
                <td>Total Amount</td>
                <td>Rs. {{$total+100 }} </td>

              </tr>
            </tbody>
          </table>
          <form method="POST" action="orderplace">
            @csrf
            <div class="form-group">

              <TextArea placeholder="Enter your address" name="address" class="form-control" ></TextArea>
            </div>
            <div class="form-group">
              <label for="">Payment Method</label>
              <p></p><input type="radio" value="account"  name="payment">  <span>Online Payment</span></p>
              <p></p><input type="radio" value="creditcard" name="payment">  <span>Credit Card</span></p>
              <p></p><input type="radio" value="cash" name="payment">  <span>Cash On Delivery</span></p>
            </div>

            <button type="submit" class="btn btn-default">Order Now</button>
          </form>

    </div>



</div>
@endsection
