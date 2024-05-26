<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/user.css">
    <link rel="stylesheet" href="./styles/essentials.css">
    <link rel="stylesheet" href="./styles/grid1-2.css">
    {* <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> *}
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <script src="./js/changeUser.js" defer></script>
    <script src="./js/essentials.js" defer></script>
    <title>User page for {$name}</title>
</head>
<body>

    <div class="container">

    <div class="leftColumn">

    {* <img class="margins-needed" src="./images/new-logo.png" alt="logo"  width="150" height="auto">  *}

        <div id="user-holder" data-value="{$id}"></div>

        {if $sessionrole=="admin"}
            <form class="margins-needed" id="update-user-form" method="post" action="user.php?id={$id}">
                <p>Username: </p>
                <input class="input-text" id="info-username" type="text" name="username" placeholder="Enter username." {if isset($username)} value="{$username}" {/if}>
                <p>Name: </p>
                <input class="input-text" id="info-name" type="text" name="name" placeholder="Enter name." {if isset($name)} value="{$name}" {/if}>
                <p>Surname: </p>
                <input class="input-text" id="info-surname" type="text" name="surname" placeholder="Enter surname." {if isset($surname)} value="{$surname}" {/if}>
                <p>E-mail: </p>
                <input class="input-text" id="info-email" type="email" name="email" placeholder="Enter e-mail." {if isset($email)} value="{$email}" {/if}>
                <p>Year of birth: </p>
                <input class="input-text" id="info-yearofbirth" type="number" name="yearofbirth" placeholder="Enter year of birth."{if isset($yearofbirth)} value="{$yearofbirth}" {/if}>
                {* <p>Password: </p>
                <input class="input-text" id="info-password" type="text" name="password" placeholder="Enter password."{if isset($password)} value="{$password}" {/if}> *}
                <p>Company: {if isset($companyname)} {$companyname} {/if}</p>
                <p>Role: {if isset($role)} {$role} {/if}</p>
            </form>
            <button class="basic-button" form="update-user-form" id="update-info-button">Update user information</button>
        {/if}
        {if $sessionrole=="user" || $sessionrole=="employer"}
                    <h2 class="margins2-needed">Name: {if isset($name)} {$name} {/if}</h2>
                    <h2 class="margins2-needed">Surname: {if isset($surname)} {$surname} {/if}</h2>
                    <h2 class="margins2-needed">Year of birth: {if isset($yearofbirth)} {$yearofbirth} {/if}</h2>
                    <h2 class="margins2-needed">Company: {if isset($companyname)} {$companyname} {/if}</h2>
                    <h2 class="margins2-needed">Role: {if isset($role)} {$role} {/if}</h2>
        {/if}
            
        {if $sessionrole=="admin"}
        <form id="delete-this-user" method="post" action="user.php?id={$id}">
            <input class="basic-button" type='submit' name='deleteuserbtn' value="Delete user"/>
        </form>
        {/if}
        {if $sessionrole=="admin" || ($sessionrole=="employer" && ($companyid==$sessioncompanyid || $companyid==8))}
            <button class="basic-button" onclick="openChangeCompanyPopup()">Change company</button>
        {/if}
        {if $sessionrole=="admin" || ($sessionrole=="employer" && $companyid==$sessioncompanyid)}
            <button class="basic-button" onclick="openChangeRolePopup()">Change role</button>
        {/if}
        <button class="basic-button" onclick='redirect("userList.php")'>User list</button>
        <button class="basic-button" onclick='redirect("listings.php")'>Job listings</button>

    </div>

    <div class="rightColumn">

        <h1>User CV:</h1>

        <iframe id="pdfViewer" src="viewer.php?file={$id}.pdf"></iframe>

    </div>

    </div>

    <div class="overlay" id="overlay"></div>
        <div class="popup-container" id="popup">
            <h2 class="black-text">Change company</h2>
            <label for="dropdown">Select a company:</label>
            <select id="dropdown">
                {if $sessionrole=="admin"}
                    {foreach from=$companies item=company} 
                    <option value="{$company.name}">{$company.name}</option>
                    {/foreach}
                {/if}
                {if $sessionrole=="employer"}
                    <option value="Unemployed">Unemployed</option>
                    <option value="{$sessioncompanyname}">{$sessioncompanyname}</option>
                {/if}
            </select>
            <button class="basic-button" onclick="submitChange()">Submit</button>
            <button class="basic-button" onclick="closePopup()">Close</button>
        </div>
    </div>

    <div class="overlay" id="overlay-role"></div>
        <div class="popup-container" id="popup-role">
            <h2 class="black-text">Change role</h2>
            <label for="dropdown-role">Select a role:</label>
            <select id="dropdown-role">
                <option value="user">User</option>
                <option value="employer">Employer</option>
                {if $sessionrole=="admin"}
                    <option value="admin">Admin</option>
                {/if}
            </select>
            <button class="basic-button" onclick="submitChangeRole()">Submit</button>
            <button class="basic-button" onclick="closePopup()">Close</button>
        </div>
    </div>

</body>
</html>