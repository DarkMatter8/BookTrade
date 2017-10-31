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
    <div class="container">
    <br>
    <br>

        <div class="row">
            <div class="col-sm-6">
            <h1>Sign Up ....</h1>
            <p>Already Registered ? Login <a href="/">Here</a></p>
            
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                <div class="container">
                    <div class="alert-icon">
                        <i class="now-ui-icons objects_support-17"></i>
                    </div>
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                        </span>
                    </button>
                </div>
            </div>
            @endif

            @if($errors->any())
            <div class="alert alert-danger" role="alert">
                <div class="container">
                    <div class="alert-icon">
                        <i class="now-ui-icons objects_support-17"></i>
                    </div>
                    {{$errors->first()}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                        </span>
                    </button>
                </div>
            </div>
            @endif
                <form action="/signup" method="POST">
                    <div class="form-group">
                        <input type="text" value="" placeholder="Name" class="form-control" required="true" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <input type="text" value="" placeholder="Email" class="form-control" required="true" name="email" id="email">
                    </div>

                    <div class="form-group">
                        <input type="text" value="" placeholder="Contact" class="form-control" required="true" name="contact" id="contact">
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="year" id="year" required="true">
                            <option disabled selected value="">Year</option>
                            <option>FE</option>
                            <option>SE</option>
                            <option>TE</option>
                            <option>BE</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="branch" id="branch" required="true">
                            <option disabled selected value="">Branch</option>
                            <option value="CE">CE</option>
                            <option>EXTC</option>
                            <option>IT</option>
                            <option>ME</option>
                            <option>PPT</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="semester" id="sem">
                            <option disabled selected value="">Semester</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="password" value="" placeholder="Password" class="form-control" required="true" name="password" id="password">
                    </div>
                    <div class="form-group">
                        <input type="password" value="" placeholder="Password Again" class="form-control" required="true" name="password_a" id="password_a">
                    </div>
                    {{ csrf_field() }}
                    <button class="btn btn-primary" type="submit" style="float:right;">Sign Up</button>

                </form>
            </div>
            <div class="col-sm-6">
            <br>
            <br>
            <br>
            <br>
            <br>
            <div align="center">
                <img src="{{asset('img/33.jpg')}}" height="70%" width="60%">
            </div>
            </div>
        </div>
    </div>
    </body>
    <script>
        $('[data-toggle="tooltip"]').tooltip();

        $('#year').on('change',function(){
    var year = $('#year').val();
    console.log(year);
    var select = $('#sem');

      switch(year){
        case 'FE':
          select.empty().append('<option disabled selected value="">Semester</option><option value="1">1st Semester</option><option value="2">2nd Semester</option>');
          break;
        case 'SE':
          select.empty().append('<option disabled selected value="">Semester</option><option value="3">3rd Semester</option><option value="4">4th Semester</option>');
          break;
        case 'TE':
          select.empty().append('<option disabled selected value="">Semester</option><option value="5">5th Semester</option><option value="6">6th Semester</option>');
          break;
        case 'BE':
          select.empty().append('<option disabled selected value="">Semester</option><option value="7">7th Semester</option><option value="8">8th Semester</option>');
          break;
      }
})
    </script>
</html>
