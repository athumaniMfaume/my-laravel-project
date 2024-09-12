<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title','products') </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-primary">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="/" class="nav-link text-light">Products</a>
            </li>
        </ul>

      </nav>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{$message}}</strong>
            </div>

        @endif

        @yield('main')
</body>
</html>
