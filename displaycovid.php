<!DOCTYPE HTML>
<html>

<body bgcolor="#FOF8FF">
    <center>
        <h2>Display the searced Covid Patient details..</h2>
    </center>
    <br>

    <?php
    include("DBConnection2.php");

    $search = $_REQUEST["search"];

    $query = "select id,name,age,address,admissiondate,doctorname,positive from covid where title like '%$search%'";
    $result = mysqli_query($db, $query);

    if (mysqli_num_rows($result) > 0) if (mysqli_num_rows($result) > 0) {
    ?>

        <table border="2" align="center" cellpadding="5" cellspacing="5">

            <tr>
                <th> ID </th>
                <th> name </th>
                <th> age </th>
                <th> address </th>
                <th> Date of admission </th>
                <th> Doctor's name </th>
                <th> Covid result </th>
            </tr>

            <?php while ($row = mysqli_fetch_assoc($result)) 
            {
            ?>
                <tr>
                    <td><?php echo $row["id"]; ?> </td>
                    <td><?php echo $row["name"]; ?> </td>
                    <td><?php echo $row["age"]; ?> </td>
                    <td><?php echo $row["address"]; ?> </td>
                    <td><?php echo $row["admissiondate"]; ?> </td>
                    <td><?php echo $row["doctorname"];?> </td>
                    <td><?php echo $row["positive"];?> </td>

                </tr>
        <?php
            }
        } else
            echo "<center>No Patient found in the hospital by the name $search </center>";
        ?>
        </table>
</body>

</html>