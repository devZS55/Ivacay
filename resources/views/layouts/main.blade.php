<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  @include('layouts.css')
  
  <title>Ivacay</title>
</head>

<body>

@include('layouts.header')

@include('flash-message')


@yield('content')

@include('layouts.footer')

@include('layouts.js')

</body>

<script>
  $(document).ready(function(){
        $(".toVanish").delay(5000).slideUp(300);
  });
</script>

</html>