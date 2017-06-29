<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title> Laravel CRUD Operations</title>
</head>

<body>
<div>
	<span>All Employees</span>
	<a style="float:right" href="{{route('employee.create') }}"> Create New Employees</a>
</div>
<br/>
<br/>
<br/>
@if ($message = Session::get('success'))
	<p><i>{{$message}}</i></p>
@endif
<br/>
<br/>

<table border="1">
<tr>
	<th>Name</th>
	<th>Email</th>
	<th width="280px">Action</th>
</tr>
@foreach($employees as $key => $employee)
<tr>
<td>{{$employee->name}}</td>
<td>{{$employee->email}}</td>
<td>
	<a href="{{ route('employee.show',$employee->id)}}">Show</a>
	<a href="{{ route('employee.edit',$employee->id)}}">Edit</a>
	{!! Form::open(['method' => 'DELETE','route' => ['employee.destroy',$employee->id],'style'=>'display:inline'])!!}
	{!! Form::submit('Delete',['class' => 'btn btn-danger'])!!}
	{!! Form::close()!!}
</td>
</tr>

@endforeach

</table>
{!! $employees->render()!!}

</body>
</html>
