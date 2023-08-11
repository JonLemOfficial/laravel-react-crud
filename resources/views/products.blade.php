<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <div class="content">

      <h1>These are all products in stock</h1>
      <table border="1"> 
        <thead>
          <tr>
            <th>id</th>
            <th>Name</th>
            <th>Price</th>
            <th>in Stock</th>
            <th>Quantity</th>
          </tr>
        <thead>
        <tbody>
          @foreach ( $products as $product )
            <tr>
              <td>{{ $product["id"] }}</td>
              <td>{{ $product["name"] }}</td>
              <td>{{ $product["price"] }}</td>
              <td>{{ $product["inStock"] }}</td>
              <td>{{ $product["quantity"] }}</td>
            </tr>
          @endforeach
        <tbody>
      </table> 
    </div>

  </body>
</html>