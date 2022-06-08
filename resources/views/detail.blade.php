
@extends("master")
@section("content")
<!--login page content -->
<div class ="container">
    <div class ="row">
       <div class="col-sm-6">
         <img class="detail-img" src="{{$product['gallery']}}" alt="">
       </div>
       <div class="col-sm-6">
           <a href="/">Go Back</a>
           <h2>{{$product['name']}}</h2>
           <h3>Price: {{$product['price']}}</h3>
           <h4>{{$product['description']}}</h4>
           <h5>{{$product['category']}}</h5>
           <form action="/add_to_cart" method="post">
             @csrf
             <input type="text" name="product_id" value="{{$product['id']}}" hidden>
             <button class="btn btn-primary">Add to Cart</button>
           </form>
           
           <button class="btn btn-success">Buy Now</button>
       </div>
    </div>
</div>
 
<!--end of login page content-->
@endsection

