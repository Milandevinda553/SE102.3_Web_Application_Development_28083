<?php
    $fname = $_GET['fname'];
    $sname = $_GET['lname'];
    $uname = $_GET['uname'];
    $pas = $_GET['pas'];
    $gen = $_GET['gender'];
    $year = $_GET['year'];
    $email = $_GET['email'];
    $pnum = $_GET['pnum'];
    ?>

    <table border="2" width="500px">
        <tr>
            <td>First name</td>
            <td><?php echo $fname?></td>
        </tr>
        <tr>
            <td>Last name</td>
            <td><?php echo $sname?></td>
        </tr>
        <tr>
            <td>User name</td>
            <td><?php echo $uname?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><?php echo $pas?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?php echo $gen?></td>
        </tr>
        <tr>
            <td>Acedemic Year</td>
            <td><?php echo $year?></td>
        </tr>
        <tr>
            <td>Phone No</td>
            <td><?php echo $pnum?></td>
        </tr>
    </table>
</body>
</html>
