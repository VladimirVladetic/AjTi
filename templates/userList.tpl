<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/users.css">
    <link rel="stylesheet" href="./styles/essentials.css">
    <link rel="stylesheet" href="./styles/grid1-2.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <script src="./js/enterLog.js" defer></script>
    <script src="./js/userSearch.js" defer></script>
    <script src="./js/essentials.js" defer></script>
    <title>User list</title>
</head>
<body onload="enterLog({$logsent},{$attempts})">

    <div class="container">

    <div class="leftColumn">

    <img class="logo" src="./images/AT4.png" alt="logo"  width="150" height="auto"> 
    <p class="margins-needed" id="sessionname" data-value="{$sessionname}">Welcome {$sessionname}</p>
    {* {if $sessionrole=="admin"}
        <button class="basic-button" onclick='redirect("newUser.php")'>Enter new user</button>
    {/if} *}
    {if $sessionrole=="admin"}
        <button class="basic-button" onclick='redirect("newCompany.php")'>Enter new company</button>
    {/if}
    {if $sessionrole=="admin"} <form id="delete-selected-users" method="post" action="userList.php"></form>
        <input class="basic-button" form="delete-selected-users" type="submit" name='deleteusersbtn' value="Delete selected users"/>
    {/if}
    <button class="basic-button" onclick='redirect("listings.php")'>Job listings</button>
    <button class="basic-button" onclick='redirect("user.php?id={$sessionid}")'>My profile</button>
    <form id="logout" method="post" action="userList.php"></form>
        <input class="basic-button" form="logout" type="submit" name='logoutbtn' value="Log out"/>
    </div>

    <div class="rightColumn">

        <div class="spinner-container">
            <div class="spinner"></div>
        </div>

        <div class="searchBar">
            <input class="margins-needed" type="text" placeholder="Search for user with ID" id="search-value">
            <button id="searchbtn" onclick="showSpinner()">
                <img class="magglass" src="./images/magnifying-glass-2-64.png" alt="magnifying glass"> 
            </button>

        </div>

        <table>
            <thead class="margins-needed">
                <tr>
                    {* <th>First name</th> *}
                    <th>Last name</th>
                    <th>Username</th>
                    <th>E-mail</th>
                    <th>Company</th>
                </tr>
            </thead>
            <tbody class="margins-needed">
            {foreach from=$data item=user} 
                {* {if !($sessionrole=="user" && $user.role=="admin")} *}
                <tr> 
                {foreach from=$companydata item=company}
                    {if $company.id == $user.companyid}
                        {$companyname = $company.name}
                    {/if}
                {/foreach}
                    {* <td><a href="user.php?id={$user.id}">{$user.name}</td>  *}
                    <td><a href="user.php?id={$user.id}">{$user.surname}</td> 
                    <td><a href="user.php?id={$user.id}">{$user.username}</td>
                    <td><a href="user.php?id={$user.id}">{$user.email}</a>  
                    <td>{$companyname}</td>
                    {if $sessionrole=="admin"}<td><input type="checkbox" form="delete-selected-users" name="checkbox{$user.id}"/></td>{/if}
                <tr> 
                {* {/if} *}
            {/foreach}
            </tbody>
        </table>
        </div>

    </div>
    
</body>
</html>