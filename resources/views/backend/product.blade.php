<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<a class="btn btn-primary" href="{{route('product.form')}}">Create Product</a>
<div class="container">
<table class="table">

  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">product_name</th>
      <th scope="col">price</th>
      <th scope="col">image</th>
    </tr>
  </thead>
  <tbody>
  @foreach($products as $data)
    <tr>
      <th scope="row">{{ $data->id }}</th>
      <td>{{ $data->product_name }}</td>
      <td>{{ $data->price }}</td>
      <td>
      <!-- <img src="{{ url('/backend/uploads/' . $data->image) }}" alt="image"  width="100px"> -->
      <img src="{{ url('/uploads/images/' . $data->image) }}" alt="image"  width="100px">
      </td>
    </tr>
  @endforeach
</tbody>
</table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>