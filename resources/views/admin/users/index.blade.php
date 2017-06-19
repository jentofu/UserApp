@extends('layouts.admin')


@section('content')


      <h1>User</h1>

      <table class="table table-bordered">
   <thead>
     <tr>
       <th>Id</th>
       <th>Name</th>
       <th>Email</th>
       <th>Role</th>
       <th>Status</th>
       <th>Created</th>
       <th>Updated</th>
     </tr>
   </thead>
   <tbody>
    @if($users)
    @foreach($users as $user)


     <tr>
       <td>{{$user->id}}</td>
       <td>{{$user->name}}</td>
       <td>{{$user->email}}</td>
       <th>{{$user->role->name}}</th>
       <th>{{$user->is_active == 1 ? 'Active':'Not Active'}} </th>
       <td>{{$user->created_at->diffForHumans()}}</td>
       <td>{{$user->updated_at}}</td>
     </tr>



     @endforeach
     @endif

   </tbody>
 </table>



@stop
