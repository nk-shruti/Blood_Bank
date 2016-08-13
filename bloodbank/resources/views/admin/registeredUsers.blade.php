@extends('admin.base')

@section('content')
<script>var base_url = "{{ url('/') }}";</script>
<style type = "text/css" scoped>
    .table-striped > tbody > tr:nth-child(2n+2) > td, th {
   background-color: #d9edf7;
} 
</style>
<br>
<div class="container">
<h2><u><center>REGISTERED USERS</center></u></h2>
<br>
<table class="table table-bordered table-hover table-striped" id="user_list">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Department</th>
        <th>College</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr id="{{ $user->id }}">
            <td> {{ $user->id }} </td>
            <td> {{ $user->name}} </td>
            <td> {{ $user->department }} </td>
            <td> {{ $user->college }} </td>
        </tr>
    @endforeach 

    </tbody>
</table>
</div>

<!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="userModalLabel">User Details</h3>
      </div>
      <div class="modal-body">
       
      <table class="table table-hover table-bordered table-striped">
        <thead>
            <th class="col-md-3">ID</th>
            <th class="col-md-3">Name</th>
            <th class="col-md-3">Department</th>
            <th class="col-md-3">College</th>
        </thead>
        <tbody>
            <tr>
                <td id="id"></td>
                <td id="name"></td>
                <td id="department"></td>
                <td id="college"></td>
            </tr>
        </tbody>
      </table>  

      

      <table class="table table-hover table-bordered table-striped">
        <thead>
            <th class="col-md-12">Intent</th>
        </thead>
        <tbody>
            <tr>
                <td id="intent"></td>
            </tr>
        </tbody>
      </table>  

      
        <table class="table table-hover table-bordered table-striped">
            <thead>
                <th class="col-md-6">Phone No.</th>
                <th class="col-md-6">E-mail</th>
            </thead>
            <tbody>
                <tr>
                    <td id="phoneNo"></td>
                    <td id="email"></td>
                </tr>
            </tbody>

        </table>

        <table class="table table-hover table-bordered table-striped">
            <thead>

            <th class="col-md-4">Have a Passport</th>
            <th class="col-md-4">Have Parents' Consent</th>
            <th class="col-md-4">Have Travelled Abroad</th>
            
        </thead>
        <tbody>
            <tr>
                
                <td id="passport"></td>
                <td id="consent"></td>
                <td id="abroad"></td>
               
            </tr>
        </tbody>
      </table>  
      </div>
    </div>
  </div>
</div>

<script src="{{ asset('assets/js/user.js') }}"></script>
<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>

@endsection
