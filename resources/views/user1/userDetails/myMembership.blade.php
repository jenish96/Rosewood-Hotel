@extends('user.master.masterpage')

@section('title')
    Rosewood - Membership
@endsection

@section('css')
@endsection

@section('main')
    <div class="preloader">
        <div class="vertical-centered-box">
            <div class="content">
                <div class="loader-circle"></div>
                <div class="loader-line-mask">
                    <div class="loader-line"></div>
                </div>
                <img src="assets/images/preloader.png" alt="">
            </div>
        </div>
    </div>
    <div class="row" style="background-color: rgb(206, 29, 29); padding:20px;">
        <h2 style="text-align: center; color:white;">Membership</h2>
    </div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="cart-area section-padding">
        <div class="container">
            <div class="form">
                <div class="cart-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <form action="https://wpocean.com/html/tf/parador/cart">
                                <table class="table-responsive cart-wrap" border="1">
                                    <thead>
                                        <tr><h2 style="background-color: rgb(182, 19, 19); padding:10px;color:white;">Membership</h2></tr>
                                        <tr>
                                            <th>No</th>
                                            <th>Membership</th>
                                            <th>Start</th>
                                            <th>End</th>
                                            <th>Price</th>
                                            <th>Transaction No</th>
                                            
                                            {{-- <th class="remove remove-b">Pay</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($membershipData as $row)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}
                                                
                                                <td>{{ $row->name  }}
                                                </td>
                                                <td>
                                                    <?php echo date('d-M-Y', strtotime($row->start_date)); ?>
                                                </td>
                                                <td>
                                                    <?php echo date('d-M-Y', strtotime($row->end_date)); ?>
                                                </td>
                                                <td class="ptice">{{ $row->amount }}</td>
                                                <td class="ptice">{{ $row->tran_no }}</td>
                                            
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </form>
                            {{-- <div class="submit-btn-area">
                                <ul>
                                    <li><a class="theme-btn" href="shop.html">Continue Shopping <i
                                                class="fa fa-angle-double-right"></i></a></li>
                                    <li><button type="submit">Update Cart</button></li>
                                </ul>
                            </div>
                            <div class="cart-product-list">
                                <ul>
                                    <li>Total product<span>( 05 )</span></li>
                                    <li>Sub Price<span>$2250</span></li>
                                    <li>Vat<span>$50</span></li>
                                    <li>Eco Tax<span>$100</span></li>
                                    <li>Delivery Charge<span>$100</span></li>
                                    <li class="cart-b">Total Price<span>$2500</span></li>
                                </ul>
                            </div> --}}

                            {{-- <div class="submit-btn-area">
                                <ul>
                                    <li><a class="theme-btn" href="checkout.html">Proceed to Checkout <i
                                                class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
