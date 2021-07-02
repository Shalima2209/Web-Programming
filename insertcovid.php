<!DOCTYPE HTML>
<html>

<body bgcolor="#FAEBD7">
    <center>
        <h2>Covid Patient details Updated..</h2>
    </center>
    <br>

    <?php
    include("DBConnection2.php");

    $id = $_POST["id"];
    $name = $_POST["name"];
    $age = $_POST["age"];
    $address = $_POST["address"];
    $admissiondate = $_POST["admissiondate"];
    $doctorname = $_POST["doctorname"];
    $medicines = $_POST["positive"];


    $query = "insert into covid(id,name,age,address,admissiondate,doctorname,positive) values('$id','$name','$age','$address','$admissiondate','$doctorname','$positive')"; 
    $result = mysqli_query($db, $query);

    ?>

    <h3> Patient information is inserted successfully </h3>

    <a href="Searchcovid.php"> To search for the Patient information click here </a>

</body>

</html>