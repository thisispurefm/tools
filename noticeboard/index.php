<?php

$notices = json_decode(file_get_contents("notices.json"), true);

// print_r($notices);

// echo "<br><hr><br>";

function renderNotices(){
    global $notices;
    foreach($notices as $noticeSingle){
        echo "<div class='notice'>";
        echo "<h3>" . $noticeSingle["title"] . "</h3>";
        echo "<p>" . $noticeSingle["body"] . "</p>";
        echo "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticeboard | PureFM Tools</title>
    <link rel="stylesheet" href="/global/style.css">
    <link rel="shortcut icon" href="/assets/favicon.png" type="image/x-icon">

</head>
    <body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/global/header.php");?>
    
    <header class="secondary-head">
        <h1>Notices</h1>
    </header>
    <main>
        <section>
        <?php renderNotices();?>
    </section>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/global/footer.php");?>
</body>
</html>



