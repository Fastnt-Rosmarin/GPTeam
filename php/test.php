<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World!!</h1>
    <button id="button">insert value</button>
    <table id="users_table">
        <!-- The table will be populated by the getUsers() function -->
    </table>
    <?php
        session_start();
        include './db_connect.php';
        

    ?>
    <script src="../js/script.js">
</body>
</html>
