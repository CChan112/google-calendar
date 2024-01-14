<!DOCTYPE html>
<html>
<head>
    <title>Create Event</title>
</head>
<style>
.input-field {
  width: 50%;
  padding: 13px 18px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #555;
  outline: none;
}

.input-field:focus {
  border: 2px solid #4CAF50; 
}

.button {
  display: block;
  width: 30%;
  height: 50px;
  margin: 10px 0;
  background-color: #4CAF50; 
  color: white;
  text-align: center;
  text-decoration: none;
  font-size: 17px;
  transition-duration: 0.4s;
  cursor: pointer;
}

input[type="datetime-local"] {
    width: 180px;
    padding: 8px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
}

label {
    font-size: 18px;
    color: #4CAF50;
}

.button:hover {
  background-color: #45a049;
}
</style>

<body>
<h2>Add a event to google calendar</h2>
<form id="eventForm" method="POST" action="/api/create-event">
        
    @csrf
    <input type="text" id="title" name="title" class="input-field" placeholder="Enter event name">
    <br>
    <label for="start">Start Time:</label><br>
    <input type="datetime-local" id="start" name="start"><br>
    <label for="end">End Time:</label><br>
    <input type="datetime-local" id="end" name="end"><br>
    <input type="text" id="description" name="description" class="input-field" placeholder="Enter event description">
    <br>
    <input type="submit" value="Submit">
    </form>

</body>
</html>
