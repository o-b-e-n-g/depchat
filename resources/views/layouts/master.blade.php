
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Blog Template for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">


  <!-- Custom styles for this template -->
  <link href="css/blog.css" rel="stylesheet">
</head>

<body>

  @include('layouts.nav')

  @include('layouts.header')

  <div class="container">

    <div class="row">


      @yield('content')


      @include('layouts.sidebar')

    </div><!-- /.row -->

  </div><!-- /.container -->

  @include('layouts.footer')


  
</body>
</html>
