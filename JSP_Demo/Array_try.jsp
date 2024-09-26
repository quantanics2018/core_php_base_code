<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
    <title>Programming Languages</title>
</head>
<body>
    <h1>Programming Languages</h1>
    
    <ul>
        <% 
            // Array of programming languages
            String[] languages = {"C", "C++", "Java", "Python"};
            
            // Loop through the array and print each language
            for (int i = 0; i < languages.length; i++) {
        %>
            <li><%= languages[i] %></li>
        <% 
            } 
        %>
    </ul>

</body>
</html>
