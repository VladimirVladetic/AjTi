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

            <label for="input-company-name">Company name:</label><br>
            <input type="text" placeholder="Enter company name" id="input-company-name"><br>

            <label for="input-company-city">Company city:</label><br>
            <input type="text" placeholder="Enter company city" id="input-company-city"><br>

            <label for="input-company-country">Company country:</label><br>
            <input type="text" placeholder="Enter company country" id="input-company-country"><br>

            <label for="input-company-sector">Company sector:</label><br>
            <input type="text" placeholder="Enter company sector" id="input-company-sector"><br>

            <label for="input-company-employerid">Company employer id:</label><br>
            <input type="int" placeholder="Enter company employer id" id="input-company-employerid"><br>

        {/if}

    </div>

</body>