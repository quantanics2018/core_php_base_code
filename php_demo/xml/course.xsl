<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <!-- Root template to match the XML root node -->
    <xsl:template match="/">
        <html>
            <head>
                <title>Course List</title>
                <style>
                    table {
                        width: 100%;
                        border-collapse: collapse;
                    }
                    table, th, td {
                        border: 1px solid black;
                    }
                    th, td {
                        padding: 10px;
                        text-align: left;
                    }
                    th {
                        background-color: #f2f2f2;
                    }
                </style>
            </head>
            <body>
                <h1>Available Courses</h1>
                <table>
                    <tr>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Trainer</th>
                        <th>Year</th>
                        <th>Fees</th>
                    </tr>
                    <!-- Iterate over each course node -->
                    <xsl:for-each select="courses/course">
                        <tr>
                            <td><xsl:value-of select="category" /></td>
                            <td><xsl:value-of select="title" /></td>
                            <td><xsl:value-of select="trainer" /></td>
                            <td><xsl:value-of select="year" /></td>
                            <td><xsl:value-of select="fees" /></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
