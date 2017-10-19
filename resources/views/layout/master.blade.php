<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.meta')
  <title>@yield('title')</title>
  <!-- Favicons !-->
  <!-- <link rel="icon" type="image/png" sizes="64x64" href="{!! URL::asset('images/favicons/favicon-64x64.png') !!}">
  <link rel="icon" type="image/png" sizes="32x32" href="{!! URL::asset('images/favicons/favicon-32x32.png') !!}">
  <link rel="icon" type="image/png" sizes="16x16" href="{!! URL::asset('images/favicons/favicon-16x16.png') !!}"> -->
  <!-- Favicons Ends !-->
  @include('includes.styles')
</head>
<body>
  <noscript>Please enable JavaScript to continue.</noscript>
  
  
  @yield('content')
  @include('includes.scripts')
</body>
<script>

$('#year').on('change',function(){
    var year = $('#year').val();
    console.log(year);
    var select = $('#sem');

      switch(year){
        case 'FE':
          select.empty().append('<option disabled selected>Semester</option><option value="1">1st Semester</option><option value="2">2nd Semester</option>');
          break;
        case 'SE':
          select.empty().append('<option disabled selected>Semester</option><option value="3">3rd Semester</option><option value="4">4th Semester</option>');
          break;
        case 'TE':
          select.empty().append('<option disabled selected>Semester</option><option value="5">5th Semester</option><option value="6">6th Semester</option>');
          break;
        case 'BE':
          select.empty().append('<option disabled selected>Semester</option><option value="7">7th Semester</option><option value="8">8th Semester</option>');
          break;
      }
})

$('#sem').on('change',function(){
  var b = $('#branch').val();
  var s = $('#sem').val();

  $.get('/getSubjects/'+s+'/'+b, function(data, status){
        console.log(data);
        var sub = $('#subject');

        sub.empty();

        for(var i=0;i<data.length;i++){
          sub.append('<option>'+data[i]+'</option>');
        }

    });
})


function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgInp").change(function(){
        readURL(this);
    });
</script>
</html>