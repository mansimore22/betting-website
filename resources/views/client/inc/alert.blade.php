<div class="rs-alert-popup">
    <div class="rs-alert-header">
        <div class="rs-alert-icon">
            <img src="{{ asset('assets/client/images/warning-yellow.svg') }}" alt="Warning">
        </div>
        <h3 class="rs-alert-title">Alert</h3>
    </div>
    <div class="rs-alert-body">
        <p>{{ $message ?? 'Unauthorized access detected.' }}</p>
    </div>
    <div class="rs-alert-footer">
        <a href="{{ route('loginform') }}" class="rs-alert-button">Log In</a>
    </div>
</div>
