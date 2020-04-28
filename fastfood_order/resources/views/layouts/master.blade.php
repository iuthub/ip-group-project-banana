<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
  @yield('title')
  </title>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/app.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/all.css') }}">

  @yield('head')

</head>
<body>

	@yield('content')

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



{{-- https://laracasts.com/discuss/channels/laravel/error-response-in-modal. Snippet from this link was used to fix login modal.  --}} 
    @if (count($errors) > 0)
    <script>
      $( document ).ready(function() {
        $('#Login').modal('show');
      });
    </script>
    @endif


</body>

</html>