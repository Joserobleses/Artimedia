<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Artimedia prova jrobles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src=" asset('js/app.js') " defer></script>
    <link href=" asset('css/app.css') " rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">Prova Artimedia jrobles</a>
  </div>
</nav>
<a href="/" class="btn btn-primary stretched-link">return to product list</a>
<div>
    <h1>Show Product</h1>
    <table class="table">
<thead>
    <tr>
      <th scope="col">Product name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Brand</th>
    </tr>
  </thead>
  <tbody>

        <tr>
            <td> {{ $product->name }}</td>
            <td> {{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->brand->name }}</td>

        </tr>


</tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>