<div id="rs-login-modal" class="modal">
    <div class="modal-content">
        <span class="close-btn"><i class='bx bx-x' style='color:#000000'></i></span>
        <div class="logo">
            <img src="{{ asset('assets/client/logo.png') }}" alt="CBTF Logo" />
        </div>
        <h2>Login | Signup</h2>
        <div class="form-container">
            <!-- resources/views/client/inc/login.blade.php -->
            @if (session('alert'))
                <div class="rs-alert-popup">
                    <div class="rs-alert-header">
                        <div class="rs-alert-icon">
                            <img src="{{ asset('assets/client/images/warning-yellow.svg') }}" alt="Warning" style="width:50px;height:50px;">
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

            <!-- Begin form -->
            <form id="login-form" method="POST" action="{{ route('sendOtp') }}">
                @csrf
                <div class="input-group" style="margin-bottom:10px;">
                    <input type="text" name="name" placeholder="Enter Name" required />
                </div>
                <div class="input-group" style="margin-bottom: 10px;">
                    <select class="country-code" name="country_code">
                        <option value="+91" selected>🇮🇳 +91</option>
                        <option value="+1">🇺🇸 +1</option>
                    </select>
                    <input type="text" name="mobile_number" maxlength="10" placeholder="Enter Mobile Number"
                        required />
                </div>
                <div class="button-group">
                    <button type="submit" name="via" value="sms" class="otp-btn">
                        <i class="bx bxs-message-square-detail" style="color:#dedede;font-size: 19px;"></i>
                        Get OTP on SMS
                    </button>
                    <button type="submit" name="via" value="whatsapp" class="otp-btn whatsapp">
                        <i class="bx bxl-whatsapp" style="color:#ffffff;font-size: 24px;"></i>
                        Get OTP on WhatsApp
                    </button>
                </div>
            </form>
            <!-- End form -->
        </div>
    </div>
</div>

<!-- OTP Modal -->
<div class="rs-otp-modal" style="display: none;">
    <div class="rs-otp-back-btn">
        <a href="" style="text-decoration: none;color: white;">
            <span style="display: flex;justify-content: center;align-items: center;gap: 10px;font-size: 16px;">
                <i class="bx bx-left-arrow-alt" style="color:#ffffff;font-size: 20px;"></i>Back
            </span>
        </a>
        <span class="rs-otp-close-btn"><i class="bx bx-x" style="color:#000000"></i></span>
    </div>
    <div class="rs-otp-logo">
        <img src="{{ asset('assets/client/logo.png') }}" alt="CBTF Logo">
    </div>
    <h2>Enter verification code</h2>
    <p>We have sent a code to +91-9145528661</p>
    <div class="rs-otp-otp-input">
        <input type="text" maxlength="1">
        <input type="text" maxlength="1">
        <input type="text" maxlength="1">
        <input type="text" maxlength="1">
        <input type="text" maxlength="1">
        <input type="text" maxlength="1">
    </div>
    <button>Login</button>
    <p class="rs-otp-resend">Resend OTP in 00:28 </p>
</div>

<!-- Styles for Modals -->
<style>
    .rs-otp-modal {
        background: #1c1c1c;
        border-radius: 8px;
        width: 90%;
        max-width: 350px;
        display: none;
        padding: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        position: fixed;
        top: 50%;
        left: 50%;
        z-index: 99999;
        transform: translate(-50%, -50%);
    }

    .rs-otp-back-btn {
        display: flex;
        align-items: center;
        color: #fff;
        font-size: 16px;
        margin-bottom: 20px;
        cursor: pointer;
    }

    .rs-otp-back-btn span {
        margin-left: 8px;
    }

    .rs-otp-close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 20px;
        background: none;
        border: none;
        color: #fff;
        cursor: pointer;
    }

    .rs-otp-logo {
        text-align: center;
        margin-bottom: 20px;
    }

    .rs-otp-logo img {
        max-width: 150px;
    }

    .rs-otp-modal h2 {
        text-align: center;
        font-size: 18px;
        color: white;
        margin-bottom: 10px;
    }

    .rs-otp-modal p {
        text-align: center;
        font-size: 14px;
        color: white;
        margin-bottom: 20px;
    }

    .rs-otp-otp-input {
        display: flex;
        justify-content: center;
        gap: 8px;
        margin-bottom: 20px;
    }

    .rs-otp-otp-input input {
        width: 35px;
        height: 35px;
        text-align: center;
        font-size: 18px;
        border: 1px solid #333;
        background: #2c2c2c;
        color: #fff;
        border-radius: 4px;
    }

    .rs-otp-modal button {
        width: -webkit-fill-available;
        padding: 12px;
        background: #fff;
        color: #1c1c1c;
        font-size: 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-bottom: 10px;
    }

    .rs-otp-close-btn {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 20px;
        cursor: pointer;
        padding: 6px;
        background: #ffffff;
        border-radius: 50px;
        display: flex;
        color: black;
        color: #fff;
    }

    .rs-otp-resend {
        text-align: center;
        font-size: 14px;
        color: #999;
    }

    .rs-otp-resend a {
        color: #fff;
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .rs-otp-modal {
            width: 95%;
        }

        .rs-otp-modal h2 {
            font-size: 16px;
        }

        .rs-otp-modal p {
            font-size: 13px;
        }
    }
</style>

<!-- JavaScript for Modal Switching -->
<!-- JavaScript for Modal Switching -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const otpBtn = document.querySelector(".otp-btn");
        const otpModel = document.querySelector(".rs-otp-modal");
        const loginModel = document.querySelector(".rs-login-modal");
        const otpModelBtn = document.querySelector(".rs-otp-close-btn");
        const backToLoginBtn = document.querySelector(".rs-otp-back-btn");
        const otpSubmitBtn = otpModel.querySelector("button"); // OTP submit button

        // Show the OTP modal and hide the Login modal when the OTP button is clicked
        otpBtn.addEventListener("click", function() {
            otpModel.style.display = "block"; // Show OTP modal
            loginModel.style.display = "none"; // Hide Login modal
        });

        // Close the OTP modal and show the Login modal again when the close button is clicked
        otpModelBtn.addEventListener("click", function() {
            otpModel.style.display = "none"; // Hide OTP modal
            loginModel.style.display = "block"; // Show Login modal
        });

        // Back to login modal from OTP modal when back button is clicked
        backToLoginBtn.addEventListener("click", function() {
            otpModel.style.display = "none"; // Hide OTP modal
            loginModel.style.display = "block"; // Show Login modal
        });

        // Handle OTP form submission (simulating verification)
        otpSubmitBtn.addEventListener("click", async function() {
            // Get the OTP inputs
            const otpInputs = document.querySelectorAll('.rs-otp-otp-input input');
            const otpCode = Array.from(otpInputs).map(input => input.value).join('');

            // Check if the OTP code is valid (in this case, just check length)
            if (otpCode.length !== 6) {
                alert('Please enter a valid 6-digit OTP.');
                return;
            }
            // Simulate an OTP verification process (you can replace this with actual AJAX or backend verification)
            try {
                // Fake API request for OTP verification
                const response = await fetch('/verify-otp', {
                    method: 'POST',
                    body: JSON.stringify({
                        otp: otpCode
                    }), // Sending the OTP for verification
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]')
                            .value,
                    }
                });

                const data = await response.json();

                if (data.status === 'success') {
                    // OTP is correct, show success message and refresh the page
                    alert('Login successful!');
                    otpModel.style.display = "none"; // Hide OTP modal
                    loginModel.style.display = "none"; // Hide Login modal
                    window.location.reload(); // Refresh the page
                } else {
                    // OTP is incorrect, show error message
                    alert('Invalid OTP, please try again.');
                }
            } catch (error) {
                console.error('Error occurred:', error);
                alert('An error occurred while verifying OTP.');
            }
        });

        // Handle login form submission with fetch
        document.getElementById('login-form').addEventListener('submit', async function(e) {
            e.preventDefault(); // Prevent default form submission

            const formData = new FormData(this);
            const submitButton = e.submitter; // To identify which button was clicked
            formData.append('via', submitButton.value); // Dynamically append the via parameter

            try {
                const response = await fetch(this.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]')
                            .value,
                    },
                });

                if (!response.ok) {
                    const errorData = await response.json();
                    alert(`Error: ${errorData.message || 'Something went wrong.'}`);
                    return;
                }

                const result = await response.json();

                if (result.status === 'success') {
                    alert(result.message);
                    otpModel.style.display = "block"; // Show OTP modal
                    loginModel.style.display = "none"; // Hide Login modal
                } else {
                    alert(`Error: ${result.message || 'Unexpected error occurred.'}`);
                }
            } catch (error) {
                console.error('Error occurred:', error);
                alert(`Unexpected error: ${error.message || 'Network error occurred.'}`);
            }
        });
    });
</script>
