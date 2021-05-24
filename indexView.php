<!-- View displays infos in HTML page -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Mon blog</title>
    <link href="./css/style.css" rel="stylesheet" /> 
  </head>

  <body>
    <h1>Mon super blog !</h1>
    <p>Derniers billets du blog :</p>

    <?php
    while ($data = $posts->fetch())
    {
    ?>
      <div class="news">
        <h3>
          <?php echo htmlspecialchars($data['title']) ?>
          <em>le <?php echo $data['creation_date_fr']; ?></em>
        </h3>
        
        <p>
          <?php echo nl2br(htmlspecialchars($data['content'])) ?>
          <br/>
          <em><a href="post.php?id=<?php echo $data['id']; ?>">Commentaires</a></em>
        </p>
      </div>
    <?php
    }
    $posts->closeCursor();
    ?>
  </body>
</html>
