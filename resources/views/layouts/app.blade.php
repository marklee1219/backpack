<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
  <title>BP Website - @yield('title')</title>
</head>
<body>
  @include('inc.navbar')

  <div class="container">
    @yield('content')
  </div>
</body>
</html>