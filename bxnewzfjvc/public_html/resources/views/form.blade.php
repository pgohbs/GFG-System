<form method = "POST" action="/formsubmit">
	{{ csrf_field() }}
	First name: <br>
	<input type="text" name = "firstname"><br>
	last name: <br>
	<input type = "text" name = "lastname">
	<input type = "submit" value = "Submit">

</form>