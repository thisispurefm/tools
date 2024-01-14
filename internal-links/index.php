<!DOCTYPE html>
<html lang="en">
<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/components/headContent.php"); ?>
    <title>Internal Links | PureFM Tools</title>
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
        <h1>Internal Links</h1>
      </div>
      <div class="mdl-layout-spacer"></div>
    </div>

    <div class="mdl-grid center-items">
      <!-- NEW LINE -->
      <div class="mdl-layout-spacer"></div>

        <div class="mdl-cell mdl-cell--10-col mdl-shadow--2dp custom-inner-padding custom-cell-white-bg">
            

        <ul class="mdl-list">
        <li class="internal-link-single">
            <a class="mdl-list__item mdl-list__item--three-line" href="https://10.0.1.2" target="_blank">
                <span class="mdl-list__item-primary-content">
                <img src="assets/truenas-logo.svg" alt="TrueNAS Logo" class=" internal-link-img">
                <span>Annie Mac</span>
                <span class="mdl-list__item-text-body">
                    Primary NAS (TrueNAS Core)
                </span>
                </span>
                <span class="mdl-list__item-secondary-content">
                <p class="color-gold"><i class="material-icons">star</i></p>
                </span>
            </a>
        </li>
        <li class="internal-link-single">
            <a class="mdl-list__item mdl-list__item--three-line" href="https://10.0.0.1" target="_blank">
                <span class="mdl-list__item-primary-content">
                <!-- <i class="material-icons mdl-list__item-avatar">router</i> -->
                <img src="assets/opnsense-logo.svg" alt="OPNSense Logo" class=" internal-link-img">
                <span>Craig Charles</span>
                <span class="mdl-list__item-text-body">
                    OPNsense Router
                </span>
                </span>
                <span class="mdl-list__item-secondary-content">
                <p class="color-gold"><i class="material-icons">star</i></p>
                </span>
            </a>
        </li>
        <li class="internal-link-single">
            <a class="mdl-list__item mdl-list__item--three-line" href="https://10.0.0.100:8006" target="_blank">
                <span class="mdl-list__item-primary-content">
                <img src="assets/proxmox-logo.svg" alt="Proxmox Logo" class=" internal-link-img">
                <span>Paul O'Grady</span>
                <span class="mdl-list__item-text-body">
                    Primary Proxmox host
                </span>
                </span>
                <span class="mdl-list__item-secondary-content">
                <p class="color-gold"><i class="material-icons">star</i></p>
                </span>
            </a>
        </li>
        
        <!-- END OF FAVOURITES -->
        <li class="internal-link-single">
            <a class="mdl-list__item mdl-list__item--three-line" href="https://10.0.0.103" target="_blank">
                <span class="mdl-list__item-primary-content">
                <img src="assets/netgear-logo.svg" alt="Netgear Logo" class=" internal-link-img">
                <span>Backup NAS</span>
                <span class="mdl-list__item-text-body">
                    Backup NAS (Netgear thing of doom)
                </span>
                </span>
            </a>
        </li>
        <li class="internal-link-single">
            <a class="mdl-list__item mdl-list__item--three-line" href="https://10.0.0.99" target="_blank">
                <span class="mdl-list__item-primary-content">
                <img src="assets/hp-logo.svg" alt="HP Logo" class=" internal-link-img">
                <span>Paul O'Grady iLO</span>
                <span class="mdl-list__item-text-body">
                    Out-of-Band management for Paul
                </span>
                </span>
            </a>
        </li>
        <li class="internal-link-single">
            <a class="mdl-list__item mdl-list__item--three-line" href="http://10.0.0.105" target="_blank">
                <span class="mdl-list__item-primary-content">
                <img src="assets/sonifex-logo.svg" alt="Sonifex Logo" class=" internal-link-img">
                <span>PS Send</span>
                <span class="mdl-list__item-text-body">
                    Primary TX Device
                </span>
                </span>
            </a>
        </li>

        </ul>



        </div>      
       
      <div class="mdl-layout-spacer"></div>
    </div>
  </div>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/components/footer.php"); ?>
  </main>

</div>
</div>

</body>
</html>