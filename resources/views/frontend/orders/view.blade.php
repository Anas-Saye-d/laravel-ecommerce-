@extends('frontend.app')

@section('content')

    <div class="container py-5">

        <div class="row">

            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h4>
                            Orders View
                            <a href="{{url('my-orders')}}" 
                            class="btn btn-warning text-white float-end" style="font-size: 16px"> BACK TO MY ORDERS </a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6" style="font-size: 15px">

                                <label for="" class="pt-3">First Name</label>
                                <div class="border p-2">{{$orders->fname}}</div>
                                <label for="" class="pt-3">Last Name</label>
                                <div class="border p-2">{{$orders->lname}}</div>
                                <label for="" class="pt-3">EMAILE</label>
                                <div class="border p-2">{{$orders->email}}</div>
                                <label for="" class="pt-3">contact no.</label>
                                <div class="border p-2">{{$orders->phone}}</div>
                                <label for="" class="pt-3">Shipping Address</label>
                                <div class="border b-2">
                                    {{$orders->address1}},<br>
                                    {{$orders->address2}},<br>
                                    {{$orders->city}},<br>
                                    {{$orders->state}},<br>
                                    {{$orders->country}},<br>
                                </div>
                                <label for="" class="pt-3">Zip code</label>
                                <div class="border p-2">{{$orders->pincode}}</div>

                            </div>
                            <div class="col-md-6">
                                <table class="table table-bordered" style="font-size: 16px">

                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th>price</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $orders->orderitems as $item )
                                            <tr>
                                                <td>{{$item->products->name}}</td>
                                                <td>{{$item->qty}}</td>
                                                <td>{{$item->price}}</td>
                                                <td>
                                                    <img src="{{ asset('assets/uploads/products/' . $item->products->image) }}" style="width: 50px" alt="">
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>

                                </table>
                            </div>
                        </div>

                    </div>
                </div>



            </div>

        </div>

    </div>


@endsection
