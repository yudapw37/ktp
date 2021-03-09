<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="csrf-token" content="{{ csrf_token() }}" />
  <meta name="_token" content="{{csrf_token()}}" />
  <meta http-equiv="Cache-Control" content="no-store" />
  <meta name="author" content="yuda" />
  <meta name="Description" content="Ktp">
  <title>@yield('title')</title>    
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Website</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="/ktp">Data Ktp</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </nav>

  @yield('body')


</body>
</html>
