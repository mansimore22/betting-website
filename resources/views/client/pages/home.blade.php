@extends('client.layout.main-layout')

@section('title')
    Home
@endsection
@section('content')
    <!-- ==================== Start Home ==================== -->
    <div class="wallet-section">
        <div class="wallet-container">
            <button id="depositButton" class="wallet-btn">Deposit <img src="{{ asset('assets/client/images/arrow-up.svg') }}"
                    alt=""></button>
            <div class="wallet-info">
                <img src="{{ asset('assets/client/logo.png') }}" alt="">
                <p>WALLET BALANCE</p>
                <p class="balance"><i class='bx bxs-coin-stack'></i> 0</p>
            </div>
            <button id="openWithdrawalModal" class="wallet-btn">Withdraw <img
                    src="{{ asset('assets/client/images/arrow-down.svg') }}" </button>
        </div>
    </div>
    <div class="create-id" onclick="window.location.href='{{ route('id') }}'">
        <div class="create-id-btn">
            <button>
                <i class='bx bxs-plus-circle' style="color:#ffffff;font-size: 30px;"></i>
                Create new ID from 70+ websites
            </button>
            <i class='bx bxs-right-arrow-alt' style="color:#ffffff;font-size: 30px;"></i>
        </div>
    </div>
     <div class="game-section">
        @foreach ($banners as $banner)
            <div class="image-container">
                <img src="{{ asset($banner->image_path) }}" alt="Banner Image">
            </div>
        @endforeach
    </div>
    <!-- ==================== End Home==================== -->
@endsection
