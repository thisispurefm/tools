<!DOCTYPE html>
<html lang="en">
<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/components/headContent.php"); ?>
    <title>Music Search | PureFM Tools</title>
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
        <h1>Music Search</h1>
      </div>
      <div class="mdl-layout-spacer"></div>
    </div>

    <div class="mdl-grid center-items">
      <div class="mdl-layout-spacer"></div>
      <div class="mdl-cell mdl-cell--10-col mdl-typography--text-center mdl-shadow--2dp custom-cell-white-bg">
        <p>NB: This is not production data, it is test data. Proceed with caution.</p>
        <p>TODO: Add full data once we have finalised configuring PlayIt Live.</p>
      </div>
      <div class="mdl-layout-spacer"></div>
    </div>

    <div class="mdl-grid center-items">
      <!-- NEW LINE -->
      <div class="mdl-layout-spacer"></div>

        <div class="mdl-cell mdl-cell--10-col mdl-shadow--2dp custom-inner-padding custom-cell-white-bg">
            
            <!-- <input type="text" id="music-search" onkeyup="update_search()" placeholder="Search..."> -->
            <form action="#">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                    <label class="mdl-button mdl-js-button mdl-button--icon" for="music-search">
                    <i class="material-icons">search</i>
                    </label>
                    <div class="mdl-textfield__expandable-holder">
                    <input class="mdl-textfield__input" type="text" id="music-search" onkeyup="update_search()">
                    <label class="mdl-textfield__label" for="music-search">Search...</label>
                    </div>
                </div>
            </form>
    
            <table id="music-table" class="sortable mdl-data-table mdl-js-data-table">
                <thead>
                <tr>
                <th class="mdl-data-table__cell--non-numeric">
                    <button>
                    Title (Year)
                    <span aria-hidden="true"></span>
                    </button>
                </th>
                <th aria-sort="descending" class="mdl-data-table__cell--non-numeric">
                    <button>
                    Artist
                    <span aria-hidden="true"></span>
                    </button>
                </th>
                <th class="mdl-data-table__cell--non-numeric">
                    <button>
                    Genre
                    <span aria-hidden="true"></span>
                    </button>
                </th>
                <th>
                    <button>
                    Length
                    <span aria-hidden="true"></span>
                    </button>
                </th>
                </tr>
                </thead>
                <tbody id="music-table-body">

                </tbody>
            </table>
        



        </div>      
       
      <div class="mdl-layout-spacer"></div>
    </div>
  </div> <!-- End of Page Content-->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/components/footer.php"); ?>
  </main>

</div>
</div>
<script src="music-list.js"></script>
<script src="sortable-table.js"></script>
</body>
</html>