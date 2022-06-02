
@extends("master")
@section("content")
<!--login page content -->
<div class="container login">
  <div class="row">
      <div class="col-md-5 col-md-offset-3">     
        <form action="login" method="POST">
          <div class="form-group">
            @csrf
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
  </div>
</div>
 
<!--end of login page content-->

@endsection

