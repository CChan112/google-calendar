<!DOCTYPE html>
<html>
<body>
<style>
.input-field {
  width: 50%;
  padding: 13px 18px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #555;
  outline: none;
}

.input-field-r {
  width: 50%;
  padding: 13px 18px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #555;
  outline: none;
}

.input-field:focus {
  border: 2px solid #00ff7f; 
}

.input-field-r:focus {
  border: 2px solid #FF5733; 
}
</style>
<h2>View & Delete saved event</h2>
<form id="viewForm" method="GET" action='/api/event/view'>
    @csrf
    <input type="text" id="eventId" name="eventId" class="input-field" placeholder="Enter event ID to show the event details">
    <br>
    <input type="submit" value="View Event">
</form>



<form method="POST" action='/event/delete'>
    @csrf
    <br>
    <input type="text" id="eventId" name="eventId" class="input-field-r" placeholder="Enter ID of event you want to delete">
    <br>
    <input type="submit" value="Delete Event">
</form>

</body>
</html>