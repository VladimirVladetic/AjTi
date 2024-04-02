function showSpinner() {

    document.querySelector(".spinner-container").style.display = "flex";

    // let spinnercontainer = $(".spinner-container");
    // spinnercontainer.style.display = "flex";

    // let id = document.getElementById("id-number").value;

    let value = $("#search-value").val();

    // alert(value);

    setTimeout(function() {
        hideSpinner();
    }, 5000);

    if(isNumber(value)){
        $.ajax({
            type: 'post',
            url: 'ajax_SearchUserByID.php',
            data: {
                id: value
            },
            success: function(response){
                //alert(response);
                if (response.includes("success")) {
                    window.location.href = 'user.php?id=' + value;
                } else {
                    alert("No such user exists.");
                    window.location.href = "userList.php"
                }
            }});
    }
    else{
        alert("Please type in a number.");
        hideSpinner();
    }

    

}

function hideSpinner() {
    document.querySelector(".spinner-container").style.display = "none";
}

function isNumber(value){
    return !isNaN(value);
}