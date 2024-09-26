<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ page import="java.util.Date" %> <!-- Directive to import the Date class -->
<!DOCTYPE html>
<html>
<head>
    <title>Current Date and Time</title>
</head>
<body>
    <h1>Current Date and Time</h1>
    <p><%= new Date() %></p> <!-- Using JSP expression to display current date and time -->
</body>
</html>
