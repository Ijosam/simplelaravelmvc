<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>User Management System</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        form{
          width: 500px;
          margin: 0 auto;
        }
        h1{
        margin: center;
        }
    </style>
</head>
<body>


 
  <form method="post" action="/update">
  <h1 style= "text-align: center; Color: grey; padding-top:30px; font-size: 25px; font-family: roboto; mt-5">UPDATE USER INFO</h1>
<hr>
<br>
@csrf

          <div class="form-group"> 
              <label for="name">Id</label>
              <input type="text" class="form-control" name="id" value="{{$users->id}}"/>
          </div>
          <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" value="{{$users->name}}"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" value="{{$users->email}}"/>
          </div>
          <div class="form-group">
              <label for="phone">Phone</label>
              <input type="tel" class="form-control" name="phone" value="{{$users->phone}}"/>
          </div>
          <br>
          <button class="btn btn-block btn-warning">Update</button>
      </form>
    </body>
    </html>