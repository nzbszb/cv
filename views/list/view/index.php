<?php
$id = $_GET['id'];
include("../../../src/admin/config.php");
$sql = "SELECT * FROM info WHERE id='$id'";
$query = mysqli_query($myConnection,$sql);
while($row = mysqli_fetch_array($query)) {

    ?>
    <html>
    <head>
        <link type="text/css" rel="stylesheet" href="../../../css/style1.css"/>
        <title>CV: <?php echo $row['title'] ?></title>

    </head>
    <body>
    <div id="submit">
    <a href="../../../">Home</a>
    <a href="../">CV List</a>
    <a href="../../create/">Create CV</a>
        <button type="submit"  onclick="myFunction()">Print CV</button>
    </div>
    <div id="header">
        

        <a href="mailto:<?php echo $row['mail'] ?>" target="_blank"><p id="email"><img src="<?php echo "../../../".$row['pic']?>" height="150px" width="150px"></p></a>
        <p id="name"><?php echo $row['title'] ?><br><?php echo $row['praddress']?><br>Mobile:<?php echo $row['mobile']?><br>E-mail:<?php echo $row['mail']?></p>

    </div>
    <div class="left">
    </div>
    <div class="right">
        <h3>Career Objective:</h3>
        <p>
            <?php
            echo $row['cobj'];
            ?>
        </p>

        <h3>Educational Qualifications</h3>
        <table>
            <tr id="heading">
                <td>Qualification</td>
                <td>School/College</td>
                <td>Passing Year</td>
                <td>Department/Subject</td>
                <td>GPA/CGPA</td>
            </tr>
            <?php if(!empty($row[9]) && !empty($row[10]) && !empty($row[11]) && !empty($row[12])) {
                ?>
                <tr>
                    <td>S.S.C</td>
                    <td><?php echo $row[9] ?></td>
                    <td><?php echo $row[10] ?></td>
                    <td><?php echo $row[11] ?></td>
                    <td><?php echo $row[12] ?></td>
                </tr>
                <?php
            }
            if(!empty($row[13]) && !empty($row[14]) && !empty($row[15]) && !empty($row[16])) {
                ?>
                <tr>
                    <td>H.S.C</td>
                    <td><?php echo $row[13] ?></td>
                    <td><?php echo $row[14] ?></td>
                    <td><?php echo $row[15] ?></td>
                    <td><?php echo $row[16] ?></td>
                </tr>
                <?php
            }
            if(!empty($row[17]) && !empty($row[18]) && !empty($row[19]) && !empty($row[20])) {
                ?>
                <tr>
                    <td>Bachelor</td>
                    <td><?php echo $row[17] ?></td>
                    <td><?php echo $row[18] ?></td>
                    <td><?php echo $row[19] ?></td>
                    <td><?php echo $row[20] ?></td>
                </tr>
                <?php
            }
            if(!empty($row[21]) && !empty($row[22]) && !empty($row[23]) && !empty($row[24])) {
                ?>
                <tr>
                    <td>Masters</td>
                    <td><?php echo $row[21] ?></td>
                    <td><?php echo $row[22] ?></td>
                    <td><?php echo $row[23] ?></td>
                    <td><?php echo $row[24] ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <h3>Skills</h3>
        <p>
            <?php
            echo $row['30'];
            ?>

        </p>

        <h3>Personal Information:</h3>
        <strong><p>
        <ul>
                <li>
                    Full Name : <?php echo $row[2]?>
                </li>
                <li>
                    Father’s Name : <?php echo $row[3]?>
                </li>
                <li>
                    Mother’s Name : <?php echo $row[4]?>
                </li>
                <li>
                    Gender : <?php echo $row[5]?>
                </li>
                <li>
                    Date of birth : <?php echo $row[6]?>
                </li>
                <li>
                    Religion : <?php echo $row[7]?>
                </li>
                <li>
                    Nationality : <?php echo $row[8]?>
                </li>
                <li>
                    Permanent Address: <?php echo $row[25]?>
                </li>
        </ul>
            </p></strong>

        <h3>Declaration</h3>
        <p>
            I hereby declare that the details furnished above are true and correct to the best of my knowledge and
            belief.</p>
    </div>

    <div id="footer"></div>

    <script>
        function myFunction() {
            submit.style.display = "none";
            window.print();
        }

    </script>



    </body>
    </html>
    <?php
}
    ?>

