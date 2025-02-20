

<h1>Customer Table</h1>



<div class=container>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Customer_name</th>
      <th scope="col">Email</th>
      <th scope="col">phone_number</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
    @foreach($customers as $data)
    <tr>
      <th scope="row">{{data->id}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->phone_number}}</td>
      <td>{{$data->address}}</td>
    </tr>
   @endforeach 
  </tbody>
</table>
</div>