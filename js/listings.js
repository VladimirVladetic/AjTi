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
            if (selectedCompany === companyName || selectedCompany === "All") {
                listing.style.display = "block";
            } else {
                listing.style.display = "none";
            }
        });
    });
});
