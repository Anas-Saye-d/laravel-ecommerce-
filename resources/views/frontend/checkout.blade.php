@extends('frontend.app')

@section('content')

    <div class="container mt-5 mb-5" style="font-size: 20px">
        <form action="{{url('place-order')}}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <h3>Basic Details</h3>
                            <hr>
                            <style>
                                label{
                                    font-weight: 700;

                                }
                                input{
                                    font-size: 13px !important;
                                    padding: 3px;
                                    font-weight: 400 !important;
                                }
                                .col-md-6{
                                    padding-top: 10px;
                                }
                            </style>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="" style="font-size: 15px">First Name</label>
                                    <input type="text" class="form-control" value="{{Auth::user()->name}}" name="fname" placeholder="Enter First Name">
                                </div>
                                <div class="col-md-6">
                                    <label for="" style="font-size: 15px">Last Name</label>
                                    <input type="text" class="form-control" value="{{Auth::user()->lname}}" name="lname" placeholder="Enter Last Name">
                                </div>
                                <div class="col-md-6">
                                    <label for="" style="font-size: 15px">Email</label>
                                    <input type="text" class="form-control" value="{{Auth::user()->email}}" name="email" placeholder="Enter Email">
                                </div>
                                <div class="col-md-6">
                                    <label for="" style="font-size: 15px">Phone Number</label>
                                    <input type="text" class="form-control" value="{{Auth::user()->phone}}" name="phone" placeholder="Enter Phone Number">
                                </div>
                                <div class="col-md-6">
                                    <label for="" style="font-size: 15px">Address 1</label>
                                    <input type="text" class="form-control" value="{{Auth::user()->address1}}" name="address1" placeholder="Enter Address 1">
                                </div>
                                <div class="col-md-6">
                                    <label for="" style="font-size: 15px">Address 2</label>
                                    <input type="text" class="form-control" value="{{Auth::user()->address2}}" name="address2" placeholder="Enter Address 2">
                                </div>
                                <div class="col-md-6">
                                    <label for="" style="font-size: 15px">City</label>
                                    <input type="text" class="form-control" value="{{Auth::user()->city}}" name="city" placeholder="Enter your City">
                                </div>
                                <div class="col-md-6">
                                    <label for="" style="font-size: 15px">State</label>
                                    <input type="text" class="form-control" value="{{Auth::user()->state}}" name="state" placeholder="Enter your State">
                                </div>
                                <div class="col-md-6">
                                    <label for="" style="font-size: 15px">Country</label>
                                    <input type="text" class="form-control" value="{{Auth::user()->country}}" name="country" placeholder="Enter your Country">
                                </div>
                                <div class="col-md-6">
                                    <label for="" style="font-size: 15px">Pin Code</label>
                                    <input type="text" class="form-control" value="{{Auth::user()->pincode}}" name="pincode" placeholder="Enter your Pin Code">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <h3> Order Details </h3>
                            <hr>

                            <table class="table table-striped table-bordered" style="width: 100% !important">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>QTY</th>
                                        <th>Price</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($cartitems as $item )
                                    <tr>
                                        <td>{{$item->products->name}}</td>
                                        <td>{{$item->prod_qty}}</td>
                                        <td>{{$item->products->selling_price}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <hr>
                            <button type="submit" class="btn btn-primary" style="font-size: 15px; width:100%;">
                                Place Order
                            </button>

                        </div>
                    </div>
                </div>
            </div>
         </form>
    </div>

@endsection
