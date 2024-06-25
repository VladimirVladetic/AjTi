document.addEventListener("DOMContentLoaded", function() {
    var searchBtn = document.getElementById("searchbtn");
    searchBtn.addEventListener("click", function() {
        var selectedCompany = document.getElementById("info-company").value;
        console.log(selectedCompany);
        var listings = document.querySelectorAll(".listing-container");
        console.log(listings);
        listings.forEach(function(listing) {
            var companyName = listing.getAttribute("data-company-name");
            console.log(companyName);
            if (selectedCompany === companyName || selectedCompany === "Any") {
                listing.style.display = "block";
            } else {
                listing.style.display = "none";
            }
        });
    });
});

function deleteListing(listingId) {
    if (confirm('Are you sure you want to delete this listing?')) {
        $.ajax({
            url: 'ajax_deleteListing.php',
            type: 'POST',
            data: { id: listingId },
            success: function(response) {
                window.location.href = 'listings.php'; 
            },
            error: function() {
                alert('An error occurred while trying to delete the listing.');
            }
        });
    }
}