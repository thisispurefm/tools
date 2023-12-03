<!DOCTYPE html>
<html lang="en">
<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/components/headContent.php"); ?>
    <title>Home | PureFM Tools</title>
</head>
<body>
<div class="mdl-layout__container">
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header has-drawer">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/components/nav.php"); ?>

  <main class="mdl-layout__content mdl-color--grey-100">

    <div class="page-content">

    <div class="mdl-grid center-items ">
      <div class="mdl-layout-spacer"></div>
      <div class="mdl-cell mdl-cell--10-col mdl-typography--text-center mdl-shadow--2dp custom-cell-white-bg">
        <h1>PureFM Tools</h1>
      </div>
      <div class="mdl-layout-spacer"></div>
    </div>

    <div class="mdl-grid center-items">
      <div class="mdl-cell mdl-cell--10-col mdl-shadow--2dp custom-cell-white-bg custom-inner-padding">
        <p>Welcome to the PureFM Tools!</p>
        <p><em>Tools</em> is a suite of web based utilities built by the PureFM tech team to do different things. Tools is currently under construction, so some things may be broken or not working.</p>
        <p>If you have an idea about something which could be added, then please contact the Technical Director</p>
      </div>
    </div>

    <div class="mdl-grid center-items">
    <div class="mdl-cell mdl-cell--10-col mdl-shadow--2dp custom-cell-white-bg">

      <div class="mdl-grid center-items">
        <!-- NEW LINE -->
        <!-- <div class="mdl-layout-spacer"></div> -->
        <div class="mdl-cell mdl-cell--3-col">
          <div class="demo-card-square mdl-card mdl-shadow--2dp">
            <div class="mdl-card__title mdl-card--expand">
              <h2 class="mdl-card__title-text">Studio Clock</h2>
            </div>
            <div class="mdl-card__supporting-text">
              A live clock display for the studio
            </div>
            <div class="mdl-card__actions mdl-card--border">
              <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="https://thomasboxall.github.io/purefm-clock/" target="_blank">
                Open Clock
              </a>
            </div>
          </div>
        </div>
        <div class="mdl-layout-spacer"></div>
        <div class="mdl-cell mdl-cell--3-col">
        
        <div class="demo-card-square mdl-card mdl-shadow--2dp">
            <div class="mdl-card__title mdl-card--expand">
              <h2 class="mdl-card__title-text">Tech Docs</h2>
            </div>
            <div class="mdl-card__supporting-text">
              Find detailed instructions on all aspects of PureFM
            </div>
            <div class="mdl-card__actions mdl-card--border">
              <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="https://tech-docs.thisispurefm.com" target="_blank">
                Open Docs
              </a>
            </div>
          </div>
        </div>
        <div class="mdl-layout-spacer"></div>
        <div class="mdl-cell mdl-cell--3-col">
          <div class="demo-card-square mdl-card mdl-shadow--2dp">
            <div class="mdl-card__title mdl-card--expand">
              <h2 class="mdl-card__title-text">Tech Support Request</h2>
            </div>
            <div class="mdl-card__supporting-text">
              Submit a support request and a technician will get back to you
            </div>
            <div class="mdl-card__actions mdl-card--border">
              <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="https://thisispurefm.com/tsr" target="_blank">
                Submit Request
              </a>
            </div>
            
          </div>
          
        </div>
        
      </div>
    </div>
    
    </div>
  </div>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/components/footer.php"); ?>
  </main>
  
</div>
</div>

</body>
</html>