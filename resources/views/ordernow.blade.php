@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
    <table class="table table-striped">
        <tbody>
        <tr>
            <td>Amount</td>
            <td>$ {{$total}}</td>
        </tr>
        <tr>
            <td>Tax</td>
            <td>$ 0</td>
        </tr>
        <tr>
            <td>Delivery</td>
            <td>$ 10</td>
        </tr>
        <tr>
            <td>Total Amount</td>
            <td>$ {{$total+10}}</td>
        </tr>
        </tbody>
    </table>
    <div>
        <form action="/orderplace"method="Post">
            @csrf
            <div class="form-group">
                <textarea type="text" class="form-control" id="email" placeholder="enter your address" name="address"></textarea>
                <br><br>
            </div>
            <div class="form-group">
                <label for="pwd">Payment Method</label><br><br>
                <input type="radio" name="payment" value="cash"><Span>Visa</Span><br>
                <input type="radio" name="payment"  value="cash"><Span>Cash on Delivery</Span><br>
                <input type="radio" name="payment" value="cash"><Span>Paypal</Span><br>
            </div>
            <button type="submit" class="btn btn-default">Checkout</button>
            </form>
    </div>
    </div>
</div>
@endsection