<!DOCTYPE HTML>
<html>

<body bgcolor="#FAEBD7">
    <center>
        <h2>Patient details Updated Sucessfully.</h2>
    </center>
    <br>

    <?php
    include("DBConnection.php");

    $id = $_POST["id"];
    $name = $_POST["name"];
    $age = $_POST["age"];
    $address = $_POST["address"];
    $admissiondate = $_POST["admissiondate"];
    $doctorname = $_POST["doctorname"];
    $medicines = $_POST["medicines"];


    $query = "insert into patient(id,name,age,address,admissiondate,doctorname,medicines) values('$id','$name','$age','$address','$admissiondate','$doctorname','$medicines')"; 
    $result = mysqli_query($db, $query);

    ?>

    <h3> Patient information is inserted successfully </h3>

    <a href="Searchpatient.php"> To search for the Patient information click here </a>

</body>

</html>