
@extends("master")
@section("content")
<!--login page content -->
<div class="container login">
  <div class="row">
      <div class="col-md-5 col-md-offset-3">     
        <form action="register" method="POST">
        @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" name="username" required>
          </div> 
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
          </div>
          <button type="submit" class="btn btn-primary">Register</button>
        </form>
      </div>
  </div>
</div>
 
<!--end of login page content-->

@endsection

