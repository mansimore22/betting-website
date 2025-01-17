    @extends('client.layout.main-layout')

    @section('title')
        Profile
    @endsection
    @section('content')
        <div class="rs-profile-container">
            <div class="rs-profile-header">
                <div class="rs-profile-profile">
                    <p>Guest User</p>
                </div>

            </div>
            <div class="rs-profile-dashboard">
                <div class="rs-profile-user-info">
                    <div class="rs-profileuser-details">
                        <span class="rs-profile-user-name">Aut perferendis aut</span>
                        {{-- <span class="flag">🇮🇳</span> --}}
                        <span class="rs-profile-phone-number">+91-9403097079</span>
                    </div>
                    <button class="rs-profile-change-password">Change Password</button>
                </div>
                <div class="rs-profile-account-info">
                    <div class="rs-profile-balance-section">
                        <span class="rs-profile-balance-label">Balance</span>
                        <span class="rs-profile-balance-amount">0</span>
                    </div>
                    <div class="rs-profile-actions">
                        <button class="rs-profile-action-btn deposit-btn">Deposit</button>
                        <button class="rs-profile-action-btn withdraw-btn">Withdraw</button>
                    </div>
                </div>
            </div>
            <div class="rs-profile-menu">
                <div class="rs-profile-menu-item">
                    <span><i class='bx bxs-phone-call' style="font-size: 20px;color:#c0c0c0"></i></span> Alternate Number
                </div>
                <div class="rs-profile-menu-item">
                    <span><i class='bx bxs-envelope' style="font-size: 20px;color:#c0c0c0"></i></span> Add Email
                </div>
                <div class="rs-profile-menu-item">
                    <span><i class='bx bxs-flag-alt' style="font-size: 20px;color:#c0c0c0"></i></span> Active Bets
                </div>
                <div class="rs-profile-menu-item">
                    <span><i class='bx bxs-user-account' style="font-size: 20px;color:#c0c0c0"></i></span> Account Statement
                </div>
                <div class="rs-profile-menu-item">
                    <span><i class='bx bxs-bank' style="font-size: 20px;color:#c0c0c0"></i></span> Banking
                </div>
                <div class="rs-profile-menu-item">
                    <span><i class='bx bxs-shield-alt-2' style="font-size: 20px;color:#c0c0c0"></i></span> Rules
                </div>

            </div>
            <div class="rs-profile-footer">
                <button class="rs-profile-button">Login | Signup</button>
            </div>
        </div>
    @endsection
