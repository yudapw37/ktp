<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <!-- <link rel ="icon" href ="include/img/icon2.png" type = "image/x-icon"> -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Login</title>
  </head>
  <body >
  <div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <form action="/postlogin" method="post" autocomplete="off">
                        {{ csrf_field() }}
                            <div class="form-group" style="text-align:center!important;">
                                <label for="recipient-name"  class="col-form-label">KTP Management System</label>
                            </div>
                            @if (session('statusGagalLogin'))
                                <div class="alert alert-danger">
                                    {{ session('statusGagalLogin') }}
                                </div>                            
                            @endif
                            @if (session('statusSukses'))
                                <div class="alert alert-success">
                                    {{ session('statusSukses') }}
                                </div>                            
                            @endif
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Username:</label>
                                <input type="text" class="form-control" name="username">
                            </div>
                            <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Password:</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <!-- <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Name:</label>
                                <input type="text" class="form-control" name="name">
                            </div> -->
                            <button type="submit" id="sendlogin" class="btn btn-primary">login</button>
                            <p>Belum Punya Akun? <a href="/regist">Registrasi</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
