<?php include 'database.php'; ?>

<?php

if (isset($_POST['name'])) {
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $watching = mysqli_real_escape_string($conn, $_POST['watching']);
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $genre = mysqli_real_escape_string($conn, $_POST['genre']);
  $platform = mysqli_real_escape_string($conn, $_POST['platform']);
  $who = mysqli_real_escape_string($conn, $_POST['who']);
  $experience = mysqli_real_escape_string($conn, $_POST['experience']);
  $comments = mysqli_real_escape_string($conn, $_POST['comments']);





  $query = "INSERT INTO views (name, watching, title, genre, platform, who, experience, comments) VALUES ('$name', '$watching', '$title', '$genre', '$platform', '$who', '$experience', '$comments')";


  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));



  if ($result) {
  populate_shoutbox($conn);
  }

}

if (isset($_POST['refresh'])) {
populate_shoutbox($conn);
}

function populate_shoutbox($conn) {
$query = "SELECT * FROM views ORDER BY id DESC LIMIT 20";
$views = mysqli_query($conn, $query);
while($row = mysqli_fetch_assoc($views)) {
echo '<li>';
echo $row['name'] .': ';
echo $row['watching'] .' - ';
echo $row['title'] .'/ ';
echo $row['genre'] .'/ ';
echo $row['platform'] .'/ ';
echo $row['who'] .'/ ';
echo $row['experience'] .'/ ';
echo $row['comments'] .'';
echo '</li>';
}
}




?>
