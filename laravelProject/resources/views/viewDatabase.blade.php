@extends('layouts.Home')

@section('content')
   <div class="table-responsive position-relative w-50  top-50 start-50 translate-middle">
      <table class="table table-striped table-hover table-borderless table-primary align-middle text-center">
         <thead class="table-light">
            <caption>View DataBase</caption>
            <tr>
               <th>First name</th>
               <th>Last name</th>
               <th>Phone number</th>
               <th>Email address</th>
            </tr>
         </thead>
         <tbody class="table-group-divider">
            @foreach ($people as $p)
                  <tr class="table-primary" >
                     <td>{{ $p->first_name }}</td>
                     <td>{{ $p->last_name }}</td>
                     <td>{{ $p->phone_number }}</td>
                     <td>{{ $p->email_address }}</td>
                     
                  </tr>
                  @endforeach
               </tbody>
            
      </table>
   </div>
   
@endsection