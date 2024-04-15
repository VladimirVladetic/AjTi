<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/essentials.css">
    <link rel="stylesheet" href="./styles/newCompany.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <title>Enter new company</title>
</head>

<body>

    <div class="central-container">

        {if $sessionrole=="admin"}

            <h1>Enter new company information</h1>  

                <form id="insert-company-form" method="post" action="newCompany.php">

                <label for="input-company-name">Company name:</label><br>
                <input type="text" name="name" placeholder="Enter company name" id="input-company-name"><br>

                <label for="input-company-city">Company city:</label><br>
                <input type="text" name="city" placeholder="Enter company city" id="input-company-city"><br>

                <label for="input-company-country">Company country:</label><br>
                <input type="text" name="country" placeholder="Enter company country" id="input-company-country"><br>

                <label for="input-company-sector">Company sector:</label><br>
                <input type="text" name="sector" placeholder="Enter company sector" id="input-company-sector"><br>

                <label for="input-company-employerid">Company employer id:</label><br>
                <input type="int" name="employerid" placeholder="Enter company employer id" id="input-company-employerid"><br>

            </form>

            <button class="basic-button" form="insert-company-form" id="enter-info-button">Enter Information</button>

            <a href="userList.php">
                <button class="basic-button">Go to user list</button>
            </a>

        {/if}

    </div>

    {if $companyexists == 1}
        <div class="alert" id="failAlert" style="display: block;">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <p class="alertText">Company exists in database.</p>
        </div> 
    {/if}

</body>