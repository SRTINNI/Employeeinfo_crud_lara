@extends('employees.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Employee info. adding Page</div>
  <div class="card-body">
      
      <form action="{{ url('employee') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Job Title</label></br>
        <input type="text" name="job_title" id="job_title" class="form-control"></br>
        <label>Joining Date</label></br>
        <input type="text" name="joining_date" id="joining_date" class="form-control"></br>
        <label>Salary</label></br>
        <input type="text" name="salary" id="salary" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>Mobile no</label></br>
        <input type="text" name="mobile_no" id="mobile_no" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop