$(document).ready(function(){
  $('#response').hide();
  refresh_shoutbox();
  setInterval(refresh_shoutbox, 15000);
  $('#submit').on('click', function() {
    $('#response').show();
    var name  = $('#name').val();
    var watching = $('#watching').val();
    var title  = $('#title').val();
    var genre = $('#genre').val();
    var platform  = $('#platform').val();
    var who = $('#who').val();
    var experience  = $('#experience').val();
    var comments = $('#comments').val();

  	// build string to send to the database
  	// note it is using your database's fieldnames: name= and shout=
    var dataString = 'name=' + name + '&watching=' + watching + '&title=' + title + '&genre=' + genre + '&platform=' + platform + '&who=' + who + '&experience=' + experience + '&comments=' + comments;

  	// validate input - pop an alert if either form field is empty
  	if (name == '' || watching == '' || title == '' || genre == '' || platform == '' || who == '' || experience == '' || comments == '') {
  		alert('Please fill in the required fields.');
  	} else {
  		// this is a jQuery Ajax request, running your PHP file
  		$.ajax({
  			type: "POST",
  			url: "shoutbox.php",
  // send the value of dataString to shoutbox.php
  			data: dataString,
  // use the output of the PHP script in your HTML page
  			success: function(html) {
  // this jQuery replaces contents of the UL element
  $('#views ul').html(html);
  // clears the shout input field, but keeps name
  $('#watching').val('');
    $('#title').val('');
    $('#genre').val('');
    $('#platform').val('');
    $('#who').val('');
    $('#experience').val('');
    $('#comments').val('');
  			} // end success
  }); // end ajax
  } // end if-else
  	return false;
  }); // end function

  function refresh_shoutbox() {
  var dataString = 'refresh=1';
  // a different jQuery Ajax request with options
  $.ajax({
  type: "POST",
  url: "shoutbox.php",
  data: dataString,
  // this brings in the result of the PHP script
  success: function(html) {
  // replace the contents of the UL element
  $("#views ul").html(html);
  } // end success
  }); // end ajax
  } // end refresh function





}); // end of document ready
