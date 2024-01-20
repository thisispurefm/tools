<?php 
$notices = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/noticeboard/notices.json"), true);

function renderNotices($editMode){
    global $notices;
    if($notices){
        // arr is not empty therefore we add for formatter for the list
        echo "<ul class='mdl-list'>";
        foreach($notices as $noticeSingle){
            echo "<li class='mdl-list__item mdl-list__item--three-line'>";
            echo "<span class='mdl-list__item-primary-content'>";
            echo "<span>". $noticeSingle["title"] ."</span>";
            echo "<span class='mdl-list__item-text-body'>";
                echo $noticeSingle["body"];
            echo "</span>";
            echo "</span>";
            if($editMode){
                echo "<span class='mdl-list__item-secondary-content'>";
                // <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">edit</i></a>
                // <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">delete</i></a>
                echo "<form method='post' action=''>";
                echo "<button class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent' type='submit' name='noticeIdToDel' value=" . $noticeSingle["id"] . ">Delete</button>";
                echo "</form>";
              echo "</span>";    
            }
        echo "</li>";
        }
        // finished inserting elements therefore we can insert the endmatter
        echo "</ul>";
    } else{
        echo "<p>No notices found.</p>";
    }
 
}

?>