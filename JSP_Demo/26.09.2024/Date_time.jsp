<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ page import="java.util.Date" %>
<!DOCTYPE html>
<html>
<head>
    <title>Current Date and Time</title>
    <script type="text/javascript">
        // JavaScript function to update the time every second
        function startTime() {
            var today = new Date();  // Get the current date and time
            var h = today.getHours();  // Get the hour
            var m = today.getMinutes();  // Get the minute
            var s = today.getSeconds();  // Get the second

            // Add a zero in front of numbers < 10 (for formatting)
            m = checkTime(m);
            s = checkTime(s);

            // Display the formatted time
            document.getElementById('currentTime').innerHTML = h + ":" + m + ":" + s;

            // Call the function again in 1000 milliseconds (1 second)
            setTimeout(startTime, 1000);
        }

        // Helper function to format time
        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;  // Add leading zero
            }
            return i;
        }
    </script>
</head>
<body onload="startTime()"> <!-- Call startTime() when the page loads -->
    <h1>Welcome, User!</h1>

    <%
        // Create a single Date object in a scriptlet
        Date today = new Date();
        String dayOfWeek = today.toString().split(" ")[0];
        String month = today.toString().split(" ")[1];
        int day = today.getDate();
        int year = today.getYear() + 1900;  // Adjust for year offset
    %>

    <!-- Display the current date using the created Date object -->
    <p>Current Date: <%= dayOfWeek %>, <%= month %> <%= day %>, <%= year %></p>

    <!-- Placeholder to show the current time -->
    <p>Current Time: <span id="currentTime"></span></p>

</body>
</html>
