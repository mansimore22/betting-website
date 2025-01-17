<!-- Withdraw Modal content -->
@if (session('alert'))
    <div class="rs-alert-popup">
        <div class="rs-alert-header">
            <div class="rs-alert-icon">
                <img src="{{ asset('assets/client/images/warning-yellow.svg') }}" alt="Warning"
                    style="width:50px;height:50px;">
            </div>
            <h3 class="rs-alert-title">Alert</h3>
        </div>
        <div class="rs-alert-body">
            <p>{{ session('alert') }}</p> <!-- Display the alert message -->
        </div>
        <div class="rs-alert-footer">
            <a href="{{ route('loginform') }}" class="rs-alert-button">OK</a>
        </div>
    </div>
@endif
<!-- Withdraw modal form or other content goes here -->

<div class="rs-withdrawal-modal">
    <div class="rs-withdrawal-modal-header">
        <h2>Withdraw</h2>
        <button class="rs-withdrawal-close-btn">×</button>
    </div>

    <div class="rs-withdrawal-modal-body">
        <div class="rs-withdrawal-balance-section">
            <p>Available Balance</p>
            <h3>0</h3>
        </div>
        <div class="rs-withdrawal-info">
            <p>Withdrawable Coins: <span>0</span></p>
        </div>
        <div class="rs-withdrawal-input-group">
            <label for="rs-withdrawal-coins">Enter Coins</label>
            <input type="number" id="rs-withdrawal-coins" placeholder="Enter coins" />
        </div>
        <p class="rs-withdrawal-note">Minimum withdrawal amount is 100 coins</p>
    </div>
    <div class="rs-withdrawal-modal-footer">
        <button class="rs-withdrawal-btn">Withdraw Coins</button>
    </div>
</div>
