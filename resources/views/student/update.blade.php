<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Laravel</title>
</head>
<body>
<form action="{{route('showUpdateStudent',['id'=>$student->id])}}" method="POST">
	{{ csrf_field()}}

<label for="name">Name</label>		
<input type="text" name="name" value="{{$student->name}}">
<label for="email">Email</label>
<input type="text" name="email" value="{{$student->email}}">

<select name="classroom">
	
@foreach($classrooms as $classroom)
<option value="{{$classroom->id}}">{{$classroom->title}}</option>
@if($classroom->id==$student->classroom_id)
<option value="{{$classroom->id}}" selected>{{$classroom->title}}</option>
 
@endif>
@endforeach
</select>
<button type="submit">Enregistrer</button>
</form>
</body>
</html>