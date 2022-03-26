@extends('employees.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Employee detail Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $employees->name }}</h5>
        <p class="card-text">Job Title : {{ $employees->job_title }}</p>
        <p class="card-text">Joining Date : {{ $employees->joining_date }}</p>
        <p class="card-text">Salary : {{ $employees->salary }}</p>
        <p class="card-text">Email : {{ $employees->email }}</p>
        <p class="card-text">Mobile no: {{ $employees->mobile_no }}</p>
        <p class="card-text">Address : {{ $employees->address }}</p>
  </div>
       
    </hr>
  
  </div>
</div>