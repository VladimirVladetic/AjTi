function openChangeCompanyPopup() {
    document.getElementById("overlay").style.display = "block";
    document.getElementById("popup").style.display = "block";
}

function openChangeRolePopup() {
    document.getElementById("overlay-role").style.display = "block";
    document.getElementById("popup-role").style.display = "block";
}

function closePopup() {
    document.getElementById("overlay").style.display = "none";
    document.getElementById("popup").style.display = "none";
    document.getElementById("overlay-role").style.display = "none";
    document.getElementById("popup-role").style.display = "none";
}

function submitChange() {    
    let companyName = $('#dropdown option:selected').val();
    let id = $('#user-holder').attr("data-value");

    $.ajax({
        type: 'post',
        url: 'ajax_ChangeCompany.php',
        data: {
            id: id,
            companyName : companyName
        },
        success: function(response){
            window.location.href = 'user.php?id=' + id;
        }});

    closePopup();
}

function submitChangeRole() {    
    let role = $('#dropdown-role option:selected').val();
    let id = $('#user-holder').attr("data-value");
    
    $.ajax({
        type: 'post',
        url: 'ajax_ChangeRole.php',
        data: {
            id: id,
            role : role
        },
        success: function(response){
            window.location.href = 'user.php?id=' + id;
        }});

    closePopup();
}