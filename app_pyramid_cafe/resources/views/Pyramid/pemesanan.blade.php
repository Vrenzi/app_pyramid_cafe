@extends('layouts.order2')

@section('container')
    {{-- @php
        $tables = json_encode($tables);
        echo "
            <script>
                var tables = $tables;
            </script>
        ";
    @endphp --}}
    <div class="col-md-8 p-0 h-100 flex flex-column justify-content-between">
        <div class="hd-menu d-flex align-items-center justify-content-between shadow bg-white">
            <div class="col-sm-5 d-flex align-items-center">
                <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img">
                        <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"
                            d="M4 7h22M4 15h22M4 23h22"></path>
                    </svg>
                </a>
                <h5 class="fs-5 fw-bold text-black ms-4">All Menu's</h5>
            </div>
            {{-- <div class="col-sm-7 d-flex align-items-center search-container-tr">
                <div class="search-mobile-trigger search-icon-transaction">
                    <i class="search-mobile-trigger-icon fas fa-search"></i>
                </div>
                <div class="app-search-box sb-tr">
                    <form class="app-search-form">
                        <input type="text" placeholder="Search..." name="search" class="form-control search-input">
                        <button type="submit" class="btn search-btn btn-primary" value="Search"><i
                                class="fas fa-search"></i></button>
                    </form>
                </div>
            </div> --}}
        </div>
        <div class="wp-menu d-flex flex-column">
            <div class="menu-tr mt-3 mb-3">
                <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#food">
                            <h4>Food</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#drink">
                            <h4>Drink's</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#dessert">
                            <h4>Dessert</h4>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-content menu-tab overflow-auto" style="height: 85%" data-aos="fade-up" data-aos-delay="300">
                <div class="tab-pane fade active show" id="food">
                    <div class="menu-content pe-4 ps-4 d-flex flex-wrap justify-content-between">
                        @foreach ($foods as $food)
                            <div class="menu-item-cart rounded shadow d-flex align-items-center justify-content-around"
                                data-id="{{ $food->id }}" style="margin-bottom: 7%;">
                                <img class="img-fluid" src="{{ asset('storage/images/' . $food->picture) }}" alt=""
                                    srcset="" width="150">
                                <div class="d-flex justify-content-center flex-column">
                                    <div class="product">
                                        <h5 style="font-size: 16px; width: 100px;" class="text-break">{{ $food->name }}</h5>
                                        <h6 style="font-size: 13px;">{{ number_format($food->price, 0, ',', '.') }}</h6>
                                    </div>
                                    <div class="qty d-flex mt-3">
                                        <button class="border-0 rounded bg-transparent RemovetoCart"><i
                                                class="fa-solid fa-minus" style="font-size: 12px;"></i></button>
                                        <div class="qty-numbers me-3 ms-3">
                                            0
                                        </div>
                                        <button class="border-0 rounded bg-transparent AddtoCart"><i
                                                class="fa-solid fa-plus" style="font-size: 12px;"></i></button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="drink">
                    <div class="menu-content pe-4 ps-4 d-flex flex-wrap justify-content-between">
                        @foreach ($drinks as $drink)
                            <div class="menu-item-cart rounded shadow d-flex align-items-center justify-content-around"
                                data-id="{{ $drink->id }}" style="margin-bottom: 7%;">
                                <img class="img-fluid" src="{{ asset('storage/images/' . $drink->picture) }}" alt=""
                                    srcset="" width="150">
                                <div class="d-flex justify-content-center flex-column">
                                    <div class="product">
                                        <h5 style="font-size: 16px; width: 100px;" class="text-break">{{ $drink->name }}</h5>
                                        <h6 style="font-size: 13px;">{{ number_format($drink->price, 0, ',', '.') }}</h6>
                                    </div>
                                    <div class="qty d-flex mt-3">
                                        <button class="border-0 rounded bg-transparent RemovetoCart"><i
                                                class="fa-solid fa-minus" style="font-size: 12px;"></i></button>
                                        <div class="qty-numbers me-3 ms-3">
                                            0
                                        </div>
                                        <button class="border-0 rounded bg-transparent AddtoCart"><i
                                                class="fa-solid fa-plus" style="font-size: 12px;"></i></button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="dessert">
                    <div class="menu-content pe-4 ps-4 d-flex flex-wrap justify-content-between">
                        @foreach ($desserts as $dessert)
                            <div class="menu-item-cart rounded shadow d-flex align-items-center justify-content-around"
                                data-id="{{ $dessert->id }}" style="margin-bottom: 7%;">
                                <img class="img-fluid" src="{{ asset('storage/images/' . $dessert->picture) }}" alt=""
                                    srcset="" width="150">
                                <div class="d-flex justify-content-center flex-column">
                                    <div class="product">
                                        <h5 style="font-size: 16px; width: 100px;" class="text-break">{{ $dessert->name }}</h5>
                                        <h6 style="font-size: 13px;">{{ number_format($dessert->price, 0, ',', '.') }}</h6>
                                    </div>
                                    <div class="qty d-flex mt-3">
                                        <button class="border-0 rounded bg-transparent RemovetoCart"><i
                                                class="fa-solid fa-minus" style="font-size: 12px;"></i></button>
                                        <div class="qty-numbers me-3 ms-3">
                                            0
                                        </div>
                                        <button class="border-0 rounded bg-transparent AddtoCart"><i
                                                class="fa-solid fa-plus" style="font-size: 12px;"></i></button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 h-100 p-0 d-flex flex-column">
        <div class="cart-title d-flex justify-content-between align-items-center p-4 shadow-sm">
            <h5 class="text-white">Current Order</h5>
            <button class="fas fa-broom text-white" onclick="deleteOrder()" role="button"></button>
        </div>
        <div class="cart-body d-flex flex-column justify-content-between" style="height: 780px;">
            <div class="d-flex justify-content-between p-3 align-items-center">
                <h6 class="fw-semibold text-white ms-2 tables-selected">Tanggal</h6>
                <h6 class="fw-semibold text-white me-2" style="font-size: 13px;">{{ now()->format('Y-m-d') }}</h6>
            </div>
            <div class="list-order align-self-center rounded p-4 mb-4">
                <div class="menu-order">

                </div>
            </div>
            <form action="/pemesanan" method="POST" class="align-self-center p-0 m-0" style="width: 90%;">
                @csrf
                <input type="hidden" name="menu_id" id="menu_id">
                <input type="hidden" name="no_table" id="{{ $no_table }}" value="{{ $no_table }}" data-number="{{ $no_table }}">
                <div class="cart-payment p-2 d-flex flex-column rounded">
                    <div class="subtotal d-flex justify-content-between align-items-center mt-3 p-2"
                        style="height: 40px;">
                        <h6 class="text-white">Subtotal</h6>
                        <h6 class="sub-total text-white">Rp 0</h6>
                    </div>
                    <div class="ppn d-flex justify-content-between align-items-center p-2" style="height: 40px;">
                        <h6 class="text-white">Ppn</h6>
                        <h6 class="text-white">10%</h6>
                        <input type="hidden" name="ppn" value="10%">
                    </div>
                    <hr class="mt-3 text-white">
                    <div class="section-transaction d-flex justify-content-between align-items-center p-2">
                        <h6 class="text-white">Total</h6>
                        <h6 class="total-transaction text-white">Rp 0</h6>
                        <input type="hidden" name="total_transaction">
                    </div>
                    <div class="section-pay d-flex justify-content-between align-items-center p-2">
                        <h6 class="text-white">Table : </h6>
                        <input type="hidden" id="{{ $no_table }}" name="no_table" class="text-white" value="{{ $no_table }}" data-number="{{ $no_table }}">{{ $no_table }}</input>
                    </div>
                </div>
                <button type="submit"
                    class="w-100 cart-order p-3 mt-3 mb-3 rounded text-center border-0 text-dark bg-white">
                    Place Order
                </button>
            </form>
        </div>
    </div>
    <script src="/js/order.js"></script>
    <script src="/js/formatmoney.js"></script>
    @include('sweetalert::alert');
@endsection
