<?php

include "sharednoticeboardfunctions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/components/headContent.php"); ?>
    <title>Noticeboard | PureFM Tools</title>
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
        <h1>Noticeboard</h1>
      </div>
      <div class="mdl-layout-spacer"></div>
    </div>

    <div class="mdl-grid center-items">
      <!-- NEW LINE -->
      <div class="mdl-layout-spacer"></div>

        <div class="mdl-cell mdl-cell--10-col mdl-shadow--2dp custom-inner-padding custom-cell-white-bg">
        <?php renderNotices(0);?>
            
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
