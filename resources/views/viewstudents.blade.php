<?php
//echo "view students page</br>";
//print_r($data);
//echo "</br>";
foreach ($data as  $row) {
  //print_r($row);
  //echo "</br>";
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table border="2" style="width:50%">
  <tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>action</th>
  </tr>
  @foreach($data as $row)
    <tr>
        <td>{{$row->id}}</td>
        <td>{{$row->name}}</td>
        <td>{{$row->email}}</td>
        <td><a href='delete/{{$row->id}}'  class='btn btn-success btn-danger'>delete</a>--
            <a href='update/{{$row->id}}'  class='btn btn-success btn-danger'>update</a>
        </td>
    </tr>
@endforeach


</table>
  </body>
</html>
