<!DOCTYPE HTML>
<html>

<body bgcolor="#FOF8FF">
    <center>
        <h2>ENTER  PATIENT DETAILS</h2>
    </center>
    <form action="Insertpatient.php" method="post">
        <table border="2" align="center" cellpadding="5" cellspacing="5">
            <tr>
                <td> Enter Id :</td>
                <td> <input type="text" name="id" size="48"> </td>
            </tr>
            <tr>
                <td> Enter Patient Name :</td>
                <td> <input type="text" name="name" size="48"> </td>
            </tr>
            <tr>
                <td> Enter Age :</td>
                <td> <input type="text" name="age" size="48"> </td>
            </tr>
            <tr>
                <td> Enter Address :</td>
                <td> <input type="text" name="address" size="48"> </td>
            </tr>
            <tr>
                <td> Enter Date of admission: </td>
                <td> <input type="text" name="admissiondate" size="48"> </td>
            </tr>
            <tr>
                <td> Enter Doctor's Name : </td>
                <td> <input type="text" name="doctorname" size="48"> </td> </tr>
              
            <tr>
                <td> Prescribed Medicines: </td>
                <td> <input type="text" name="medicines" size="48"> </td>
            </tr>    

            <tr>
                <td></td>
                <td>
                    <input type="submit" value="submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>