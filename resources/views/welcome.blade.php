<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{'/css/style.css'}}">
</head>
<body>
       @guest('customerGuard')
       <a href="{{route('frontend.login')}}" style=" text-decoration:none;">
       <h5 style="font-size: large;">Login</h5>
       </a>
       @endguest

       @auth('customerGuard')

<a href="" style="margin-top: 7px; text-decoration:none;color:#000;">
<i class="fa-solid fa-user"></i>
  <span>
    {{auth('customerGuard')->user()->name}} | <a href="{{route('customer.logout')}}" style="margin-top: 7px; text-decoration:none;color:#000;">Logout</a>
  </span>
</a>

@endauth

    <div class="main">

        <div class="left">
          <div class="list">

            <div class="name">
                <p>Name</p>
            </div>

            <div class="amount">
                <p>Amount</p>
            </div>

            {{-- <div class="projectname">
                <p>Action</p>
            </div> --}}

          </div>

          <br>
          @foreach($transaction_sum  as $data)
          <div class="list">


            <div class="name">
                <p>{{$data->name}}</p>
            </div>

            <div class="amount">
                <p>${{$data->total_amount}}</p>
            </div>

            {{-- <div class="projectname">
                <p>
                    <a href="#">view</a>
                </p>
            </div> --}}


           </div>
           @endforeach




        </div>

        <div class="main-sales">
            <h4>sales wise station</h4>
            <div class="sales">
                <div class="sales-items">
                @foreach($station_sum->chunk(2) as $chunk)
                    <div class="one">
                        @foreach($chunk as $transaction)
                            <div class="pic1">
                                <img src="{{ asset('/image/c90ff5f20e1e4b02a05eabf68c6d1c89.jpg') }}" class="rounded-circle">
                                <p>{{ $transaction->station_name }}</p>
                                <p>${{ number_format($transaction->total_amount, 2) }}</p>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
            </div>

             <h4>weekly hero</h4>
             <div class="weekly-hero">

                <div class="weekly">
                    <div class="total">
                    <img src="image/5afff8295a2734482a2d9bf7c1e90494.jpg" alt="">
                    </div>
                    <div class="totalss">

                        <div class="totalss1">
                            <p>
                                Total Quotation <br>
                                <span>"50"</span>
                            </p>

                        </div>

                        <div class="totalss2">
                            <p>Total Sales <br>
                            <span> ${{ number_format($total_sales, 2) }}</span>

                        </div>


                    </div>

                </div>

            </div>
       </div>

                    <br>


        <div class="ftop">
             <div><h4>Top 3 Quotation Provider (Monthly)</h4></div>

        <div class="top">


        <div class="image">

        <div class="images-left">

            <img src="image/3e5c02d1c4d27a7ec3537a08183734bc.jpg">
            <p>Petter</p>
            <p>"45"</p>



        </div>

        <div class="images-left">

            <img src="image/454e02789f38efe4cfb91abb19e84990.jpg" alt="">
            <p>Maria</p>
            <p>"40"</p>


        </div>

        <div class="images-left">

            <img src="image/c80b069b0f6f76a9f44fffc43c81b19d.jpg" alt="">
            <p>Jennifer</p>
            <p>"35"</p>


        </div>



        </div>

        <h4>Team Wise Sales</h4>
        <div class="top1">

            <div class="image1">

            <div class="images-left1">

                <img src="image/99b49342a201f3f61fc846ce2d402c4d.jpg">
                <p>Sales Falcon</p>
                <p>$10,000</p>



            </div>

            <div class="images-left1">

                <img src="image/9afee9df2505e2f10742d3f0208a6f3d.jpg" alt="">
                <p>Sales Shark</p>
                <p>$10,000</p>


            </div>

            <div class="images-left1">

                <img src="image/4c43d2799a310e63245864768626dc73.jpg" alt="">
                <p>Sales Chrocodile</p>
                <p>$10,000</p>


            </div>



            </div>
        </div>

        <div class="top2">

            <div class="total">
                <h1>Total sales</h1>
                <h2>${{ number_format($total_sales, 2) }}</h2>

            </div>

        </div>
        <div class="diagram">

            <img src="image/diagram.png">
        </div>




    </div>
</div>
</body>
</html>
