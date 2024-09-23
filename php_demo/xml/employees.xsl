<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <!-- Template for the whole document -->
    <xsl:template match="/">
        <html>
            <head>
                <title>Employee Details</title>
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
                <h2>Employee Details</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Position</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Apply template for each employee node -->
                        <xsl:apply-templates select="employees/employee"/>
                    </tbody>
                </table>
            </body>
        </html>
    </xsl:template>

    <!-- Template for each employee -->
    <xsl:template match="employee">
        <tr>
            <td><xsl:value-of select="id"/></td>
            <td><xsl:value-of select="name"/></td>
            <td><xsl:value-of select="department"/></td>
            <td><xsl:value-of select="position"/></td>
            <td><xsl:value-of select="salary"/></td>
        </tr>
    </xsl:template>

</xsl:stylesheet>
