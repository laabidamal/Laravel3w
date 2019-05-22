<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Laravel</title>
</head>
<body>
<form action="{{route('showAddStudent')}}" method="POST">
	{{ csrf_field()}}

<label for="name">Name</label>		
<input type="text" name="name" value="">
<label for="email">Email</label>
<input type="text" name="email" value="">
<label for="password">password</label>
<input type="text" name="password" value="">

<select name="classroom">
	
@foreach($classrooms as $classroom)
<option value="{{$classroom->id}}">{{$classroom->title}}</option>
@endforeach
</select>
<button type="submit">Enregistrer</button>
</form>
</body>
</html>