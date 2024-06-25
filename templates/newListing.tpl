<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/essentials.css">
    <link rel="stylesheet" href="./styles/newEntity.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <script src="./js/essentials.js" defer></script>
    <title>Make listing</title>
</head>

<body>

    <div class="central-container">

        {if $sessionrole=="admin" || $sessionrole=="employer"}

            <h1>Enter new listing information</h1>  

                <form id="insert-listing-form" method="post" action="newListing.php">

                <label for="input-listing-name">Listing name:</label><br>
                <input type="text" name="name" placeholder="Enter listing name" id="input-listing-name"><br>

                <label for="input-listing-city">Small description:</label><br>
                <textarea type="text" name="smalldesc" placeholder="Enter listing small description" id="input-listing-smalldesc"></textarea><br>

                <label for="input-listing-country">Information:</label><br>
                <textarea type="text" name="info" placeholder="Enter listing information" id="input-listing-info"></textarea><br>

                <label for="input-listing-sector">Payment in euros:</label><br>
                <input type="text" name="payment" placeholder="Format eg. (amount) per hour" id="input-listing-payment"><br>

            </form>

            <div class="button-container">
                <button class="basic-button" form="insert-listing-form" id="enter-info-button">Enter Information</button>
                <button class="basic-button" onclick='redirect("userList.php")'>User list</button>
                <button class="basic-button" onclick='redirect("listings.php")'>Job listings</button>
            </div>

        {/if}

    </div>

    {if $listingexists == 1}
        <div class="alert" id="failAlert" style="display: block;">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <p class="alertText">Listing exists in database.</p>
        </div> 
    {/if}

    {if $invalidInfo == 1}
        <div class="alert" id="failAlert" style="display: block;">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <p class="alertText">Enter all listing information.</p>
        </div> 
    {/if}

</body>