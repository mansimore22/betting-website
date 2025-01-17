    <!DOCTYPE html>
    <html lang="zxx">

    <head>
        <!-- Metas -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="author" content="rupesh sutar">
        @yield('meta')
        <!-- Title  -->
        <title>@yield('title')</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('client/assets/imgs/favicon.ico') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
            rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">
        <!-- Font -->
        <link rel="stylesheet" href="{{ asset('client/assets/css/satoshi.css') }}">
        <!-- Core Style Css -->
        <link rel="stylesheet" href="{{ asset('assets/client/css/style.css') }}">
    </head>

    <body>
        <div id="main-container">
            @include('client.inc.header')
            <div id="smooth-content">
                <main class="main-bg ">
                    @yield('content')
                </main>
                @include('client.inc.footer')
            </div>
            <!-- Login Modal -->
            @include('client.inc.login')
            {{-- deposite --}}
            {{-- @include('client.inc.deposite')
            @include('client.inc.withdrow') --}}
            <style>
                .submit-btn {
                    padding: 10px 20px;
                    /* Adjust padding as needed */
                    border-radius: 50px;
                    height: 40px;
                    /* Adjust height as needed */
                    width: 200px;
                    /* Adjust width as needed */
                    font-size: 20px;
                    cursor: pointer;
                    background: rgb(136, 0, 253);
                    color: white;
                    border: none;
                    display: block;
                    /* Makes the button a block-level element */
                    margin: 20px auto;
                    /* Centers the button horizontally */
                    text-align: center;
                    /* Centers the text inside the button */
                }
            </style>
            <!-- Deposit Modal -->
            <div class="rs-modal">
                <div class="rs-modal-header">
                    <h2>Deposit</h2>
                    <button class="rs-close-btn">×</button>
                </div>
                <div class="rs-modal-body">
                    <div class="rs-balance-section">
                        <span>Available Balance</span>
                        <p>0</p>
                    </div>
                    <div class="rs-deposit-section">
                        <label for="rs-deposit-coins">Deposit Coins</label>
                        <input type="number" id="rs-deposit-coins" placeholder="Enter Coins" name="deposit_coins"
                            min="500" required>
                        <p class="rs-deposit-note">Minimum deposit amount is 500 coins</p>
                    </div>
                    <button class="rs-payment-btn">Make Payment</button>
                </div>
            </div>

            <!-- Screenshot Upload Modal -->
            <div class="rs-deposit-details-container" style="display: none;">
                <form action="{{ route('deposits.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="rs-deposit-top">
                        <h2 style="color: white; font-size: 22px;">Deposit Details</h2>
                        <button type="button" class="rs-deposit-close-btn">×</button>
                    </div>
                    <div class="rs-deposit-middle">
                        <div class="rs-deposit-bank-details">
                            <div class="bank-logo-container">
                                <i class="bx bxs-bank" style="color: #6a6a6a;"></i>
                                <h1 style="color: white; font-size: 20px;">Bank Details</h1>
                            </div>
                            <div class="bank-title-container">
                                <div class="bank-title-left">
                                    <li>Bank name</li>
                                    <li>Account Holder name</li>
                                    <li>Account number</li>
                                    <li>IFSC code</li>
                                </div>
                                <div class="bank-title-right">
                                    <li>Bank of Baroda <i class="bx bx-copy-alt" style="color: #6a6a6a;"></i> Copy</li>
                                    <li>John Doe <i class="bx bx-copy-alt" style="color: #6a6a6a;"></i> Copy</li>
                                    <li>568855995885 <i class="bx bx-copy-alt" style="color: #6a6a6a;"></i> Copy</li>
                                    <li>BAI74HD7392H <i class="bx bx-copy-alt" style="color: #6a6a6a;"></i> Copy</li>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rs-deposit-bottom">
                        <div class="file-upload-container">
                            <label for="file-upload" class="file-upload-label">
                                <span class="plus-icon">+</span> Click here to upload payment screenshot
                            </label>
                            <input type="file" id="file-upload" name="screenshot_path" class="file-upload-input"
                                required>
                            <!-- Preview container -->
                            <div id="screenshot-preview" class="screenshot-preview">
                                <img src="#" alt="Screenshot Preview" id="screenshot-preview-img"
                                    style="display: none; width: 100%; margin-top: 10px;">
                            </div>
                        </div>

                        <input type="hidden" name="deposit_coins" id="deposit-coins-hidden">
                        <button type="submit" class="submit-btn">Submit</button>
                    </div>
                </form>
            </div>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const paymentButton = document.querySelector(".rs-payment-btn");
                    const depositCloseButton = document.querySelector(".rs-deposit-close-btn");
                    const depositDetailsContainer = document.querySelector(".rs-deposit-details-container");
                    const depositCoinsInput = document.getElementById("rs-deposit-coins");
                    const depositCoinsHidden = document.getElementById("deposit-coins-hidden");

                    const fileInput = document.getElementById("file-upload");
                    const screenshotPreview = document.getElementById("screenshot-preview-img");

                    // Show deposit details popup
                    paymentButton.addEventListener("click", function() {
                        const depositCoins = depositCoinsInput.value;
                        if (depositCoins < 500) {
                            alert("Minimum deposit amount is 500 coins.");
                            return;
                        }
                        depositCoinsHidden.value = depositCoins; // Pass coins value to hidden input
                        depositDetailsContainer.style.display = "block"; // Show the modal
                    });

                    // Close deposit details popup
                    depositCloseButton.addEventListener("click", function() {
                        depositDetailsContainer.style.display = "none"; // Hide the modal
                    });

                    // Handle file input change and display preview
                    fileInput.addEventListener("change", function() {
                        const file = this.files[0];
                        if (file) {
                            const reader = new FileReader();
                            reader.onload = function(e) {
                                screenshotPreview.src = e.target.result; // Set image preview source
                                screenshotPreview.style.display = "block"; // Show the image preview
                            };
                            reader.readAsDataURL(file); // Read the file as a data URL
                        } else {
                            screenshotPreview.style.display = "none"; // Hide the preview if no file is selected
                        }
                    });
                });
            </script>
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
            {{-- rs-withdrawal-modal  --}}
            {{-- help popup --}}
            @include('client.inc.help')
            {{-- alert message --}}
            @include('client.inc.alert')
            {{-- alternate number --}}
            <div class="rs-alternatenumber">
                <div class="rs-alternatenumber-modal">
                    <div class="rs-alternatenumber-modal-header">
                        <h2>Alternate Number</h2>
                        <button class="rs-alternatenumber-close-btn">&times;</button>
                    </div>
                    <div class="rs-alternatenumber-modal-body">
                        <label for="mobile-number">Mobile Number</label>
                        <div class="rs-alternatenumber-input-container">
                            <div class="rs-alternatenumber-country-code">
                                <select id="country-code" class="rs-alternatenumber-country-select">
                                    <option value="+91" data-flag="flag-india.png">🇮🇳 +91</option>
                                    <option value="+1" data-flag="flag-usa.png">🇺🇸 +1</option>
                                    <option value="+44" data-flag="flag-uk.png">🇬🇧 +44</option>
                                    <option value="+61" data-flag="flag-australia.png">🇦🇺 +61</option>
                                    <option value="+81" data-flag="flag-japan.png">🇯🇵 +81</option>
                                </select>
                            </div>
                            <input type="text" id="mobile-number" placeholder="Enter Mobile number" />
                        </div>
                        <button class="rs-alternatenumber-verify-btn">Verify</button>
                    </div>
                </div>
            </div>
            {{-- verify mail --}}
            <div class="vmmail-modal-overlay">
                <div class="vmmail-modal">
                    <div class="vmmail-modal-header">
                        <h2>Email</h2>
                        <button class="vmmail-close-button">&times;</button>
                    </div>
                    <div class="vmmail-modal-content">
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="Enter Email ID">
                        <button class="vmmail-verify-button">Verify</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Custom Scripts -->
        <script src="{{ asset('assets/client/scripts/script.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        {{-- <script>
            document.addEventListener("DOMContentLoaded", function() {
                const alertPopup = document.querySelector(".rs-alert-popup");
                const alertMessage = document.querySelector(".rs-alert-body p"); // Target the paragraph for the message

                // Hide the alert initially
                alertPopup.style.display = "none";

                // Example condition to trigger the alert (e.g., successful login or deposit)
                const successfulDeposit = true; // Replace with your condition

                if (successfulDeposit) {
                    showAlert("Deposit successful!");
                }
            });

            // Function to show alert
            function showAlert(message) {
                const alertPopup = document.querySelector(".rs-alert-popup");
                const alertMessage = document.querySelector(".rs-alert-body p"); // Target the paragraph for the message

                alertMessage.textContent = message; // Set the alert message
                alertPopup.style.display = "block"; // Show the alert

                // Hide the alert after 5 seconds
                setTimeout(function() {
                    alertPopup.style.display = "none"; // Hide the alert after 5 seconds
                }, 5000);
            }
        </script> --}}

    </body>
    @yield('script')

    </html>
