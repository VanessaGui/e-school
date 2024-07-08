<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-school</title>
    <meta name="description" content="e-school, site de gestion de contenu d'apprentissage">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <script type="module" src="scripts/script.js" ></script>
    <script src="https://cdn.tiny.cloud/1/b8m4cc9vao46ed6nxr44fan55hh9agksd6chwaptatj964uz/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
    <?php require_once('routes.php'); ?>
    <hr>
    <footer>
        <a href="?controller=accueil&action=mentions">Mentions légales</a>
        <div>e-school 2024 Tous droits réservés</div>
    </footer>
    <script>
    tinymce.init({
      selector: 'textarea.editable',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ]
    });
  
  </script>
</body>
</html>