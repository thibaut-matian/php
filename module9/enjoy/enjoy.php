

  <?php
  if (isset($_POST['interets']) && is_array($_POST['interets'])) {
      $interets = $_POST['interets'];

      if (count($interets) >= 2) {
          echo "<p>Voici vos centres d’intérêt sélectionnés :</p>";
          echo "<ul>";
          foreach ($interets as $interet) {
              echo "<li>" . htmlspecialchars($interet) . "</li>";
          }
          echo "</ul>";
      } else {
          echo "<p style='color:red;'>Veuillez cocher au moins deux centres d’intérêt.</p>";
      }
  } else {
      echo "<p style='color:red;'>Aucun centre d’intérêt sélectionné.</p>";
  }
  ?>

  <p><a href="enjoy.html">Retour au formulaire</a></p>

