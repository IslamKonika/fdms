{{-- {{-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300&display=swap" rel="stylesheet">



<title>Hello, world!</title>
</head>
<body>

<div>







</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--

-->
</body>
</html> --}}


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('iziToast.min.css') }}">

    {{--
    <style>
        #radioButtons {
            margin: 5px 0 10px 0;
        }

        input[type=text],
        select {
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
    </style> --}}
    <title>Registration</title>
</head>

<body>

    @if (session('success'))
        <script type="text/javascript">
            alert("{{ session('success') }}");
        </script>
    @endif

    @if (session('error'))
        <script type="text/javascript">
            alert("{{ session('error') }}");
        </script>
    @endif

<div class="container">
    <div class="row">
<div class="card  mt-3 py-3">
    <div class="col-12">
        <form action="{{ route('team.store') }}" method="POST">
            @csrf
            <label for="fname">Team Name</label>
            <input type="text" id="fname" name="name" placeholder="Team name"
                class="form-control  @error('name')
                is-invalid
            @enderror">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <br>
            <label for="amount">Amount</label>
            <input type="number" id="amount" name="team_amount" placeholder="Amount"
                class="form-control  @error('name')
                is-invalid
            @enderror">
            @error('team_amount')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <br>

            <input class="btn btn-primary" type="submit" value="Submit">
        </form>
    </div>
</div>

    </div>
</div>


    <script src="{{ asset('iziToast.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>





</body>

</html>
