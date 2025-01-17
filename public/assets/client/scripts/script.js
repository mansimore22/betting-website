// Toggle side menu visibility
document.querySelector(".menu-icon").addEventListener("click", () => {
    const sideMenu = document.querySelector(".side-menu");
    const body = document.body;
    sideMenu.classList.toggle("open");
    if (sideMenu.classList.contains("open")) {
        body.style.overflow = "hidden";
    } else {
        body.style.overflow = "";
    }
});

// Close side menu when close icon is clicked
document.querySelector(".close-icon").addEventListener("click", () => {
    const sideMenu = document.querySelector(".side-menu");
    const body = document.body;
    sideMenu.classList.remove("open");
    body.style.overflow = "";
});

// login
window.addEventListener("DOMContentLoaded", () => {
    const modal = document.getElementById("rs-login-modal");
    const loginBtn = document.querySelector(".login-btn");
    const overlay = document.createElement("div");

    // Set up overlay styles
    overlay.id = "modal-overlay";
    overlay.style.position = "fixed";
    overlay.style.top = "0";
    overlay.style.left = "0";
    overlay.style.width = "100%";
    overlay.style.height = "100%";
    overlay.style.backgroundColor = "rgba(0, 0, 0, 0.5)";
    overlay.style.zIndex = "999";
    overlay.style.display = "none";
    document.body.appendChild(overlay);

    loginBtn.onclick = () => {
        modal.style.display = "block";
        overlay.style.display = "block";
        document.body.style.overflow = "hidden"; // Disable body scroll
    };

    const closeModal = () => {
        modal.style.display = "none";
        overlay.style.display = "none";
        document.body.style.overflow = "auto"; // Enable body scroll
    };

    document.querySelector(".close-btn").onclick = closeModal;

    window.onclick = (e) => {
        if (e.target === overlay || e.target === modal) {
            closeModal();
        }
    };
});

// deposite button
window.addEventListener("DOMContentLoaded", () => {
    const modal = document.querySelector(".rs-modal");
    const depositBtn = document.getElementById("depositButton");
    const closeBtn = document.querySelector(".rs-close-btn");
    const overlay = document.createElement("div");

    // Set up overlay styles
    overlay.id = "modal-overlay";
    overlay.style.position = "fixed";
    overlay.style.top = "0";
    overlay.style.left = "0";
    overlay.style.width = "100%";
    overlay.style.height = "100%";
    overlay.style.backgroundColor = "rgba(0, 0, 0, 0.5)";
    overlay.style.zIndex = "999";
    overlay.style.display = "none";
    document.body.appendChild(overlay);

    depositBtn.onclick = () => {
        modal.style.display = "block";
        overlay.style.display = "block";
        document.body.style.overflow = "hidden"; // Disable body scroll
    };

    const closeModal = () => {
        modal.style.display = "none";
        overlay.style.display = "none";
        document.body.style.overflow = "auto"; // Enable body scroll
    };

    closeBtn.onclick = closeModal;

    window.onclick = (e) => {
        if (e.target === overlay) {
            closeModal();
        }
    };
});

//
window.addEventListener("DOMContentLoaded", () => {
    // Create a single overlay
    const overlay = document.createElement("div");
    overlay.id = "modal-overlay";
    overlay.style.position = "fixed";
    overlay.style.top = "0";
    overlay.style.left = "0";
    overlay.style.width = "100%";
    overlay.style.height = "100%";
    overlay.style.backgroundColor = "rgba(0, 0, 0, 0.5)";
    overlay.style.zIndex = "999";
    overlay.style.display = "none";
    document.body.appendChild(overlay);

    // Modal setup
    const withdrawalModal = {
        button: document.getElementById("openWithdrawalModal"),
        modal: document.querySelector(".rs-withdrawal-modal"),
        close: document.querySelector(".rs-withdrawal-close-btn"),
    };

    const showModal = (modalElement) => {
        modalElement.style.display = "block";
        overlay.style.display = "block";
        document.body.style.overflow = "hidden"; // Disable body scroll
    };

    const closeModal = (modalElement) => {
        modalElement.style.display = "none";
        overlay.style.display = "none";
        document.body.style.overflow = "auto"; // Enable body scroll
    };

    // Show modal when button is clicked
    withdrawalModal.button.onclick = () => showModal(withdrawalModal.modal);

    // Close modal when close button is clicked
    withdrawalModal.close.onclick = () => closeModal(withdrawalModal.modal);

    // Close modal when clicking on the overlay
    window.onclick = (e) => {
        if (e.target === overlay) {
            closeModal(withdrawalModal.modal);
        }
    };
});

// help button
document.addEventListener("DOMContentLoaded", function () {
    const helpButton = document.querySelector(".rs-help-btn");
    const popup = document.querySelector(".rs-help-popup");
    const sideMenu = document.querySelector(".side-menu");
    const closeButton = document.querySelector("#rs-help-close-btn");

    // Show the popup
    helpButton.addEventListener("click", function () {
        popup.style.display = "block";
        sideMenu.style.display = "none";
    });

    // Close the popup when the close button is clicked
    closeButton.addEventListener("click", function () {
        popup.style.display = "none";
        sideMenu.style.display = "";
    });
});

// Alternate Number Popup
document.addEventListener("DOMContentLoaded", function () {
    const alternateNumberBtn = document.querySelector(
        ".rs-alternatenumber-btn"
    );
    const alternateNumberPopup = document.querySelector(".rs-alternatenumber");
    const closeButton = document.querySelector(".rs-alternatenumber-close-btn");

    // Show the popup
    alternateNumberBtn.addEventListener("click", function () {
        alternateNumberPopup.style.display = "block";
    });

    // Close the popup when the close button is clicked
    closeButton.addEventListener("click", function () {
        alternateNumberPopup.style.display = "none";
    });

    // Optional: Close the popup when clicking outside the modal
    window.addEventListener("click", function (event) {
        if (event.target === alternateNumberPopup) {
            alternateNumberPopup.style.display = "none";
        }
    });
});
// vmail
// Email Modal Functionality
document.addEventListener("DOMContentLoaded", function () {
    const emailButton = document.querySelector(".vmmail-open-button"); // Button to open the modal
    const emailModalOverlay = document.querySelector(".vmmail-modal-overlay"); // Modal overlay
    const closeEmailButton = document.querySelector(".vmmail-close-button"); // Close button inside the modal

    // Show the email modal
    emailButton.addEventListener("click", function () {
        emailModalOverlay.style.display = "flex"; // Show the modal (flex for centering)
    });

    // Close the email modal when the close button is clicked
    closeEmailButton.addEventListener("click", function () {
        emailModalOverlay.style.display = "none"; // Hide the modal
    });

    // Optional: Close the modal when clicking outside of the modal content
    window.addEventListener("click", function (event) {
        if (event.target === emailModalOverlay) {
            emailModalOverlay.style.display = "none";
        }
    });
});

// tab switch in id page
document.addEventListener("DOMContentLoaded", () => {
    const myIdsTab = document.querySelector(".rs-tab:nth-child(1)");
    const createIdTab = document.querySelector(".rs-tab:nth-child(2)");
    const myIdsSection = document.querySelector(".rs-my-id");
    const createIdSection = document.querySelector(".rs-create-id");

    // Ensure "CREATE ID" is active by default
    createIdTab.classList.add("active");
    myIdsSection.style.display = "none";
    createIdSection.style.display = "block";

    // Event listener for the "MY IDs" button
    myIdsTab.addEventListener("click", () => {
        myIdsTab.classList.add("active");
        createIdTab.classList.remove("active");
        myIdsSection.style.display = "block";
        createIdSection.style.display = "none";
    });

    // Event listener for the "CREATE ID" button
    createIdTab.addEventListener("click", () => {
        createIdTab.classList.add("active");
        myIdsTab.classList.remove("active");
        myIdsSection.style.display = "none";
        createIdSection.style.display = "block";
    });
});

// deposit-details

document.addEventListener("DOMContentLoaded", function () {
    const paymentButton = document.querySelector(".rs-payment-btn"); // Button to open the modal
    const depositClosedButton = document.querySelector(".rs-deposit-close-btn"); // Close button inside the modal

    // Show the email modal
    paymentButton.addEventListener("click", function () {
        document.querySelector(".rs-deposit-details-container").style.display =
            "block"; // Show the modal (flex for centering)
    });
    depositClosedButton.addEventListener("click", function () {
        document.querySelector(".rs-deposit-details-container").style.display =
            "none"; // Show the modal (flex for centering)
    });
});
