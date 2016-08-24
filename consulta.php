

<form action="?action=grab" method="post">
<input placeholder="tt1092026" type="text" name="id" id="id">
<input type="submit" class="button" value="Grab Movie">
</form>
<?php if ($_GET[action] == "grab") { ?>
<h3>

<?php
$id = $_POST["id"];
$url = file_get_contents("http://www.omdbapi.com/?i=$id");
$json = json_decode($url, true); //This will convert it to an array
$movie_title = $json['Title'];
$movie_year = $json['Year'];
?>
</h3>
<?php }; ?>