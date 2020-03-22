<?php
header("Content-type: text/css; charset: UTF-8");
require("cssvariables.php")
?>


.horizontal_nav {
    padding-bottom: 30px;
    background-color: white;
    position: -webkit-sticky; /* Safari */
    position: sticky !important;
    top: 0px !important;
    z-index: 1;

}

.navbar {
    position: relative;
}


.horizontal_nav ul {
list-style-type: none;
margin: 0;
padding: 0;
overflow: hidden;
background-color: <?php echo $tertiary_colour; ?>;
}

.horizontal_nav li {
float: left;
}


.horizontal_nav li a {
display: block;
color: black;
text-align: center;
padding: 14px 16px;
text-decoration: none;
}

.horizontal_nav li a:hover {
background-color: <?php echo $secondary_colour; ?>;
}

.active {
background-color: <?php echo $for_makers_background; ?>;
}

.active a{
color: white !important;
}

.background1 {
    padding: 30px;
    color: black;
    background-color: <?php echo  $tertiary_colour; ?>;
}

.btn {
    margin-left: 35px;
}




blockquote {
font-family: Georgia, serif;
font-size: 18px;
font-style: italic;
width: 500px;
margin: 0.25em 0;
padding: 0.35em 40px;
line-height: 1.45;
position: relative;
}

blockquote:before {
display: block;
padding-left: 10px;
content: "\201C";
font-size: 60px;
position: absolute;
left: -10px;
top: -15px;
color: #7a7a7a;
}

