<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | PureFM Tools</title>
    <link rel="stylesheet" href="/global/style.css">
    <link rel="shortcut icon" href="/assets/favicon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/6bd76a095b.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/global/header.php");?>
    <main>
    <header class="primary-head">
        <h1>PureFM Tools - Home</h1>
    </header>
    <section>
    <p style="background-color: #ff6961; height: 3em; text-align: center;"><br>This website is still under construction. Please speak to Thomas with feedback or suggestions for features.</p>
    </section>

    <section class="home-menu">
    <a href="/stats"><i class="fa-regular fa-chart-bar"></i><p>Broadcast stats</p></a>
    <a href="/avail-s1"><i class="fa-solid fa-calendar"></i><p>Studio 1 availability</p></a>
    <a href="/avail-s2"><i class="fa-solid fa-calendar"></i><p>Studio 2 availability</p></a>
    </section>
</main>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/global/footer.php");?>
</body>
</html>