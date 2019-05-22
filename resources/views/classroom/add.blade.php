<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Laravel</title>
</head>
<body>
<form action="{{route('handleAddClassroom')}}" method="POST">
	{{ csrf_field()}}
		
<input type="text" name="title">
<input type="text" name="photo">
<button type="submit">ok</button>

</form>
</body>
</html>




