<!DOCTYPE html>
<html>

<form action="{{route('enviar')}}" method="POST">
    <h1>Fecha de nacimiento</h1>
<input type="text" name="fn">
    <h1>Correo</h1>
<input type="text" name="co">
    <h1>cedula</h1>
<input type="text" name="cd">

<input type="submit" name="llorar">
<input type="reset" name="reset">
<input type="hidden" name="_token" value="{{csrf_token()}}">
</form>
   
</html>
