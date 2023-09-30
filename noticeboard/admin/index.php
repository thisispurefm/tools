<?php
// password protection stuff first
$passwords = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/passwords.json'));
print_r($passwords);


// require_once 'protect.php';
// Protect\with('form.php', 'my_password');

$notices = json_decode(file_get_contents("../notices.json"), true);

// print_r($notices);

// echo "<br><hr><br>";

if(isset($_POST['addNewNotice'])){
    saveToNoticesDB();
}

if(isset($_POST['noticeIdToDel'])){
    echo $_POST['noticeIdToDel'];
    deleteNotice($_POST['noticeIdToDel']);
}

function renderNotices(){
    global $notices;
    if(count($notices) == 0){
        echo "<p>None found</p>";
    }
    foreach($notices as $noticeSingle){
        echo "<div class='notice'>";
        echo "<h3>" . $noticeSingle["title"] . "</h3>";
        echo "<p>" . $noticeSingle["body"] . "</p>";
        echo "<form method='post' action=''>";
        echo "<button type='submit' name='noticeIdToDel' value=" . $noticeSingle["id"] . ">Delete</button>";
        echo "</div>";
    }
}

function saveToNoticesDB(){
    global $notices;
    $newNoticeID = generateID();
    $newNoticeTitle = $_POST["newNoticeTitle"];
    $newNoticeBody = $_POST["newNoticeBody"];
    array_push($notices, array('id'=>$newNoticeID, 'title'=>$newNoticeTitle, 'body'=>$newNoticeBody));
    // print_r($notices);
    // echo "after arrpush";
    file_put_contents("../notices.json", json_encode($notices));
    // echo "after save";
}

function generateID(){
    $characters = "0123456789abcdefghijklmnopqrstuvwxyz";
    $valid = false;
    while (!$valid){
        $shortString = "";
        for($i = 0; $i<5; $i++){
            $shortString .= $characters[rand(0, strlen($characters))];
        }
        if(!doesIDExist($shortString)){
            $valid = true;
        }
        // echo $shortString;
    }
    return $shortString;
}

function doesIDExist($idToCheck){
    global $notices;
    foreach($notices as $noticesItem){
        if ($noticesItem["id"] == $idToCheck){
            return true;
        }
    }
    return false;
}

function deleteNotice($idToDelete){
    global $notices;
    // first we need to find the index in the $notices array which contains the notice to delete
    $noticeToDeleteIndex = array_search($idToDelete, array_column($notices, 'id'));
    echo $noticeToDeleteIndex;
    array_splice($notices, $noticeToDeleteIndex, 1);
    print_r($notices);
    file_put_contents("../notices.json", json_encode($notices));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticeboard Admin | PureFM Tools</title>
    <link rel="stylesheet" href="/global/style.css">
    <link rel="shortcut icon" href="/assets/favicon.png" type="image/x-icon">

</head>
    <body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/global/header.php");?>
    
    <header class="secondary-head">
        <h1>Notices - Admin Options</h1>
    </header>
    <main>
        <section>
        <?php renderNotices();?>
    </section>
    <section>
        <h2>Add New</h2>
        <form method="post" action="">
            <input type="text" name="newNoticeTitle" placeholder="Title">
            <input type="text" name="newNoticeBody" placeholder="Body">
            <input type="submit" value = "Go ->" name="addNewNotice">
        </form>
    </section>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/global/footer.php");?>
</body>
</html>



