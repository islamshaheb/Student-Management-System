<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title> our student info</title>
</head>
<body>
	<h1>HI am here</h1>
    <h1>hello :</h1>


		<h1>
	@foreach ($allstu as $student)
	{{$student->Name}}
	<br>{{$student->Courses  }}
	<br>
	@endforeach

</h1>
	

</body>
</html>
