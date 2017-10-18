<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.min.css.map" rel="stylesheet" type="text/css">
        <link href="css/demo.css" rel="stylesheet" type="text/css">
        <link href="css/now-ui-kit.css" rel="stylesheet" type="text/css">
        <link href="css/now-ui-kit.css.map" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
        <script type="text/javascript" src="{!! asset('js/core/popper.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('js/core/bootstrap.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('js/auth.js') !!}"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body style="overflow-x: hidden;">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div align="center">
        <p style="font-size:5em; color:#2196F3;" class="animated tada">BookTrade</p>
        <p style="font-size:2em; color:#696969;">A Place To Search,Sell your Engineering Books :)</p>
        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Sign In</button>
        <button class="btn btn-primary btn-lg">Sign Up</button>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <!-- Modal Core -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Sign In</h4>
      </div>
      <div class="modal-body">
      <div class="alert alert-danger" role="alert" id="error" style="display: none;">
        
      </div>
        <form id="signin-form">
            <div class="col-sm-10">
                <div class="form-group">
                    <input type="text" name="email" id="email" placeholder="UserName" class="form-control">
                </div>
            </div>
            <div class="col-sm-10">
                <div class="form-group">
                    <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                </div>
            </div>
            {{ csrf_field() }}
            <button class="btn btn-primary" type="submit" id="login-button">Sign In</button>
        </form>
      </div>
    </div>
  </div>
</div>
    </div>
    <br>
    </body>
    <script>
        $('[data-toggle="tooltip"]').tooltip();
    </script>
</html>
