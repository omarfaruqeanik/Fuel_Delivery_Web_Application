<!DOCTYPE html><html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('checkout_css/favicon.ico') }}">

    <title>Checkout example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('checkout_css/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('checkout_css/css/form-validation.css') }}" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="{{ asset('checkout_css/images/bootstrap-solid.svg') }}" alt="" width="72" height="72">
        <h2>Checkout form</h2>
        <!-- <p class="lead">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p> -->
      </div>
      <!-- <form  action=""> -->
      @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{ route('orderplace.store') }}" method="POST">
    @csrf
      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
            <input type="checkbox" name="fuel_name1" value ="{{$fuel->fuel_name1}}" id="exampleCheck" >
              <div>
                <h6 class="my-0" name="Customer_Emailid">{{$fuel->fuel_name1}}</h6>
                <small class="text-muted" name="Delivery_Address">Unit Price: {{$fuel->fuel1_price}}</small>
              </div>
              <div class="col-md-4 mb-3">
                <input type="text" name="fuel1_price" class="form-control"placeholder="" value="{{$fuel->fuel1_price}}" readonly>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
            <input type="checkbox" name="fuel_name2" value ="{{$fuel->fuel_name2}}" id="exampleCheck" >
              <div>
                <h6 class="my-0" name="Customer_Emailid">{{$fuel->fuel_name2}}</h6>
                <small class="text-muted" name="Delivery_Address">Unit Price: {{$fuel->fuel2_price}}</small>
              </div>
              <div class="col-md-4 mb-3">
                <input type="text" name="fuel2_price" class="form-control"placeholder="" value="{{$fuel->fuel2_price}}" readonly>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
            <input type="checkbox" name="fuel_name3" value ="{{$fuel->fuel_name3}}" id="exampleCheck" >
              <div>
                <h6 class="my-0" name="Customer_Emailid">{{$fuel->fuel_name3}}</h6>
                <small class="text-muted" name="Delivery_Address">Unit Price: {{$fuel->fuel3_price}}</small>
              </div>
              <div class="col-md-4 mb-3">
                <input type="text" name="fuel3_price" class="form-control"placeholder="" value="{{$fuel->fuel3_price}}" readonly>
              </div>
            </li>
            
          </ul>


           
          </form>
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          <!-- <form method="post" action="{{ route('fuelstation.store') }}" enctype="multipart/form-data">
           @csrf -->
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Full Name</label>
                <input type="text" name="Customer_FName" class="form-control" id="firstName" placeholder="" value="{{ Auth::user()->name}}" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Phone</label>
                <input type="text" class="form-control" name="Customer_LName" id="lastName" placeholder="" >
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email </label>
              <input type="email" class="form-control" id="email" name="Customer_Emailid" value="{{ Auth::user()->email}}" readonly>
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="Delivery_Address" id="address" placeholder="1234 Main St" required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" required="">
                  <option value="">Choose...</option>
                  <option>Bangladesh</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" id="state" required="">
                  <option value="">Choose...</option>
                  <option>Dhaka</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required="">
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            <div class=" mb-3">
              <label for="email">Comment </label>
              <input type="text" class="form-control" id="email"  name="Order_Details" >
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            <hr class="mb-4">
           
            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
            <div class="custom-control custom-radio">
                <input id="cod"  type="radio" name="paymentmode" value="Cash On Delivery" class="custom-control-input" onclick="show1();">
                <label class="custom-control-label" for="cod">Cash On Delivery</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="credit"  type="radio" name="paymentmode" value="Credit card" class="custom-control-input" onclick="show2();" required="">
                <label class="custom-control-label" for="credit">Credit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit"  type="radio" name="paymentmode" class="custom-control-input" value="Debit card" onclick="show2();"  required="">
                <label class="custom-control-label" for="debit">Debit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" type="radio" name="paymentmode" class="custom-control-input" value="Paypal" onclick="show2();"  required="">
                <label class="custom-control-label" for="paypal">Paypal</label>
              </div>
            </div>
            <div id="div1"  class="hide row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" >
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" >
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div id="div2" class="hide row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="">
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" >
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2023 Company Name</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

    <style>
      .hide {
  display: none;
}
      </style>

    <script>
      function show1(){
  document.getElementById('div1').style.display ='none';
  document.getElementById('div2').style.display ='none';
}
function show2(){
  document.getElementById('div1').style.display = 'block';
  document.getElementById('div2').style.display = 'block';
}
    </script>

</body></html>