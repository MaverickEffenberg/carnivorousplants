@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endsection

@section('content')
<div class="container my-5 min-h-screen">
    <div class="row g-4">
        {{-- Left Column: Cart Items --}}
        <div class="col-lg-8">
            <div class="card p-3">
                <div class="card-header bg-white border-0 pt-3">
                    <h4 class="fw-bold mb-0">
                        <i class="bi bi-list-ul me-2" style="color: #e74c3c;"></i>
                        Your selected meals
                    </h4>
                </div>
                <div class="card-body">
                    @forelse ($cartItems as $item)
                        <div class="d-flex align-items-center mb-4">
                            <img src="{{ asset($item->meal->image_url) }}" alt="{{ $item->meal->name }}" class="cart-item-img">
                            <div class="flex-grow-1 ms-3">
                                <h6 class="fw-bold mb-1">{{ $item->meal->name }}</h6>
                                <p class="text-muted small mb-2">
                                    Rp. {{ number_format($item->meal->price, 0, ',', '.') }} x {{ $item->quantity }}
                                </p>
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-sm btn-outline-secondary quantity-btn">-</button>
                                    <span class="mx-3 fw-bold">{{ $item->quantity }}</span>
                                    <button class="btn btn-sm btn-outline-secondary quantity-btn">+</button>
                                </div>
                            </div>
                            <div class="ms-3">
                                <span class="fw-bold">Rp. {{ number_format($item->meal->price * $item->quantity, 0, ',', '.') }}</span>
                            </div>
                        </div>
                    @empty
                        <p class="w-100 text-center">You have no meals in your cart</p>
                    @endforelse
                </div>
            </div>
        </div>

        {{-- Right Column: Payment Summary --}}
        <div class="col-lg-4">
            <div class="card">
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

                    <a href="#" class="btn btn-primary w-100 mt-4 checkout-btn">Check Out</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
