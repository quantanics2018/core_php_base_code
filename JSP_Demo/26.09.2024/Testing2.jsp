<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<%@ page import="java.util.*" %>
<html>
<head>
    <title>User Information</title>
</head>
<body>
    <h1>User Information</h1>

    <%
        // Sample user data
        String userName = request.getParameter("name");
        String userAgeStr = request.getParameter("age");
        int userAge = 0;
        if (userAgeStr != null && !userAgeStr.isEmpty()) {
            userAge = Integer.parseInt(userAgeStr);
        }

        // Calculate the year of birth
        Calendar calendar = Calendar.getInstance();
        int currentYear = calendar.get(Calendar.YEAR);
        int yearOfBirth = currentYear - userAge;
    %>

    <form method="get">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
        <br>
        <input type="submit" value="Submit">
    </form>

    <%
        // Display user information if available
        if (userName != null && userAge > 0) {
    %>
        <h2>Welcome, <%= userName %>!</h2>
        <p>Your age is: <%= userAge %> years</p>
        <p>You were born in: <%= yearOfBirth %></p>
    <%
        } else {
    %>
        <p>Please enter your information above.</p>
    <%
        }
    %>
</body>
</html>
