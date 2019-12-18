<!DOCTYPE html>
<html lang="ja">
      <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
	  <title>Laravel Quickstart - Basic</title>

	  <!-- Fonts -->
	  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

	  <!-- Styles -->
	  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
      </head>

      <body>

	  <nav class="navbar navbar-default">
	      <div class="container">
		  <!-- navbar  -->
		  <div class="navbar-header">
		      <a class="navbar-brand" href="{{ url('/')  }}">
			  Task List
		      </a>
		  </div>
	      </div>
	  </nav>


	  @yield('content')

      <!-- JavaScripts -->
        {{-- jquery --}}
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      </body>
</html>
