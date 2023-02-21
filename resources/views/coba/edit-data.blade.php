<!DOCTYPE html>
<html lang="en">
<head>
    <h2>Edit Activity</h2>

    <form action="{{route('updateActivity', $datas->id)}}"method="POST">
      @csrf
      <label for="name">Nama activity:</label><br>
      <input type="text"  name="name_activity" value="{{ $datas->name_activity}}"><br><br>
      <input type="submit" value="Submit">
    </form>     
    </body>
    </html>