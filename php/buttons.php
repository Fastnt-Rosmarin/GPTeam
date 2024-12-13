<form method="POST">
    <button type="submit" name="generate" class="buttonClass">Run SQL</button>
    <button type="submit" name="select" class="buttonClass">Show Data</button>
    <button type="submit" name="truncate" class="buttonClass">Truncate Table</button>
</form>
<a href="./editor.php" class="buttonClass">Go to Editor</a>
<a href="./pages.php" class="buttonClass">Go to Pages</a>
<?php
    if(isset($_POST['generate'])) {
        $value = rand(5, 15);
        $value1 = rand(5, 15);
        $sql = "INSERT INTO test (login, pass) VALUES ($value, $value1)";
        mysqli_query($conn, $sql);
    }
    if(isset($_POST['select'])) {
        $sql = "SELECT * FROM test";
        $result = mysqli_query($conn, $sql);
        
        while($row = mysqli_fetch_assoc($result)) {
            echo "Login: " . $row['login'] . " - Password: " . $row['pass'] . "<br>";
        }
    }
    if(isset($_POST['truncate'])) {
        $sql = "TRUNCATE TABLE test";
        mysqli_query($conn, $sql);
    }
?>