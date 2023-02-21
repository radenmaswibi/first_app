<!DOCTYPE html>
<html>
<body>

<h2>Form Activity</h2>  

<form method="POST" action="{{route('storeActivity')}}">
    @csrf
  <label>Name Activity:</label><br>
  <input type="text" name="name_activity"><br></br>
  <input type="submit" value="Submit">
</form> 

<h4>selamat datang di activity</h4>
</body>
</html>