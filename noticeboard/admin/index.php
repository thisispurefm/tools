<?php
require_once 'protect.php';
Protect\with('form.php', '$2y$10$saVjC1rAAOfF3iuIJ72fLeV3ep9leXJ.x5r93L4SF1DxR25i8QSJS');

include "../sharednoticeboardfunctions.php";

if(isset($_POST['addNewNotice'])){
    saveToNoticesDB();
}

if(isset($_POST['noticeIdToDel'])){
    // echo $_POST['noticeIdToDel'];
    deleteNotice($_POST['noticeIdToDel']);
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
    // echo $noticeToDeleteIndex;
    array_splice($notices, $noticeToDeleteIndex, 1);
    // print_r($notices);
    file_put_contents("../notices.json", json_encode($notices));
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/components/headContent.php"); ?>
    <title>Noticeboard (Admin) | PureFM Tools</title>
    <link rel="stylesheet" href="additional-styles.css">
</head>
<body>
<div class="mdl-layout__container">
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header has-drawer">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/components/nav.php"); ?>

  <main class="mdl-layout__content mdl-color--grey-100">

    <div class="page-content ">
    <div class="mdl-grid center-items">
      <div class="mdl-layout-spacer"></div>
      <div class="mdl-cell mdl-cell--10-col mdl-typography--text-center mdl-shadow--2dp custom-cell-white-bg">
        <h1>Noticeboard (Admin)</h1>
      </div>
      <div class="mdl-layout-spacer"></div>
    </div>

    <div class="mdl-grid center-items">
      <!-- NEW LINE -->
      <div class="mdl-layout-spacer"></div>

        <div class="mdl-cell mdl-cell--10-col mdl-shadow--2dp custom-inner-padding custom-cell-white-bg">
        <?php renderNotices(1);?>
            
        </div>      
       
      <div class="mdl-layout-spacer"></div>
    </div>

    <div class="mdl-grid center-items">
      <!-- NEW LINE -->
      <div class="mdl-layout-spacer"></div>

        <div class="mdl-cell mdl-cell--10-col mdl-shadow--2dp custom-inner-padding custom-cell-white-bg">
        <h3>Add New Notice</h3>
        <form method="post" action="">
            <div class="mdl-textfield mdl-js-textfield">    
            <input class="mdl-textfield__input" type="text" name="newNoticeTitle" id="newNoticeTitle">
            <label class="mdl-textfield__label" for="newNoticeTitle">Title...</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield">
                <textarea class="mdl-textfield__input" type="text" rows="3" id="newNoticeBody" name="newNoticeBody"></textarea>
                <label class="mdl-textfield__label" for="newNoticeBody">Body...</label>
            </div>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type='submit' name='addNewNotice'>Save</button>
        </form>
            
        </div>      
       
      <div class="mdl-layout-spacer"></div>
    </div>

  </div> <!-- End of Page Content-->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/components/footer.php"); ?>
  </main>

</div>
</div>
</body>
</html>