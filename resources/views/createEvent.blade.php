<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.alert {
  padding: 20px;
  background-color: #3656f4;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}

.button {
  display: block;
  width: 50%;
  height: 50px;
  margin: 10px 0;
  background-color: #315E45 ; 
  color: white;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  transition-duration: 0.4s;
  cursor: pointer;
}



.button:hover {
  background-color: #45a049;
}

.input-field {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #555;
  outline: none;
}

</style>
</head>
<body>

<h2>Event added!</h2>

<p>If the event not showing in the calendar within 10 seconds, you may manually refresh the webpage.</p>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Hey!</strong> In the text box below, is your <strong> unique <strong> event id.
</div>

<input type="text" value="{{ $id }}" id="myInput">
<button onclick="myCopy()">Copy</button>

<script>
function myCopy() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}
</script>

<button class="button" onclick="calFastredirect()">Click me to open a new google calendar tab <img src="https://uxwing.com/wp-content/themes/uxwing/download/brands-and-social-media/google-calendar-icon.png" alt="Google Calendar" width="30" height="30"></button>

<script>
function calFastredirect() {
  window.open('https://www.google.com/calendar', '_blank');
}
</script>

<button class="button" onclick="myCountdown()">Back to Add Event Page</button>
  <div id="myModal" style="display: none; position: fixed; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.4);">
  <div style="background-color: #fefefe; margin: 15% auto; padding: 20px; border: 1px solid #888; width: 80%;">
  <p>Confirm return to Add Event Page?</p>
    <button onclick="redirect()">OK</button>
    <button onclick="closeModal()">Change of mind</button>
  </div>
</div>
<script>
function myCountdown() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

function redirect() {
  document.getElementById('myModal').style.display = "none";
  window.location.href = 'calendar-home';
}
</script>

<button class="button" onclick="myEdit()">Edit Event</button>
<div id="myModal1" style="display: none; position: fixed; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.4);">
  <div style="background-color: #fefefe; margin: 15% auto; padding: 20px; border: 1px solid #888; width: 80%;">
  <p>Confirm leaving to edit event page?</p>
    <button onclick="redirect1()">OK</button>
    <button onclick="closeModal1()">Change of mind</button>
  </div>

  <script>
  function myEdit() {
    document.getElementById('myModal1').style.display = "block";
  }

  function closeModal1() {
    document.getElementById('myModal1').style.display = "none";
  }

  function redirect1() {
    document.getElementById('myModal1').style.display = "none";
    window.location.href = 'edit-event';
  }
  </script>
</body>
</html>
