
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Simple web</title>
</head>
<body>

<div class="date">
<?php
    $date = date('l,d m F 20y');
echo $date;

?>
</div>




    <div class="way">
        <div class="tabel">
 <table>
    <tr>
        <td>
    <div class="time">
<?php
date_default_timezone_set('Asia/Jakarta');
    $date = date("F j h D");

    $hour      = date('H');

    if ($hour >= 20) {
        $greetings = "Good Night!";
    } elseif ($hour > 17) {
       $greetings = "Good Evening!";
    } elseif ($hour > 11) {
        $greetings = "Good Afternoon!";
    } elseif ($hour < 12) {
       $greetings = "Good Morning!";
    }
    echo $greetings;
    


?>
</div>
</td>
</tr>
</table>
</div>
</div>

<div class="profile">
    <div class="table">
        <table>
            <tr>
                <td>
    <h1>Biodata</h1>
    
    <p>Hello,my name is <?php echo $_GET["firstname"]; ?></p>
    <p>im now study at Wikrama Vocational High school,</p>
    <p>as a software development and game developer student.</p>
    <p>i am in <?php echo $_GET["lastname"]; ?></p>

    </td>
    </tr>
    </table>
    </div>

</div>
                     


<div class="contact">
    <table>
        <tr>
            <td>
                <h1> Contact me at:</h1>
                <a href="https://www.instagram.com/servasiusv/">
                    <p>instagram</p>
                </a>


                <a href="https://wa.me/6281213795928">
                    <p>whatsapp</p>
                </a>
            </td>
        </tr>
    </table>
</div>



<div class="create">
    <table>
        <tr>
            <td>
                <h3>Created with :</h3>
                <p>PHP</p>
                <p>HTML</p>
                <p>CSS</p>
            </td>
        </tr>
    </table>
</div>





</body>
</html>