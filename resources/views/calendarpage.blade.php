<!DOCTYPE html>
<html>
<head>
    <title>Create Event</title>
</head>
<body>
    <form method="POST" action="/api/create-event">
        
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
        <label for="title">Event Title:</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="start">Start Time:</label><br>
        <input type="datetime-local" id="start" name="start"><br>
        <label for="end">End Time:</label><br>
        <input type="datetime-local" id="end" name="end"><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description"></textarea><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
