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

<div class="rs-otp-modal" style="display: block;">
    <div class="rs-otp-back-btn">
        <a style="text-decoration: none;color: white;" href=""><span
                style="display: flex;justify-content: center;align-items: center;gap: 10px;font-size: 16px;"><i
                    class="bx bx-left-arrow-alt" style="color:#ffffff;font-size: 20px;"></i>Back</span></a>
        <span class="rs-otp-close-btn"><i class="bx bx-x" style="color:#000000"></i></span>
    </div>
    <div class="rs-otp-logo">
        <img src="http://127.0.0.1:8000/assets/client/logo.png" alt="CBTF Logo">
    </div>
    <h2>Enter verification code</h2>
    <p>We have sent code to +91-9145528661</p>
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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const otpBtn = document.querySelector(".otp-btn");
        const otpModel = document.querySelector(".rs-otp-modal");
        const loginModel = document.querySelector(".rs-login-modal");
        const otpModelBtn = document.querySelector(".rs-otp-close-btn");

        // Show the OTP modal and hide the Login modal when the OTP button is clicked
        otpBtn.addEventListener("click", function() {
            otpModel.style.display = "block"; // Show OTP modal
            loginModel.style.display = "none"; // Hide Login modal
        });

        // Close the OTP modal when the close button is clicked
        otpModelBtn.addEventListener("click", function() {
            otpModel.style.display = "none"; // Hide OTP modal
        });
    });
</script>
