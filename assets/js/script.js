// Prevent form resubmission
if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
}

// Show save notification
function showSaveNotification() {
  const notification = document.getElementById("saveNotification");
  if (notification) {
    notification.style.display = "block";
    setTimeout(() => {
      notification.style.display = "none";
    }, 2000);
  }
}

// Confirm reset function
function confirmReset() {
  if (confirm("Apakah Anda yakin ingin mereset semua jawaban?")) {
    document.getElementById("resetForm").submit();
  }
}

// Add event listeners when document is ready
document.addEventListener("DOMContentLoaded", function () {
  // Add hover effect to nav items
  const navItems = document.querySelectorAll(".nav-link");
  navItems.forEach((item) => {
    item.addEventListener("mouseenter", function () {
      this.style.transform = "translateY(-2px)";
    });
    item.addEventListener("mouseleave", function () {
      this.style.transform = "translateY(0)";
    });
  });

  // Save answers automatically when changed
  const answerInputs = document.querySelectorAll('input[name="answer"]');
  answerInputs.forEach((input) => {
    input.addEventListener("change", function () {
      showSaveNotification();
    });
  });
});
