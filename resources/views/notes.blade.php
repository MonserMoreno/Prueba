<!DOCTYPE html>
<html>
<head>
	<title>Laravel</title>
</head>
<body>
	<h2>Notes</h2>
    <ul>
      @foreach ($notes as $notes)
      	<li>
      		  {{ $notes->notes}}
      	</li>
    	@endforeach
   </ul>
   <!--<form method="POST">
     {!! csrf_field() !!}
     <input type="hidden" name="_token" value="{{ csrf_token() }}"> Comentario
  	  <textarea></textarea>
  	<button type="submint"> Nota</button>
	</form>-->
</body>
</html>
