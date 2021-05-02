<html>

<head>
    <title> Lab12 </title>
    <link rel="stylesheet" href="styles/style.css"> </head>

<body>
    <h1>List of books</h1> <a href="new.html">Add a new book</a>
    <br>
    <br>
    <table>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Author</th>
            <th>Cover art</th>
            <th>Download link</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php

$link = mysqli_connect("localhost", "root", "", "library");

 $rows = mysqli_query($link, "select * from books");
        while ($stroka= mysqli_fetch_array($rows)){
            echo "<tr>";
            echo "<td>" . $stroka['id'] . "</td>";
            echo "<td>" . $stroka['title'] . "</td>";
            echo "<td>" . $stroka['author'] . "</td>";
            echo "<td>  <img id='dbc' src='".$stroka['cover']."'></td>";
            echo "<td> <a href='" . $stroka['link'] . "'> Download </a></td>";

            echo "<td><a href='edit.php?id=".$stroka['id']. "'> Edit </a> </td>" ;
            echo "<td><a href='delete.php?id=".$stroka['id']. "'> Delete </a> </td>" ;
            echo "</tr>";
        }


mysqli_close($link);


         ?>
    </table>
</body>

</html>
