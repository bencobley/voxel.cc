<?php
    header("Content-type: text/css; charset: UTF-8");
    require("cssvariables.php")
?>

.techspecs {
    background-color: black;
    color: white;

}

.carousel a {
    z-index: 1000;
}


.carousel-indicators li {
    background-color: #dddddd;
}

.collapsible {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 16px;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active, .collapsible:hover {
  background-color: #ccc;
}

/* Style the collapsible content. Note: hidden by default */
.content {
  padding: 10px;
  padding-left: 40px;
  display: none;
  overflow: hidden;
  background-color: white;
  font-size: 14px;
}


@media (max-width: 767px) {

    .carousel-inner {
        /*        background-color: var(--secondary-colour);*/
        padding-bottom: 70%
    }


    .carousel-caption {
        color: black;
        bottom: -60%;
        text-align: left;
        max-height: 50%;
        

    }

    .carousel-item img {
        width: 100%;
        max-width: 600px;
        height: auto;
        display: block;
        margin-left: auto !important;
        margin-right: auto !important;
    }

}


@media (min-width: 768px) {




    .carousel-caption {
        color: black;
        left: 60%;
        right: 15%;
        top: 15%;
        text-align: left;
        max-height: 50%;

    }

    .carousel-caption h2 {
        margin-bottom: 20px;
    }

    .carousel-item img {
        width: 55%;
        /*        height: 1000px;*/
        /*        max-height: 50%;*/

    }



}

.card {
    flex-wrap: wrap !important;
    min-width: 325px !important;
    max-width: 325px !important;
    /*    margin-left: auto !important;*/
    /*    margin-right: auto !important;*/
    margin-bottom: 30px !important;
}

.slickimagetext p {
    padding: 10px;
    text-align: center;
}

.slickcarousel p {
    padding: 0px;
    text-align: left;
}
