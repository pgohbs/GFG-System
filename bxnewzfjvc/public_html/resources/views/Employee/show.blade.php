<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Laravel CRUD Operations </title>
</head>
<body>

<div>
	<span> View Employee</span>
	<a style="float:right" href="{{ route('employee.index')}}"> Go Back</a>
</div>
<br/>
<br/>

	Name: {{$employee->name}}<br>
	Email: {{$employee->email}}<br>
	Mobile: {{$employee->mobile}}<br>
	Employee Code: {{$employee->employee_code}}<br>
	Designation: {{$employee->designation}}<br>


</body>
</html>