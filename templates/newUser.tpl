<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/user.css">
    <link rel="stylesheet" href="./styles/essentials.css">
    <link rel="stylesheet" href="./styles/grid1-2.css">
    <link rel="stylesheet" href="./styles/newUser.css">
    <title>New user</title>
</head>
<body>

    <div class="container">

        <div class="leftColumn">

            <img class="margins-needed" src="./images/logo-white-cropped.png" alt="logo"  width="250" height="auto"> 
            <table>
                <form class="margins-needed" id="insert-user" method="post" action="newUser.php">
                    <tr><td><input id="info-name" type="text" name="name" placeholder="Enter your name." {if isset($name)} value="{$name}" {/if}></td></tr>
                    <tr><td><input id="info-surname" type="text" name="surname" placeholder="Enter your surname."{if isset($surname)} value="{$surname}" {/if}></td></tr>
                    <tr><td><input id="info-email" type="text" name="email" placeholder="Enter your e-mail."{if isset($surname)} value="{$surname}" {/if}></td></tr>
                    <tr><td><input id="info-yearofbirth" type="number" name="yearofbirth" placeholder="Enter your year of birth."{if isset($yearofbirth)} value="{$yearofbirth}" {/if}></td></tr>
                    <tr><td><input id="info-password" type="text" name="password" placeholder="Enter your password."{if isset($password)} value="{$password}" {/if}></td></tr>
                    <tr><td>
                    <select name="company" id="info-company">
                        {foreach from=$companies item=company} 
                        <option value="{$company.name}">{$company.name}</option>
                        {/foreach}
                    </select>
                    </td></tr>
                </form>
                </table>
            <button class="basic-button" form="insert-user" id="enter-info-button">Enter Information</button>
            <a href="userList.php">
                <button class="basic-button">Go to user list</button>
            </a>

        </div>

    </div>

</body>
</html>