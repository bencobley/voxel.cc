<?php
    header("Content-type: text/css; charset: UTF-8");
    require("cssvariables.php")
?>

header {
    position: relative;
    background-color: black;
    height: 55vh;
    min-height: 25rem;
    width: 100%;
    overflow: hidden;
}

header video {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: 100%;
    height: auto;
    z-index: 0;
    -ms-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
}

header .container {
    position: relative;
    z-index: 2;
}

header .overlay {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: black;
    opacity: 0.4;
    z-index: 1;
}


@media (max-width: 1200px) {

    header video {
        height: 100%;
        width: auto;
    }
}



/*
@media (pointer: coarse) and (hover: none) {
    header {
        background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
    }

    header video {
        display: none;
    }
}
*/
