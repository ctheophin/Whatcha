<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Whatcha Watchin'?</title>
    <link rel="stylesheet" href="css/main.css"
</head>

<body>
<div id="container">
  <header>
    <h1>Whatcha Watchin'?</h1>
    <p>Tell us what you're watching!</p>
  </header>
  <div id="views">
    <label>This is what we're watching!</label>
  	<ul>
  		<li>foobar</li>
  	</ul>
  </div>
  <footer>
  <p id="response">Thank you for telling us what you were watching!</p>
    <form>
    <div>
      <label for="name">Name:</label>
      <input type="text" id="name" maxlength="30" placeholder="Nickname" required>
  </div>
  <div>
  <label for="watching">What are you watching?</label>
  <select id="watching" required>
    <option></option>
    <option>Movie</option>
    <option>TV Show</option>
  </select>
</div><!-- Form Group Ends -->

<div>
<label for="title">Title:</label>
<input type="text" id="title" maxlength="260" placeholder="Title of Movie or TV Show" required>
</div><!-- Form Group Ends -->

<div>
<label for="genre">Genre:</label>
<select id="genre" required>
  <option></option>
  <option>Action/Adventure</option>
  <option>Animated</option>
  <option>Comedy</option>
  <option>Documentary</option>
  <option>Drama</option>
  <option>Horror</option>
  <option>Romantic</option>
  <option>Other</option>
</select>
</div><!-- Form Group Ends -->

<div>
<label for="platform">Platform:</label>
<select id="platform" required>
  <option></option>
  <option>Netflix</option>
  <option>Hulu</option>
  <option>Amazon Prime</option>
  <option>Other</option>
</select>
</div><!-- Form Group Ends -->

<div>
<label for="who">Who are you watching it with?</label>
<select id="who" required>
  <option></option>
  <option>By Myself</option>
  <option>Significant Other</option>
  <option>Parent(s)</option>
  <option>Friend(s)</option>
  <option>Other</option>
</select>
</div><!-- Form Group Ends -->

<div>
  <label for="experience">How was your experience?</label>
  <select id="experience" required>
    <option></option>
    <option>Amazing</option>
    <option>Great</option>
    <option>Solid</option>
    <option>OK</option>
    <option>Awkward</option>
    <option>Terrible</option>
    <option>Other</option>
  </select>
</div><!-- Form Group Ends -->
<div>
<label for="comments">Comments?</label>
</div>
<div id="coms">
<textarea id="comments" maxlength="500" rows="4" cols="50"></textarea>
</div><!-- Form Group Ends -->
  <button type="submit" id="submit">Submit</button>
  	</form>
  </footer>


</div> <!-- close container -->

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
<script src="js/shoutbox.js"></script>

</body>
</html>
