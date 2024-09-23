<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Product List</title>
                <style>
                    table {
                        width: 50%;
                        border-collapse: collapse;
                        margin: 20px 0;
                    }
                    table, th, td {
                        border: 1px solid black;
                    }
                    th, td {
                        padding: 8px;
                        text-align: left;
                    }
                    th {
                        background-color: #f2f2f2;
                    }
                </style>
            </head>
            <body>
                <h2>Product Information</h2>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                    </tr>
                    <!-- Loop over each product in the XML -->
                    <xsl:for-each select="products/product">
                        <tr>
                            <td><xsl:value-of select="name" /></td>
                            <td><xsl:value-of select="price" /></td>
                            <td><xsl:value-of select="description" /></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
