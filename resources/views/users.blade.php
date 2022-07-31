<h1></h1>

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
@if(\Session::has('success'))
<div class="d-grid gap-2 col-6 mx-auto">
<div style="text-align: center" class="alert alert-success ">
    {{Session::get('success')}}
    </div>
    </div>
 @endif   
  <form method="post" action="/adduser">
  <br>
  <h1 style= "text-align: center; Color: grey; padding-top:30px; font-size: 25px; font-family: roboto; mt-5">CREATE USER DATA</h1>
<hr>

          <div class="form-group">
              @csrf
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="phone">Phone</label>
              <input type="tel" class="form-control" name="phone"/>
          </div>
          <br>
          <button type="submit" class="btn btn-block btn-primary">Create User</button>
      </form>
    </body>
    </html>