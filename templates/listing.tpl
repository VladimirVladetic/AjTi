<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/listing.css">
    <link rel="stylesheet" href="./styles/essentials.css">
    <link rel="stylesheet" href="./styles/grid1-2.css">
    {* <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> *}
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <script src="./js/essentials.js" defer></script>
    <script src="./js/listings.js" defer></script>
    <title>Listing: {$name}</title>
</head>
<body>

    <div class="container">

        <div class="leftColumn">

            <img class="logo" src="./images/AT4.png" alt="logo"  width="150" height="auto"> 
            {if ($employerid == $sessionid && $companyid == $sessioncompanyid) || $sessionrole=="admin"}
                <button class="basic-button" onclick="deleteListing({$id})">Delete Listing</button>
            {/if}
            <button class="basic-button" onclick='redirect("listings.php")'>Listings</button>
            <button class="basic-button" onclick='redirect("userList.php")'>User list</button>
            <button class="basic-button" onclick='redirect("user.php?id={$sessionid}")'>My profile</button>

        </div>

        <div class="rightColumn">

            <div class="box">

                <h1>{$name}</h1>
                <h2>Listing information</h2>
                <h3>Job description:</h3>
                <p>{$info}</p>
                <p><strong>Payment:</strong> {$payment}</p>

                <h3>Company information</h3>
                <p><strong>Name:</strong> {$companyname}</p>
                <p><strong>City:</strong> {$companycity}</p>
                <p><strong>Sector:</strong> {$companysector}</p>

                <h3>Employer information</h3>
                <p><strong>Full name:</strong> {$employersurname}, {$employername}</p>
                <p><strong>Username:</strong> {$employerusername}</p> 
                <p><strong>Email:</strong> {$employeremail}</p>

                <h3>If you are interested in this listing, please contact the employer via email.</h3>

            </div>

        </div>

    </div>

</body>