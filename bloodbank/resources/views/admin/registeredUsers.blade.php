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
        <th>BloodGroup</th>
        <th>LastDonated</th>
        <th>Contact</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($donors as $donor)
        <tr id="{{ $donor->id }}">
            <td> {{ $donor->id }} </td>
            <td> {{ $donor->Username}} </td>
            <td> {{ $donor->BloodGroup }} </td>
            <td> {{ $donor->LastDonated }} </td>
            <td> {{ $donor->Contact }} </td>
            <td> {{ $donor->Address }} </td>
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
        <h3 class="modal-title" id="userModalLabel">Donor Details</h3>
      </div>
      <div class="modal-body">
       
      <table class="table table-hover table-bordered table-striped">
        <thead>
            <th class="col-md-4">ID</th>
            <th class="col-md-4">Name</th>
            <th class="col-md-4">BloodGroup</th>
        </thead>
        <tbody>
            <tr>
                <td id="id"></td>
                <td id="name"></td>
                <td id="bloodgroup"></td>
            </tr>
        </tbody>
      </table> 

      
        <table class="table table-hover table-bordered table-striped">
            <thead>
                <th class="col-md-4">LastDonated</th>
                <th class="col-md-4">Contact</th>
                <th class="col-md-4">Address</th>
            </thead>
            <tbody>
                <tr>
                    <td id="lastdonated"></td>
                    <td id="contact"></td>
                    <td id="address"></td>
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
