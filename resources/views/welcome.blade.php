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
<div  class="w-25 p-3" >
    <h1>Buscar per nom
        {{ Form::open(['route' => 'welcome', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
        <div class="form-group">
            {{ Form::text('name', null,['class' => 'form-control','placeholder' => 'Name']) }}
        </div>
        <div class="form-group">
            {{ Form::label('brand_id','Brands') }}
            {!!Form::select('brand_id', $brands, null, ['class' =>'form-control']) !!}
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-success">
                <span class="glyphicon glyphicon-search">Buscar</span>
            </button>
            <button class="btn btn-outline-success" onclick="document.getElementById('selectform').reset(); document.getElementById('from').value = null; return false;">
                Reset
            </button>
        </div>
    
        {{ Form::close() }}
    </h1>
</div>
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
@foreach($products as $product){
        <tr>
            <td> {{ $product->name }}</td>
            <td> {{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->brand->name }}</td>
            <td><a href="{{ route('show', $product->id)}}" class="btn btn-primary">See product</a></td>
        </tr>
    }
@endforeach
</tbody>
</table>
{{ $products->render() }}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>