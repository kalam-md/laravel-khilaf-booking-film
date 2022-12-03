<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard User</title>
  @vite('resources/css/app.css')
</head>
<body class="h-full">
  
  <div class="bg-white">
    @include('dashboard-user.layouts.navbar')
  </div>

  <div class="bg-white">
    @yield('container')
  </div>

</body>
</html>