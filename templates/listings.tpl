<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/listings.css">
    <link rel="stylesheet" href="./styles/essentials.css">
    <link rel="stylesheet" href="./styles/grid1-2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <script src="./js/essentials.js" defer></script>
    <script src="./js/listings.js" defer></script>
    <title>Job listings</title>
</head>

<body>

    <div class="container">

        <div class="leftColumn">

            <img class="logo" src="./images/AT4.png" alt="logo"> 
            <p class="margins-needed" id="sessionname" data-value="{$sessionname}">Welcome {$sessionname}</p>
            {if $sessionrole=="admin"}
                <button class="basic-button" onclick='redirect("newUser.php")'>Enter new user</button>
            {/if}
            {if $sessionrole=="admin"}
                <button class="basic-button" onclick='redirect("newCompany.php")'>Enter new company</button>
            {/if}
            <button class="basic-button" onclick='redirect("userList.php")'>User list</button>
            <button class="basic-button" onclick='redirect("user.php?id={$sessionid}")'>My profile</button>
            <form id="logout" method="post" action="userList.php"></form>
            <input class="basic-button" form="logout" type="submit" name='logoutbtn' value="Log out"/>
        
        </div>


        <div class="rightColumnListings">

            <div class="searchBar">
                <select name="company" id="info-company">
                    {foreach from=$companydata item=company} 
                        <option value="{$company.name}">{$company.name}</option>
                    {/foreach}
                </select>
                <button id="searchbtn">
                    <img class="magglass" src="./images/magnifying-glass-2-64.png" alt="magnifying glass"> 
                </button>
            </div>

            <div class="listingsList">
            
            {foreach from=$listingdata item=listing} 
                <tr> 
                {foreach from=$companydata item=company}
                    {if $company.id == $listing.companyid}
                        {$companyname = $company.name}
                    {/if}
                {/foreach}
                {foreach from=$userdata item=user}
                    {if $user.id == $listing.employerid}
                        {$employername = $user.name}
                        {$employerid = $user.id}
                        {$employersurname = $user.surname}
                    {/if}
                {/foreach}

                    <div class="listing-container" onclick='redirect("listing.php?id={$listing.id}")' 
                    data-company-name="{$companyname}">

                        <h2>{$listing.name}</h2>
                        <p>Company: {$companyname}</p>
                        <p>
                            Employer:{$employername} {$employersurname}</a>
                        </p>
                        <p>Payment in euros: {$listing.payment}</p>
                        <p>{$listing.smalldesc}</p>

                    </div>
                <tr> 
            {/foreach}

            </div>
        
        </div>

    </div>

</body>
</html>