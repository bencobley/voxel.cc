<!doctype html>
<html lang="en" class="h-100 w-100">

<head>
    <!-- Google Analytics meta tags and css-->
    <?php require_once('head.php'); ?>
    <title>Voxel Starter Pack</title>
</head>

<body>

    <?php require("css/cssvariables.php"); ?>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeSideNav()">&times;</a>
        <h3><a href="index">Home</a></h3>
        <h3><a href="starterpack">Products</a></h3>
        <h3><a href="hub#communityvibes">Hub</a></h3>
        <h4><a href="starterpack#techspecs">Tech&nbsp;Specs</a></h4>
        <h4><a href="starterpack#upcoming">Upcoming&nbsp;Releases</a></h4>
        <h4><a href="starterpack#faq">FAQ</a></h4>
        <h4><a href="about">About&nbsp;us</a></h4>
        <div class="socialmediaimagesidenavcontainer">
            <a href="https://www.facebook.com/Voxelcc-102399501326664/" style="padding: 0px"><img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/facebook.svg" class="socialmediaimagesidenav"></a>
            <a href="https://www.instagram.com/voxel.cc/" style="padding: 0px"><img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/instagram.svg" class="socialmediaimagesidenav"></a>
            <a href="https://www.github.com/voxelcc" style="padding: 0px"><img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/github.svg" class="socialmediaimagesidenav"></a>
        </div>
    </div>

    <nav class="navbar navbar-expand sticky-top">
        <div class="container justify-content-center">
            <ul class="nav navbar-nav flex-fill w-100 flex-nowrap">
                <li>
                    <div class="button-container d-inline-block" id="ben" onclick="openSideNav()">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav flex-fill justify-content-center d-none d-md-block">
                <li class="nav-item"><a class="navbar-brand" href="index">VOXEL</a></li>

            </ul>
            <ul class="nav navbar-nav flex-fill w-100 justify-content-end">
                <li class="nav-item">
                    <a class="nav-link d-none d-md-block" href="starterpack#techspecs">Tech Specs</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-primary" href="buy_shop">Buy</a>
                </li>
            </ul>

        </div>

    </nav>

    <main role="main">

        <!-- Full Page Image Header with Vertically Centered Content -->
        <header class="masthead mb-5" style="background-image: url('https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH2.png');"></header>

        <a class="anchor" id="overview"></a>

        <div class="container flex-shrink-0">

            <div class="row">
                <div class="col text-center">
                    <h1 class="text-break">Starter Pack</h1>
                </div>
                <br>

            </div>

            <div class="row mt-3">
                <div class="col-md">
                    <h4>Voxel’s first module pack: a powerful smart home controller and smart plug, open-sourced. </h4>

                </div>
                <div class="col-md">
                    <p>Augment your smart home with handy environment sensors, brilliant dot matrix displays and tactile inputs. Compatible with most of your favourite devices.
                    </p>

                </div>

            </div>

        </div>


        <div class="slickcarousel mx-auto pt-5" style="max-width: 1470px">
            <div><img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH4.png" class="slickimage">
                <p style="text-align: center; padding: 10px;">Brain Module</p>
            </div>
            <div><img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH5.png" class="slickimage">
                <p style="text-align: center; padding: 10px;">Brain Smart Plug Module</p>
            </div>
            <div><img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH7.png" class="slickimage">
                <p style="text-align: center; padding: 10px;">Environment Module</p>
            </div>
            <div><img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH8.png" class="slickimage">
                <p style="text-align: center; padding: 10px;">Motion Module</p>
            </div>
            <div><img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH6.png" class="slickimage">
                <p style="text-align: center; padding: 10px;">Multi-input Module</p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>


        <div class="container flex-shrink-0 pt-5">

            <div class="row" style="background-color: <?php echo ($for_makers_background) ?>">
                <div class="col-lg-6 p-0">
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH9.png" class="d-block h-100 w-100" style="object-fit: cover">
                </div>
                <br>
                <br>
                <br>

                <div class="col-lg-6 mb-3 p-5">
                    <h3 style="color: white;" class="pt-4">Designed for Makers, by Makers</h3>
                    <p style="color: white;" class="pt-2">We believe smart homes should be a joy to work with and maker tech should be easy to get up and running. Our new open smart home controller is built on principles of freedom, transparency and privacy.</p>
                    <a href="about" class="btn btn-secondary">Privacy ></a>
                </div>
            </div>
            <br>
            <br>
            <br>

            <!-- START THE FEATURETTES -->
            <div class="row featurette pt-5">
                <div class="col-md-6">
                    <h2 class="featurette-heading">Idea to Invention in Record Time</h2>
                    <p>Don't let wiring, compatability or drivers get in the way of creativity. Magnetic modularity allows you to make, break, rebuild, combine, mix, match and repeat.
                    </p>
                </div>
                <div class="col-md-6">
                    <video class="featurette-image img-fluid mx-auto float-md-right" preload="auto" autoplay="autoplay" muted="muted" loop="loop">
                        <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH11.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <br>
            <br>
            <hr class="featurette-divider">

            <div class="row featurette pb-5">
                <div class="col-md-6 order-md-2">
                    <h2 class="featurette-heading text-right">Code Your Way</h2>
                    <p class="text-right">An intuitive custom coding interface for beginners lets you create quick projects based on <a href="https://developers.google.com/blockly">Blockly by Google.</a> Supports Python and C++ for everything above.</p>
                    <a href="https://developers.google.com/blockly"><img src="media/blockly.png" style="height: 50px;" class="float-right"></a>
                </div>
                <div class="col-md-6 order-md-1">
                    <video class="featurette-image img-fluid mx-auto float-md-right" preload="auto" autoplay="autoplay" muted="muted" loop="loop">
                        <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH12.mp4" type="video/mp4">
                    </video>
                </div>
            </div>

        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <div id="featuresCarousel" class="carousel slide pt-5 pb-5 mx-auto" data-ride="carousel" data-interval="7500" style="max-width: 1470px; background-color: <?php echo ($effortless_monitoring_background) ?>">
            <ol class="carousel-indicators">
                <li data-target="#featuresCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#featuresCarousel" data-slide-to="1"></li>
                <li data-target="#featuresCarousel" data-slide-to="2"></li>
                <li data-target="#featuresCarousel" data-slide-to="3"></li>

            </ol>

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH14.png" class="d-block">
                    <div class="carousel-caption">
                        <h3 style="color: white;">Effortless Monitoring</h3>
                        <p style="color: white;">Show data from around the home. Beautifully visualised on the dot&hyphen;matrix display. Right at home, at home. </p>
                    </div>
                </div>
                <br>
                <br>
                <br>

                <div class="carousel-item">
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH17.png" class="d-block">
                    <div class="carousel-caption">
                        <h3 style="color: white; white-space: nowrap">Custom<br>Control</h3>
                        <p style="color: white;">Augment your smart home routines and schedules with the Voxel Environment and Motion Sensor Modules. Now even smarter.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH15.png" class="d-block">
                    <div class="carousel-caption">
                        <h3 style="color: white; white-space: nowrap">Magic<br>Automation</h3>
                        <p style="color: white;">Google Home and Alexa integration for when you want to shout, good old knobs &amp; buttons for when you don't.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH16.png" class="d-block">
                    <div class="carousel-caption">
                        <h3 style="color: white; white-space: nowrap">Wide<br>Compatibility</h3>
                        <p style="color: white;">Compatible with all things smart using IFTTT, Home Assistant and more. Use smart plugs to turn dumb things smart. </p>
                    </div>
                </div>


            </div>
            <a class="carousel-control-prev" href="#featuresCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#featuresCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container flex-shrink-0">


            <!-- START THE FEATURETTES -->


            <div class="row featurette pt-5">
                <div class="col-md-6">
                    <h2 class="featurette-heading">Endless Possibilities</h2>
                    <p>Download creations for your modules from a huge selection on <a href="hub#communityvibes">the community
                            Hub.</a> All completely free and open source. Modify and customise, then share your new creation with just one click.
                    </p>
                </div>

                <div class="col-md-6">
                    <video class="featurette-image img-fluid mx-auto float-md-right" preload="auto" autoplay="autoplay" muted="muted" loop="loop">
                        <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH10.mp4" type="video/mp4">
                    </video>
                </div>
            </div>

            <br>
            <br>
            <hr class="featurette-divider">
            <br>
            <br>

            <div class="row featurette pb-5">
                <div class="col-md-6 order-md-2">
                    <h2 class="featurette-heading text-right">Completely Hackable</h2>
                    <p class="text-right">Proudly open source. Yours to hack, tinker and upgrade. So modular that it arrives dissasembled: the ESP-8266 chip and dot-matrix display are yours to integrate into anything. </p>
                </div>
                <div class="col-md-6 order-md-1">
                    <video class="featurette-image img-fluid mx-auto float-md-right" preload="auto" autoplay="autoplay" muted="muted" loop="loop">
                        <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH13.mp4" type="video/mp4">
                    </video>
                </div>
            </div>

        </div>
        <br>
        <br>
        <br>
        <br>
        <a class="anchor" id="techspecs"></a>
        <div class="techspecs mt-5 mb-5 pb-5" id="techspecs" style="background-color: #111111">
            <br>
            <div class="container flex-shrink-0 mt-5">
                <h3 class="pb-5" style="margin: 0px;">Tech specs</h3>
            </div>
            <div class="slickcarousel">
                <div style="width: 180px">
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH33.png" class="slickimage2">
                    <br>
                    <div style="margin: 35px;">
                        <h4>Software</h4>
                        <p>Program with custom Voxel Block Code,or <br>code in Python or C++.</p>
                        <ul>
                            <li>Programmable over USB type-C with<br> Windows, Mac and Linux</li>
                            <li>ESP-8266 functionality available <br>as normal</li>
                            <li>Code straight in Arduino IDE</li>
                        </ul>
                        <p>Integrates with top Smart Home platforms</p>
                        <ul>
                            <li>Google Home / Alexa / HomeKit</li>
                            <li>IFTTT / Tasmota / Home Assistant /<br> OpenHAB / MQTT</li>
                        </ul>
                    </div>
                </div>
                <div style="width: 180px">
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH18.png" class="slickimage2">
                    <br>
                    <div style="margin: 35px;">
                        <h4>Brain Module</h4>
                        <h6>Measurements</h6>
                        <ul>
                            <li>60mm x 60mm x 60mm, 45g</li>
                        </ul>
                        <h6>Connectivity</h6>
                        <ul>
                            <li>3 x Magic Magnetic Voxel I2C connectors</li>
                            <li>USB Type-C PD</li>
                        </ul>
                        <p>ESP-8266 WiFi microcontroller</p>
                        <ul>
                            <li>4mb of flash / 80 MHz clock speed</li>
                            <li>11 x GPIO pins / 1 x Analog input ADC pin</li>
                            <li>Hardware SPI, UART and I2C</li>
                        </ul>
                        <p>Vibrant 16 x 16 LED dot-matrix display with SPI</p>
                    </div>
                </div>
                <div style="width: 180px">
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH19.png" class="slickimage2">
                    <br>
                    <div style="margin: 35px;">
                        <h4>Brain Smart Plug Module</h4>
                        <h6>Measurements</h6>
                        <ul>
                            <li>60mm x 60mm x 88mm, 60g</li>
                        </ul>
                        <h6>Connectivity</h6>
                        <ul>
                            <li>1 x Magic Magnetic Voxel I2C connector</li>
                        </ul>
                        <p>ESP-8266 WiFi microcontroller</p>
                        <ul>
                            <li>4mb of flash / 80 MHz clock speed</li>
                            <li>Pins not accessible - shock risk!</li>
                        </ul>
                        <p>13A Relay / Reprogrammable tactile button </p>
                    </div>
                </div>
                <div style="width: 180px">
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH21.png" class="slickimage2">
                    <br>
                    <div style="margin: 35px;">
                        <h4>Environment Module</h4>
                        <h6>Measurements</h6>
                        <ul>
                            <li>60mm x 60mm x 15mm, 12g</li>
                        </ul>
                        <p>DHT22 Temperature and Humidity Sensor</p>
                        <p>MAX44009 Ambient Light Sensor</p>
                        <h6>Connectivity</h6>
                        <ul>
                            <li>2 x Magic Magnetic Voxel I2C <br>connectors</li>
                        </ul>
                    </div>
                </div>
                <div style="width: 180px">
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH20.png" class="slickimage2">
                    <br>
                    <div style="margin: 35px;">
                        <h4>Multi Input Module</h4>
                        <h6>Measurements</h6>
                        <ul>
                            <li>60mm x 60mm x 20mm, 15g</li>
                        </ul>
                        <p>Rotary Encoder</p>
                        <p>3 x Tactile Buttons</p>
                        <h6>Connectivity</h6>
                        <ul>
                            <li>1 x Magic Magnetic Voxel I2C connectors</li>
                        </ul>
                    </div>
                </div>
                <div style="width: 180px">
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH22.png" class="slickimage2">
                    <br>
                    <div style="margin: 35px;">
                        <h4>Environment Module</h4>
                        <h6>Measurements</h6>
                        <ul>
                            <li>60mm x 60mm x 15mm, 12g</li>
                        </ul>
                        <p>DHT22 Temperature and Humidity Sensor</p>
                        <p>MAX44009 Ambient Light Sensor</p>
                        <h6>Connectivity</h6>
                        <ul>
                            <li>2 x Magic Magnetic Voxel I2C connectors</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <a class="anchor" id="faq"></a>
        <br>
        <div class="container flex-shrink-0">
            <h3 class="pb-5" style="margin: 0px;">FAQs</h3>
            <button type="button" class="collapsible">What protocols does Voxel use?<h4 style="float:right; margin: 0px; ">+</h4></button>
            <div class="content">
                <p>Voxel uses I2C to connect sensors and inputs and is able to subscribe to MQTT topics. It can also emulate some smart home products to allow control through Alexa or Google Home</p>
            </div>
            <button type="button" class="collapsible">Can it be battery powered?<h4 style="float:right; margin: 0px; ">+</h4></button>
            <div class="content">
                <p>We intend to release a battery pack that is compatible with our Voxel connectors as soon as possible. In the meantime Voxels can be powered through any power bank over USB. </p>
            </div>
            <button type="button" class="collapsible">How are we different to Home Assisant/OpenHAB?<h4 style="float:right; margin: 0px; ">+</h4></button>
            <div class="content">
                <p>We are focusing on providing quality hardware as well as open source software, wheras Home Assistant and OpenHAB both focus purely on software.</p>
            </div>
            <button type="button" class="collapsible">How will we maintain our open source code?<h4 style="float:right; margin: 0px; ">+</h4></button>
            <div class="content">
                <p>We will pay full-time developers to contribute to our source code.</p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <a class="anchor" id="upcoming"></a>
        <div class="container flex-shrink-0 pt-5 pb-5">
            <h3>Upcoming releases</h3>
            <div class="card-deck pt-3">
                <div class="card">
                    <img class="card-img-top" src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH1.png">
                    <div class="card-body">
                        <h5 class="card-title">Starter Pack</h5>
                        <p class="card-text">
                            <ul>
                                <li>Brain + dot-matrix display</li>
                                <li>Brain + smart plug</li>
                                <li>Temperature + humidity + ambient light</li>
                                <li>Motion and gesture sensor</li>
                            </ul>
                        </p>
                        <a href="buy_shop" style="color: black" class="btn btn-secondary">Buy ></a>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top" src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH26.png">
                    <div class="card-body">
                        <h5 class="card-title">Smart Plug Pack</h5>
                        <p class="card-text">3 x Voxel Brain Smart plugs with Magic Magnetic I2C connectors. </p>
                        <a href="buy_shop" style="color: black" class="btn btn-secondary">Buy ></a>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top" src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH31.png">
                    <div class="card-body">
                        <h5 class="card-title">Naked Brain</h5>
                        <p class="card-text">Just the PCBs and connectors. For integration into anything you can imagine.</p>
                        <a href="buy_shop" style="color: black" class="btn btn-secondary">Buy ></a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH23.png">
                    <div class="card-body">
                        <h5 class="card-title">Voice Assistant Pack</h5>
                        <p class="card-text">Microphone and speaker with Google Assistant, Alexa and Mycroft voice assistant functionality. </p>
                        <p class="card-text"><small class="text-muted">Coming soon</small></p>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top" src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH25.png">
                    <div class="card-body">
                        <h5 class="card-title">Wireless Connection Pack</h5>
                        <p class="card-text">Small form-factor brain and battery modules to be placed anywhere around the house. </p>
                        <p class="card-text"><small class="text-muted">Coming soon</small></p>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top" src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH24.png">
                    <div class="card-body">
                        <h5 class="card-title">Retro Gaming Pack</h5>
                        <p class="card-text">Fun retro gaming style gaming inputs, joystick and 4 tactile buttons. </p>
                        <p class="card-text"><small class="text-muted">Coming soon</small></p>
                    </div>
                </div>
                <div>

                    <br>
                    <br>
                    <div class="card-body">
                        <h5 class="card-title">We need you!</h5>
                        <p class="card-text">Help us decide what to develop next. We're working alongide our community to design the next releases. Have your say:</p>
                        <a class="btn btn-primary" href="hub">Join forum</a>
                    </div>
                </div>
            </div>

        </div>
        <br>
        <br>
        <br>
        <div style="background-color: <?php echo ($why_voxel_background) ?>">

            <div class="container mt-5">

                <div class="row">
                    <div class="col-lg-5 mb-3">
                        <div class="pt-5 pb-5">
                            <h2 style="color: white;">Why Voxel?</h2>
                            <h4 style="color: white;" class="pt-3">Complete freedom to create</h4>
                            <p style="color: white;">Build whatever you can dream up. Completely open source and customisable.</p>
                            <a class="btn btn-secondary" href="hub#tutorials">Tutorials ></a>

                            <h4 style="color: white;" class="pt-5">Built with privacy first</h4>
                            <p style="color: white;">Our business model is about selling great hardware, not your data. Find out more about us:</p>
                            <a class="btn btn-secondary" href="about">About us ></a>

                            <h4 style="color: white;" class="pt-5">Join a growing movement</h4>
                            <p style="color: white;">Get ideas and support from the wonderful Voxel community. Share your creations with 1 click.
                            </p>
                            <a class="btn btn-secondary" href="hub#communityvibes">Voxel Hub ></a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/BA/BA1.png" class="d-block h-100 w-100" style="object-fit: cover">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
    </main>

    <?php require_once('footer.php'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="javascript/bootstrap.bundle.js"></script>
    <script src="slick/slick.js"></script>
    <script src="javascript/main.js"></script>
    <script src="javascript/collapsible.js"></script>


</body>

</html>