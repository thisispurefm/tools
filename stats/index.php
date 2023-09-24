<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="30">
    <title>Broadcast Stats | PureFM Tools</title>
    <link rel="stylesheet" href="/global/style.css">
    <link rel="shortcut icon" href="/assets/favicon.png" type="image/x-icon">

    <script>
        function insertCurrentDateTime(){
            // console.log("dae");
            let elemToInsert = document.getElementById("time");
            elemToInsert.innerHTML = "Last Updated: " + new Date();
        }
    </script>
</head>
<body onload="insertCurrentDateTime()">
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/global/header.php");?>
    
    <header class="secondary-head">
        <h1>Live Broadcast Stats</h1>
    </header>
    <main>
        <section class="stats-table">
            <p id="time" >Last Updated: </p>
    <table>
        <colgroup>
                <col span="1" style="width: 75%;">
                <col span="1" style="width: 25%;">
            </colgroup>
            <tr>
                <th>Spec</th>
                <th>Stat</th>
            </tr>   
        <?php
        $filepath = "http://solid2.streamupsolutions.com:11161/stats";
        $response = simplexml_load_file($filepath);
        // print_r($response);

        foreach($response->children() as $child){
            echo "<tr>\n";
            echo "<td>" . strtolower($child->getName()) . "</td>\n";
            echo "<td>" . $child . "</td>\n";
            echo "</tr>\n";
        }
        ?>
    </table>
    </section>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/global/footer.php");?>
</body>
</html>

