<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>CV Creator</title>
    <link type="text/css" rel="stylesheet" href="css/style1.css"/>
</head>
<body style="background-color: coral">
<div id="home">
    <p id="welcome">Welcome To Our CV Creator Site</p>
</div>

        <a href="views/create" class="button">Create Your CV</a>
<br>
        <a style="margin-top: 5%;" href="views/list" class="button">View The CV List</a>
<br>

           <a style="margin-top: 10%;" class="button"><form action="views/list" method="get">
                <input type="search" name="search" placeholder="Search CV here...">
                <input type="submit" value="Search">
               </form><h6>e.g.: Name,Mobile,Email,Address,CGPA only.</h6></a>

</body>
</html>