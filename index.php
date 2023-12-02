<!DOCTYPE html>
<html lang="en">
<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/components/headContent.php"); ?>
    <title>Document</title>
    <style>
.demo-card-square.mdl-card {
  width: 100%;
  height: 320px;
}
.demo-card-square > .mdl-card__title {
  color: #fff;
  background:
    url('../assets/demos/dog.png') bottom right 15% no-repeat #46B6AC;
}

.mdl-grid.center-items {
  justify-content: center;
}
</style>
</head>
<body>
<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/components/nav.php"); ?>
  <main class="mdl-layout__content">
    <div class="page-content">
    <div class="mdl-grid center-items">
      <div class="mdl-layout-spacer"></div>
      <div class="mdl-cell mdl-cell--10-col mdl-typography--text-center">
        <h1>PureFM Tools</h1>
      </div>
      <div class="mdl-layout-spacer"></div>
    </div>

    <div class="mdl-grid center-items">
      <!-- NEW LINE -->
      <div class="mdl-layout-spacer"></div>
      <div class="mdl-cell mdl-cell--2-col">
        <div class="demo-card-square mdl-card mdl-shadow--2dp">
          <div class="mdl-card__title mdl-card--expand">
            <h2 class="mdl-card__title-text">Update</h2>
          </div>
          <div class="mdl-card__supporting-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Aenan convallis.
          </div>
          <div class="mdl-card__actions mdl-card--border">
            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
              View Updates
            </a>
          </div>
        </div>
      </div>
      <div class="mdl-layout-spacer"></div>
      <div class="mdl-cell mdl-cell--2-col">
      
       <div class="demo-card-square mdl-card mdl-shadow--2dp">
          <div class="mdl-card__title mdl-card--expand">
            <h2 class="mdl-card__title-text">Update</h2>
          </div>
          <div class="mdl-card__supporting-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Aenan convallis.
          </div>
          <div class="mdl-card__actions mdl-card--border">
            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
              View Updates
            </a>
          </div>
        </div>
      </div>
      <div class="mdl-layout-spacer"></div>
      <div class="mdl-cell mdl-cell--2-col">
        <div class="demo-card-square mdl-card mdl-shadow--2dp">
          <div class="mdl-card__title mdl-card--expand">
            <h2 class="mdl-card__title-text">Update</h2>
          </div>
          <div class="mdl-card__supporting-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Aenan convallis.
          </div>
          <div class="mdl-card__actions mdl-card--border">
            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
              View Updates
            </a>
          </div>
          
        </div>
        
      </div>
      <div class="mdl-layout-spacer"></div>
    </div>
  </div>
  </main>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/components/footer.php"); ?>
</div>

</body>
</html>