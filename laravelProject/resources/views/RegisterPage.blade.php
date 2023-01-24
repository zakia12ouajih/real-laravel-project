@extends('layouts.Home')

@section('content')
   <div class=" position-relative w-50  top-50 start-50 translate-middle">
      <h1 class="display-3 text-center pb-2">Register</h1>
      <form method="POST" action="/add">
         @csrf
         <div class="form-outline mb-4">
            <input type="text" id="first_name" name='first_name' class="form-control" placeholder="first name"/>
         </div>
         <div class="form-outline mb-4">
            <input type="text" id="last_name" name='last_name' class="form-control" placeholder="last name"/>
         </div>
         <div class="form-outline mb-4">
            <input type="tel" id="phone_number" name='phone_number' class="form-control" placeholder="phone number"/>
         </div>
         <div class="form-outline mb-4">
            <input type="email" id="email_address" name='email_address' class="form-control" placeholder="email address"/>
         </div>
         
         <div class="form-outline mb-4">
            <input type="password" id="password" name='password' class="form-control"  placeholder="password"/>
         </div>
         
         <div class="form-outline  input-group-btn mb-4 d-flex align-items-center justify-content-center">
            <input type="submit" class="btn btn-primary " value="Sign in" />
               
               
         
         </div>
</form>
   </div>
@endsection