// JavaScript for Modal Functionality
document.addEventListener('DOMContentLoaded', function () {
    var modal = document.getElementById("appointmentModal");
    var btn = document.getElementById("bookAppointmentBtn");
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function () {
        modal.style.display = "flex";
    }

    span.onclick = function () {
        modal.style.display = "none";
    }

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});
// Add this to your script.js or any JavaScript file included in your HTML

document.addEventListener('DOMContentLoaded', function() {
    const campaignBtn = document.getElementById('campaignBtn');
    const campaignSection = document.getElementById('campaign');

    if (campaignBtn && campaignSection) {
        // Show campaign photos section when hovering over the button
        campaignBtn.addEventListener('mouseenter', function() {
            campaignSection.style.display = 'block';
        });

        // Hide campaign photos section when not hovering over the button
        campaignBtn.addEventListener('mouseleave', function() {
            campaignSection.style.display = 'none';
        });
    }
});
