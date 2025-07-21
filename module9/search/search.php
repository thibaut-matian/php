

<?php
if (isset($_GET['search']) && !empty(trim($_GET['search']))) {
    $search = htmlspecialchars(trim($_GET['search']));
    echo "Vous avez recherché : <strong>$search</strong>";
} else {
    echo "Veuillez entrer un mot-clé pour effectuer une recherche.";
}
?>