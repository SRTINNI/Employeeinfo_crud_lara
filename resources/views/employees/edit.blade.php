@extends('employees.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Employee info. update Page</div>
  <div class="card-body">
      
      <form action="{{ url('employee/' .$employees->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$employees->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$employees->name}}" class="form-control"></br>
        <label>Job Title</label></br>
        <input type="text" name="job_title" id="job_title" value="{{$employees->job_title}}" class="form-control"></br>
        <label>Joining Date</label></br>
        <input type="text" name="joining_date" id="joining_date" value="{{$employees->joining_date}}" class="form-control"></br>
        <label>Salary</label></br>
        <input type="text" name="salary" id="salary" value="{{$employees->salary}}" class="form-control"></br>
        <label>Mobile no</label></br>
        <input type="text" name="mobile_no" id="mobile_no" value="{{$employees->mobile_no}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$employees->address}}" class="form-control"></br>
   
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop