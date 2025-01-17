
<style>
   .submit-btn {
    padding: 10px 20px; /* Adjust padding as needed */
    border-radius: 50px;
    height: 40px; /* Adjust height as needed */
    width: 200px; /* Adjust width as needed */
    font-size: 20px;
    cursor: pointer;
    background: rgb(136, 0, 253);
    color: white;
    border: none;
    display: block; /* Makes the button a block-level element */
    margin: 20px auto; /* Centers the button horizontally */
    text-align: center; /* Centers the text inside the button */
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
            <input type="number" id="rs-deposit-coins" placeholder="Enter Coins" name="deposit_coins" min="500"
                required>
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
                <input type="file" id="file-upload" name="screenshot_path" class="file-upload-input" required>
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
    document.addEventListener("DOMContentLoaded", function () {
        const paymentButton = document.querySelector(".rs-payment-btn");
        const depositCloseButton = document.querySelector(".rs-deposit-close-btn");
        const depositDetailsContainer = document.querySelector(".rs-deposit-details-container");
        const depositCoinsInput = document.getElementById("rs-deposit-coins");
        const depositCoinsHidden = document.getElementById("deposit-coins-hidden");

        const fileInput = document.getElementById("file-upload");
        const screenshotPreview = document.getElementById("screenshot-preview-img");

        // Show deposit details popup
        paymentButton.addEventListener("click", function () {
            const depositCoins = depositCoinsInput.value;
            if (depositCoins < 500) {
                alert("Minimum deposit amount is 500 coins.");
                return;
            }
            depositCoinsHidden.value = depositCoins; // Pass coins value to hidden input
            depositDetailsContainer.style.display = "block"; // Show the modal
        });

        // Close deposit details popup
        depositCloseButton.addEventListener("click", function () {
            depositDetailsContainer.style.display = "none"; // Hide the modal
        });

        // Handle file input change and display preview
        fileInput.addEventListener("change", function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
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

