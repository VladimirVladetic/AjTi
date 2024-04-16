<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/listings.css">
    <link rel="stylesheet" href="./styles/essentials.css">
    <link rel="stylesheet" href="./styles/grid1-2.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <title>Job listings</title>
</head>

<body>

    <div class="container">

        <div class="leftColumn">

            <img class="logo" src="./images/new-logo.png" alt="logo"  width="200" height="auto"> 
            <p class="margins-needed" id="sessionname" data-value="{$sessionname}">Welcome {$sessionname}</p>
            {if $sessionrole=="admin"}
                <a href="newUser.php">
                    <button class="basic-button">Enter new user</button>
                </a>
            {/if}
            {if $sessionrole=="admin"}
                <a href="newCompany.php">
                    <button class="basic-button">Enter new company</button>
                </a>
            {/if}
            <a href="userList.php">
                <button class="basic-button">User list</button>
            </a>
            <form id="logout" method="post" action="userList.php"></form>
            <input class="basic-button" form="logout" type="submit" name='logoutbtn' value="Log out"/>
        
        </div>

        <div class="rightColumnListings">

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
                {/if}
            {/foreach}

                <div class="listing-container">

                    <h2>
                        <a href="listing.php?id={$listing.id}">{$listing.name}</a>
                    </h2>
                    <p>Company: {$companyname}</p>
                    <p>
                        Employer: <a href="user.php?id={$employerid}">{$employername}</a>
                    </p>
                    <p>Payment in euros: {$listing.payment}</p>
                    <p>{$listing.smalldesc}</p>

                </div>
            <tr> 
        {/foreach}

        </div>

    </div>

</body>
</html>