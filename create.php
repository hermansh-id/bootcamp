<?php

require_once("db_config.php");

// checking if the update button was clicked
// FILTER_SANITIZE_STRING removes tags and special encoding characters from the string
if (isset($_POST['createRecord'])) {
  $title = filter_var($_POST['_____'], FILTER_SANITIZE_STRING);
  $author = filter_var($_POST['_____'], FILTER_SANITIZE_STRING);
  $genre = filter_var($_POST['_____'], FILTER_SANITIZE_STRING);
  $height = filter_var($_POST['_____'], FILTER_SANITIZE_NUMBER_INT);
  $publisher = filter_var($_POST['_____'], FILTER_SANITIZE_STRING);
  $query = "_____ _____ books (title, author, genre, height, publisher)
              _____ (:title, :author, :genre, :height, :publisher)";
  $result = $db_connection->prepare($query);
  $result->execute([
    'title' => $_____,
    'author' => $_____,
    'genre' => $_____,
    'height' => $_____,
    'publisher' => $_____,
  ]);

  $rowsCreated = $result->rowCount();
}
?>

<!DOCTYPE html>
<html lang="en">

<_____>
  <meta charset="UTF-8">
  <title>Create database record</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</_____>

<_____>

  <br>
  <div class="container">
    <!-- gunakan form -->
    <_____ method="_____" action="create.php">
      <div class="form-group row">
        <label for="title" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="title" name="_____" value="">
        </div>
      </div>
      <div class="form-group row">
        <label for="author" class="col-sm-2 col-form-label">Author</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="author" name="_____" value="">
        </div>
      </div>
      <div class="form-group row">
        <label for="genre" class="col-sm-2 col-form-label">Genre</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="genre" name="_____" value="">
        </div>
      </div>
      <div class="form-group row">
        <label for="height" class="col-sm-2 col-form-label">Height</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="height" name="_____" value="">
        </div>
      </div>
      <div class="form-group row">
        <label for="publisher" class="col-sm-2 col-form-label">Publisher</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="publisher" name="_____" value="">
        </div>
      </div>

      <button type="submit" name="createRecord" class="btn btn-success" formaction="create-confirmation.php">Create record</button>

      </form>
  </div>


</_____>


</html>