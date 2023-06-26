@extends('frontend.app')

@section('content')

<div class="container mt-10 mb-10 my-5">
    <div class="card mt-3 shadow product_data">

        @if ($cartitems->count() > 0)

        <div class="card-body">

            @php
                $total = 0;
            @endphp

            @foreach ($cartitems as $index => $item)
                <div class="row pb-5">
                    <div class="col-md-2">
                        <img src="{{ asset('assets/uploads/products/' . $item->products->image) }}" style="width: 75px;" alt="">
                    </div>
                    <div class="col-md-3">
                        <h3>{{ $item->products->name }}</h3>
                    </div>
                    <div class="col-md-2">
                        <h3 id="price-{{ $index }}">{{ $item->products->selling_price . '$' }}</h3>
                    </div>
                    <div class="col-md-3">
                        <input type="hidden" class="prod_id">
                        <span class="minus">-</span>
                        <input type="text" class="num qty_input" value="{{ $item->prod_qty }}">
                        <span class="plus">+</span>
                    </div>
                    <div class="col-md-2">
                        <form action="{{ url('delete-card-item/'.$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-cart-item">
                                <i class="fa fa-trash"></i> Remove
                            </button>
                        </form>
                    </div>
                </div>

                @php
                    $total += $item->products->selling_price * $item->prod_qty;
                @endphp
            @endforeach

        </div>

        <div class="card-footer">
            <h6 style="font-size: 20px">Total Price: <span id="">{{ $total }}</span></h6>

            <a href="{{url('checkout')}}" class="btn btn-outline-success float-end" style="font-size: 20px"> Proceed To Checkout</a>
        </div>
        @else

        <div class="card-body text-center">
            <h2>Your Cart Is Empty</h2>
            <a href="{{url('/')}}" class="btn btn-outline-primary" style="font-size: 16px; width:100$;">Continue Shopping</a>
        </div>

        @endif


    </div>
</div>

@endsection
