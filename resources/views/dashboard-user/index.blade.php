<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  berhasil login
  @can('admin')
      hai admin
  @endcan
  <form action="/logout" method="post">
    @csrf
    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
  </form>
</body>
</html>