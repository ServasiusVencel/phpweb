<html>
    <head>
        <link rel="stylesheet" href="sign.css">
        <title>Sign in</title>
    </head>
<body>



<div class="sign-in">
    <table>
        <tr>
            <td>
                <div class="sign">
                <h2>Sign in!</h2>
                </div>
                <div class="img">
            <img src="img/sukuna.jpg">
            </div>
                <div class="form">
                    <div class="center">
<form action="simple.php" method="get">
    <div class="name">
    <label for="fname"></label>Name: <?php 
    $name
    ?></label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    

<div class="class">
<label for="lname">Class:</label>
    <input type="text" id="lname" name="lastname" placeholder="Your Class/Rombel...">
</div>
<input type="submit">
</form>
</div>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>