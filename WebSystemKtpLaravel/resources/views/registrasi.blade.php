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
                        <form action="/registrasi" method="post" autocomplete="off">
                        {{ csrf_field() }}
                            <div class="form-group" style="text-align:center!important;">
                                <label for="recipient-name"  class="col-form-label">KTP Management System</label>
                            </div>
                            @if (session('statusGagal'))
                                <div class="alert alert-danger">
                                    {{ session('statusGagal') }}
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Username:</label>
                                <input required type="text" class="form-control" name="username">
                            </div>
                            <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Password:</label>
                                <input required type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Name:</label>
                                <input required type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Level Role:</label>
                                <select required class="form-control" id="level" name="level">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                            <button type="submit" id="sendlogin" class="btn btn-primary">Simpan</button>
                            <p>Sudah Punya Akun? <a href="/">Login</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
