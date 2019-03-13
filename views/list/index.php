<?php
include("../../src/admin/config.php");

$i=1;
    ?>

<html>
<head>
    <title>CV List</title>
</head>
<body style="background-color: #668284">
<div style="top: 2%; left: 5% ; position: absolute">
<a href="../../">Home</a>
<a href="../create/">Create CV</a>
    <a href="../list">CV List</a>
</div>
<form style="position: absolute; right: 5%; top: 2%" action="index.php" method="get">
    <input type="search" name="search" placeholder="Search CV here...">
    <input type="submit" value="Search">
</form>
<p style="position: absolute; right: 2%; top: 4%">e.g.: Name,Mobile,Email,Address,CGPA only.</p>
<table style="top: 50px; left: 50px ; position: absolute">
    <?php
    if (!empty($_GET['search']))
    {
        $keyword = $_GET['search'];
        $sqls = "SELECT * FROM info WHERE (title LIKE '%$keyword%') OR (praddress LIKE '%$keyword%') OR (paddress LIKE '%$keyword%') OR (mobile LIKE '%$keyword%') OR (mail LIKE '%$keyword%') OR (sgpa LIKE '%$keyword%') OR (hgpa LIKE '%$keyword%') OR (bgpa LIKE '%$keyword%') OR (mgpa LIKE '%$keyword%')";
        $querys = mysqli_query($myConnection, $sqls);
//            print_r($querys->num_rows);
//        die();
        if($querys->num_rows!=0) {
        while ($row = mysqli_fetch_array($querys)) {

                ?>

                <tr>
                    <td><?php echo $i ?></td>
                    <td><img src="<?php echo "../../" . $row['pic'] ?>" height="100px" width="100px"></td>
                    <td><?php echo $row['title'] ?><br><?php echo $row['praddress'] ?>
                        <br>Mobile:<?php echo $row['mobile'] ?>
                        <br>E-mail:<?php echo $row['mail'] ?>
                        <br><a href="view/?id=<?php echo $row['id'] ?>"> see full CV</a></td>

                </tr>

                <?php
            $i++;
            }


        }
        else
        {
            ?>

            <tr><td>No CV Found For '<?php echo $keyword?> '</td></tr>
        <?php
            }
    }
    else {
        $sql = "SELECT * FROM info";
        $query = mysqli_query($myConnection,$sql);
        while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><img src="<?php echo "../../" . $row['pic'] ?>" height="100px" width="100px"></td>
                <td><?php echo $row['title'] ?><br><?php echo $row['praddress'] ?>
                    <br>Mobile:<?php echo $row['mobile'] ?><br>E-mail:<?php echo $row['mail'] ?>
                    <br><a href="view/?id=<?php echo $row['id'] ?>"> see full CV</a></td>

            </tr>
            <?php
            $i++;
        }
    }
    ?>
</table>

</body>
</html>



