    @extends('client.layout.main-layout')

    @section('title')
        withdrawal details
    @endsection
    @section('content')
        <div class="rs-withdrawal-bank-details-container">
            <div class="rs-withdrawal-bank-info">
                <span>Aut perferendis aut</span>
                <div class="rs-withdrawal-contact">
                    <img src="india-flag.png" alt="India Flag" class="rs-withdrawal-flag-icon">
                    <span class="rs-withdrawal-phone-number">+91-9403097079</span>
                </div>
            </div>
            <button class="rs-withdrawal-add-bank-btn">Add New Bank</button>
            <p class="rs-withdrawal-note">No Bank Details found! Adding Bank Details is mandatory for processing withdrawals.
            </p>
        </div>
    @endsection
