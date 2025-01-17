    @extends('client.layout.main-layout')

    @section('title')
        passbook
    @endsection
    @section('content')
        <div class="rs-passbook-container">
            <!-- Tab Navigation -->
            <div class="rs-passbook-tab-nav">
                <div class="rs-passbook-tab rs-active">All Bet Transactions</div>
                {{-- <div class="rs-passbook-tab">Bet History</div> --}}
            </div>

            <!-- Bet History Section -->
            <div class="rs-passbook-content">
                <div class="rs-passbook-header">
                    <span>Bet History</span>
                    <select class="rs-passbook-filter-dropdown">
                        <option value="all">All</option>
                        <option value="filter1">Filter 1</option>
                        <option value="filter2">Filter 2</option>
                    </select>
                </div>
                <div class="rs-passbook-message">No bets placed yet, Place your bet now!</div>
            </div>
        </div>
    @endsection
