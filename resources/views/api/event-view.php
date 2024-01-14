<!DOCTYPE html>
<html>
<head>
    <title>Event View</title>
</head>
<body>
    <form method="POST" action="/api/event-view">
        @csrf
        <label for="event_id">Event ID:</label><br>
        <input type="text" id="event_id" name="event_id"><br>
        <input type="submit" value="Submit">
    </form>

    
        <h2>Event Name: {{ $eventName }}</h2>
        <p>Description: {{ $eventDescription }}</p>
        <p>Date Time: {{ $eventStartDateTime }}</p>
    
</body>
</html>
