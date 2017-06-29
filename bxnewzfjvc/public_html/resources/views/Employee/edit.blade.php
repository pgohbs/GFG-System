<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Laravel CRUD Operations </title>
</head>
<body>

<div>
	<span> Edit Employee</span>
	<a style="float:right" href="{{ route('employee.index')}}"> Go Back</a>
</div>
<br/>
<br/>

	{!! Form::model($employee,['method'=>'PATCH','route'=>['employee.update',$employee->id]])!!}
	Name:<br>
	{!! Form::text('name',null,array())!!}<br>
	Email:<br>
	{!! Form::text('email',null,array())!!}<br>
	Mobile:<br>
	{!! Form::text('mobile',null,array())!!}<br>
	Employee:<br>
	{!! Form::text('employee_code',null,array())!!}<br>
	Designation:<br>
	{!! Form::text('designation',null,array())!!}<br>
	<input type="submit" value="Submit">

	{!! Form::close()!!}
</body>
</html>