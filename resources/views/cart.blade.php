@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    
    <style>
        .cart-page-bg {
            background-color: #0f4719ff;
            padding-top: 50px;
            padding-bottom: 50px;
        }
        .container {
             margin-top: 0 !important;
             margin-bottom: 0 !important;
        }
    </style>
@endsection

@section('content')

<div class="cart-page-bg"> 
    
    <div class="container min-h-screen">
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="card p-3" style="background-color: #F0F5F0; border-radius: 10px;">
                    
                    <div class="card-header border-0 pt-3" style="background-color: #F0F5F0; border-bottom: none;"> 
                        <h4 class="fw-bold mb-0">
                            <i class="bi bi-list-ul me-2" style="color: #3B7A57;"></i>
                            Your selected plants
                        </h4>
                    </div>
                    
                    <div class="card-body">
                        @forelse ($cartItems as $item)
                            
                            @if ($item->plant)
                                <div class="d-flex align-items-center mb-4">
                                    <img src="{{ asset($item->plant->image_url) }}" alt="{{ $item->plant->name }}" class="cart-item-img">
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="fw-bold mb-1">{{ $item->plant->name }}</h6>
                                        <p class="text-muted small mb-2">
                                            Rp. {{ number_format($item->plant->price, 0, ',', '.') }} x {{ $item->quantity }}
                                        </p>
                                        <div class="d-flex align-items-center">
                                            <button class="btn btn-sm" style="border-color: #3B7A57; color: #3B7A57;">-</button>
                                            <span class="mx-3 fw-bold">{{ $item->quantity }}</span>
                                            <button class="btn btn-sm" style="border-color: #3B7A57; color: #3B7A57;">+</button>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <span class="fw-bold">Rp. {{ number_format($item->plant->price * $item->quantity, 0, ',', '.') }}</span>
                                    </div>
                                </div>
                                @if (!$loop->last)
                                    <hr style="border-top: 1px solid rgba(0, 0, 0, 0.1);">
                                @endif
                            @else
                                <div class="alert alert-warning d-flex justify-content-between align-items-center mb-4" role="alert">
                                    <span>❌ Plant unavailable. Item has been removed.</span>
                                </div>
                            @endif

                        @empty
                            <p class="w-100 text-center">You have no plants in your cart</p>
                        @endforelse
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card" style="background-color: #F0F5F0; border-radius: 10px;">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-4">Payment Summary</h5>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Subtotal</span>
                            <span class="fw-bold">Rp {{ number_format($subtotal, 0, ',', '.') }}</span>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <span class="text-muted">Fee</span>
                            <span class="fw-bold">Rp {{ number_format($fee, 0, ',', '.') }}</span>
                        </div>

                        <hr>

                        <div class="d-flex justify-content-between fw-bold fs-5 mt-3">
                            <span>Total Price</span>
                            <span>Rp {{ number_format($totalPrice, 0, ',', '.') }}</span>
                        </div>

                        <a href="#" class="btn w-100 mt-4 checkout-btn" 
                           style="background-color: #3B7A57; border-color: #3B7A57; color: white;">
                           Check Out
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection