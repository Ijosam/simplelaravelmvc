<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>User Management System</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <h1 style= "text-align: center; Color: grey; padding-top:30px; font-size: 25px; font-family: roboto; mt-5">DISPLAY USER INFO</h1>
<hr>
<br>


<table class="table table-striped m-auto" style="width: 800px">
    
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Action</th>
        </tr>
       @foreach($users as $users_info_apps)
       <tr>
        <td>{{$users_info_apps->id}}</td>
        <td>{{$users_info_apps->name}}</td>
        <td>{{$users_info_apps->email}}</td>
        <td>{{$users_info_apps->phone}}</td>
        <td><a href="/delete/{{$users_info_apps->id}}" class="btn btn-danger btn-sm">Delete</a>
        <a href="/view/{{$users_info_apps->id}}" class="btn btn-info">View</a></td>
       </tr>
       @endforeach
  </table>
  <html>
