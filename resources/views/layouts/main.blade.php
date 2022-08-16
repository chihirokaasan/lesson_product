<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
</head>
<body>
@include('layouts.header')
  <div class="content">
    @yield('content')
  </div>
@include('layouts.footer')
</body>
</html>