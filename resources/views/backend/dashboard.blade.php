<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    display: flex;
    height: 100vh;
}

.dashboard-container {
    display: flex;
    width: 100%;
}

.sidebar {
    width: 250px;
    background-color: #343a40;
    color: white;
    display: flex;
    flex-direction: column;
  height:100%;
}

.sidebar-header {
    padding: 20px;
    text-align: center;
    background-color: #007bff;
}

.sidebar-menu {
    list-style-type: none;
    padding: 0;
}

.sidebar-menu li {
    padding: 15px 20px;
}

.sidebar-menu li a {
    color: white;
    text-decoration: none;
}

.sidebar-menu li:hover {
    background-color: #007bff;
}

.main-content {
    flex: 1;
    display: flex;
    flex-direction: column;
}

.topbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: #f8f9fa;
    border-bottom: 1px solid #dee2e6;
}

.topbar h1 {
    margin: 0;
}

.user-info {
    display: flex;
    align-items: center;
}

.user-info p {
    margin: 0 10px 0 0;
}

.content {
    padding: 20px;
    flex: 1;
    background-color: #e9ecef;
}

.cards {
    display: flex;
    gap: 20px;
}

.card {
    flex: 1;
    padding: 20px;
    background-color: white;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  margin:5px;
}

.card h3 {
    margin-bottom: 10px;
}

.card p {
    margin: 0;
}


table {
  width: 100%;
  border-collapse: collapse;
  font-family: Arial, sans-serif;
}

th, td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #f5f5f5;
}

a {
  color: #007bff;
  text-decoration: none;
  margin-right: 10px;
}

a:hover {
  color: #0056b3;
}

</style>


</head>
<body>
    <div class="dashboard-container">
        <nav class="sidebar">
            <div class="sidebar-header">
                <h2>Menu</h2>
            </div>
            <ul class="sidebar-menu">
                <li><a href="#">Dashboard</a></li>
                <li><a href="{{route('backend.transaction')}}">Transaction</a></li>
                <li><a href="{{route('backend.product')}}">Product</a></li>
                <li><a href="{{route('backend.customer')}}">Customer</a></li>


            </ul>
        </nav>
        <div class="main-content">
            <header class="topbar">
                <h1>Dashboard</h1>
                <div class="user-info">
                    <p>Welcome, User</p>
                    <a href="#">Logout</a>
                </div>
            </header>
            <div class="content">


  <table>
  <thead>
  <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">total</th>
      <th scope="col">station name</th>
      <th scope="col">Action</th>
  </tr>
  </thead>
  <tbody>
  @foreach($transaction_sum as  $index=>$data)
    <tr>
      <th scope="row">{{$index+1}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->total_amount}}</td>
      <td>{{$data->station_name}}</td>
      <td>

      <a href="#" class="btn btn-success">Edit</a>
      <a href="#" class="btn btn-success">view</a>

      </td>

    </tr>

  </tbody>
  @endforeach
  </tbody>
</table>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
