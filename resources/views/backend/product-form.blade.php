<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300&display=swap" rel="stylesheet">

<style>
    #radioButtons{
  margin: 5px 0 10px 0;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #016a70;
  color: white;
  padding: 14px 20px;
  margin-top: 12px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #018c94;
}

div {
  margin: auto;
  width: 30%;
  border-radius: 5px;
  background-color: #ededed;
  padding: 20px;
  font-family: 'Work Sans', sans-serif;
}
</style>

<div>
  <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
      @csrf     
    <label for="productname">product_name</label>
    <input type="text" id="productname" name="pro_name" required placeholder="product name">

    <label for="price">product_price</label>
    <input type="text" id="price" name="price" required placeholder="price">

    <input type="file" id="image" name="image" required placeholder="image">

  

  
    <input type="submit" value="Submit">
  </form>
</div>