<html>
<head>
    <title>Create CV</title>
    <style>
        sup{
            color: red;
        }
        td, th {
            border: 2px solid black;
        }


    </style>
</head>
<body style="background-color: #E88741">
<div style="top: 10px; left: 60px ; position: absolute">
    <a href="../../">Home</a>
    <a href="../list/">CV List</a>
</div>

<fieldset style="top:10%; left: 25%; position: absolute; width: 50%; border: 2px solid midnightblue">
    <legend>Create Your CV</legend>
    <form action="insert.php" method="post" enctype="multipart/form-data">
        <div style="right: 10%; position: absolute;">
            <strong>Your Photo:<sup>*</sup></strong>
            <input type="file" name="pic">
        </div>


        <div>
            <strong>Your Name:<sup>*</sup></strong>
        </div>
        <input type="text" name="title" autofocus>

        <div>
            <strong>Father's Name:<sup>*</sup></strong>
        </div>
        <input type="text" name="ftitle">

        <div>
            <strong>Mother's Name:<sup>*</sup></strong>
        </div>
        <input type="text" name="mtitle">

        <div>
            <strong>Gender:<sup>*</sup></strong>
        </div>
        <select name="gender">
            <option name="gender" value="" selected>-choose-</option>
            <option name="gender" value="Male">Male</option>
            <option name="gender" value="Female">Female</option>
        </select>

        <div>
            <strong>Date of Birth:<sup>*</sup></strong>
        </div>
        <input type="date" name="dob" placeholder="yyyy/mm/dd">

        <div>
            <strong>Religion:<sup>*</sup></strong>
        </div>
        <input type="text" name="religion">

        <div>
            <strong>Nationality:<sup>*</sup></strong>
        </div>
        <input type="text" name="nationality">

        <div>
            <strong>Educational Qualification:<sup>*</sup></strong>
                <table>
                    <tr>
                        <th></th>
                        <th>School/College</th>
                        <th>Passing Year</th>
                        <th>Department/Subject</th>
                        <th>GPA/CGPA</th>
                    </tr>
                    <tr>
                        <td>SSC</td>
                        <td><input type="text" name="school"></td>
                        <td><input type="number" name="syear"></td>
                        <td><select name="sdept">
                                <option name="sdept" value="">-choose-</option>
                                <option name="sdept" value="Science">Science</option>
                                <option name="sdept" value="Commerce">Commerce</option>
                                <option name="sdept" value="Arts">Arts</option>
                            </select></td>
                        <td><input type="text" name="sgpa"></td>
                    </tr>
                    <tr>
                        <td>HSC</td>
                        <td><input type="text" name="college"></td>
                        <td><input type="number" name="hyear"></td>
                        <td><select name="hdept">
                                <option name="hdept" value="">-choose-</option>
                                <option name="hdept" value="Science">Science</option>
                                <option name="hdept" value="Commerce">Commerce</option>
                                <option name="hdept" value="Arts">Arts</option>
                            </select></td>
                        <td><input type="text" name="hgpa"></td>
                    </tr>
                    <tr>
                        <td>Bachelor</td>
                        <td><input type="text" name="buni"></td>
                        <td><input type="text" name="byear"></td>
                        <td><input type="text" name="bdept"></td>
                        <td><input type="text" name="bgpa"></td>
                    </tr>
                    <tr>
                        <td>Masters</td>
                        <td><input type="text" name="muni"></td>
                        <td><input type="text" name="myear"></td>
                        <td><input type="text" name="mdept"></td>
                        <td><input type="text" name="mgpa"></td>
                    </tr>
                </table>
        </div>

        <div>
            <strong>Permanent Address:<sup>*</sup></strong>
        </div>
        <textarea name="paddress"></textarea>

        <div>
            <strong>Present Address:<sup>*</sup></strong>
        </div>
        <textarea name="praddress"></textarea>

        <div>
            <strong>Mobile Number:<sup>*</sup></strong>
        </div>
        <input type="text" name="mobile">

        <div>
            <strong>E-mail:<sup>*</sup></strong>
        </div>
        <input type="email" name="mail">

        <div>
            <strong>Career Objectives:<sup>*</sup></strong>
        </div>
        <textarea name="cobj"></textarea>

        <div>
            <strong>Skills:<sup>*</sup></strong>
        </div>
        <textarea name="skill"></textarea>

    <div>
        <input type="submit" value="Create CV">
    </div>

</form>
</fieldset>


</body>
</html>