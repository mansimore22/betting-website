<header class="header">
    <div class="top-bar">
        <button class="menu-icon menu-toggle"><i class="bx bx-menu"></i></button>
        <div class="actions">
            @if (Auth::check())
                <div class="user-details">
                    <div class="user-icon"><i class='bx bxs-user-circle'></i></div>
                    <p>{{ Auth::user()->phone_number }}</p>
                </div>
            @else
                <button id="{{ route('loginform') }}" class="login-btn rs-loginButton">Login | Signup</button>
            @endif
        </div>
    </div>

    <!-- Side Menu -->
    <div class="side-menu">
        <div class="menu-header">
            <div class="rs-image-container">
                <img src="{{ asset('assets/client/logo.png') }}" alt="">
                <div class="close-icon">
                    <i class="bx bx-x"></i>
                </div>
            </div>
            <div class="user-details">
                @if (Auth::check())
                    <div class="user-icon">
                        <i class='bx bxs-user-circle' style='color:#d7d7d7; font-size: 25px;'></i>
                    </div>
                    <p>{{ Auth::user()->phone_number }}</p>
                @else
                    <div class="user-icon">
                        <i class='bx bxs-user' style="color:#d0d0d0; font-size: 25px;"></i>
                    </div>
                    <p>Guest User</p>
                @endif
            </div>
        </div>

        <div class="menu-content">
            <ul class="menu-list">
                <li><i class='bx bxs-user' style="color:#d0d0d0; font-size: 25px;"></i><a
                        href="{{ route('profile') }}">Profile</a></li>
                <li><i class='bx bxs-bank' style="color:#d0d0d0; font-size: 25px;"></i> <a
                        href="{{ route('withdrawal') }}">Withdrawal Details</a> </li>
                <li><i class='bx bxs-user-account' style="color:#d0d0d0; font-size: 25px;"></i> <a
                        href="{{ route('passbook') }}">Account Statement</a> </li>
                <li><i class='bx bxs-flag-alt' style="color:#d0d0d0; font-size: 25px;"></i> <a
                        href="{{ route('passbook') }}">Active Bets</a> </li>
                <li class="rs-help-btn"><i class='bx bxs-help-circle' style="color:#d0d0d0; font-size: 25px;"></i> Help
                </li>
            </ul>
        </div>

        <div class="menu-footer">
            @if (Auth::check())
                <button class="logout-button">Logout</button>
            @else
                <button id="{{ route('loginform') }}" class="login-btn rs-loginButton">Login | Signup</button>
            @endif
        </div>
    </div>
</header>
