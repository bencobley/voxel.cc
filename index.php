<!doctype html>
<html lang="en" class="h-100">

<head>
    <!-- Google Analytics -->
    <?php require_once('head.php'); ?>
    <title>voxel.cc</title>
</head>

<?php
require('vendor/autoload.php');
require("css/cssvariables.php");

$host = "ec2-54-246-89-234.eu-west-1.compute.amazonaws.com";
$user = "vulobmbnkqnevx";
$password = "4418595e233c039564958927a230ebcad953f1b9aa9748a5919c9ac17a5cb530";
$dbname = "ddi961ov6qbkvb";
$port = "5432";

try {
    //Set DSN data source name
    $dsn = "pgsql:host=" . $host . ";port=" . $port . ";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";


    //create a pdo instance
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

$kickstarteremail = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["kickstarteremail"])) {
        $kickstarteremail = "";
    } else {
        $kickstarteremail = test_input($_POST["kickstarteremail"]);
    }
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<body class="d-flex flex-column h-100">
    <!-- Navbar -->
    <?php require_once('nav_bar.php'); ?>

    <main role="main">
        <div class="container flex-shrink-0 pt-5">
            <header class="mb-5">
                <div class="overlay"></div>
                <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/HP/HP1.mp4" type="video/mp4">
                </video>
                <div class="container h-100">
                    <div class="d-flex h-100 text-center align-items-center">
                        <div class="w-100 text-white">
                            <h1>Own your<br> smart home</h1>
                        </div>
                    </div>
                </div>
            </header>

            <div class="row pt-5 pb-5">
                <div class="col-lg-7">
                    <h2 class="text-break pb-3">The smart home for <span class="replace-me1">freedom.<span style="display:none">,community.,privacy.</span></span>
                    </h2>



                    <!--                    <div class="row">-->
                    <!--                        <div class="col">-->

                    <h5>Not <span class="replace-me2">closed doors.<span style="display:none">,big tech.,big data.</span></span>
                    </h5>
                    <p>
                        From beginner to expert, our magnetic modules and intuitive software give you the tools and flexibility to create whatever you want. Compatible with all your favourite devices.
                    </p>
                    <!--                        </div>-->
                    <!--                        <div class="col">-->
                    <!-- <p>We’re designing our latest products around you; the crazy inventors, smart home wizards and new makers. We’re on a mission to bring open source smart homes to the world, powered by our amazing community. Join the movement.
                    </p> -->
                    <!--                        </div>-->
                    <!--                    </div>-->

                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/HP/HP2.gif" class="d-block d-lg-none h-100 w-100" style="object-fit: cover; max-height: 500px">

                    <div class="kickstarter-box mt-5">
                        <h4>Sign up for for <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/HP/kickstarter.png" style="height: 25px"> updates: </h4>
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <div class="input-group pt-3">
                                <div class="form-label-group w-75">
                                    <input style="font-size: 22px;" type="email" id="inputEmail" class="form-control" placeholder="Email address" name="kickstarteremail">
                                    <label for="inputEmail">Email address</label>
                                </div>
                                <div class="input-group-append w-25">
                                    <button class="btn btn-primary" type="submit" style="border-top-right-radius: 5px; border-bottom-right-radius: 5px; height: 50px;">Go</button>
                                </div>
                            </div>
                            <?php
                            if ($kickstarteremail <> "") {
                                $query = "INSERT INTO kickstarterEmails(email) VALUES('$kickstarteremail')";
                                $pdo->query($query);
                                echo "Thanks!";
                            }
                            ?>
                            <small id="emailHelp" class="form-text text-muted mt-0">We'll never share your email with anyone else. Unsubscribe at any time.</small>
                        </form>
                    </div>

                </div>

                <div class="col-lg-5 d-none d-lg-block">
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/HP/HP2.gif" class="d-block h-100 w-100" style="object-fit: cover; max-height: 500px">
                </div>
            </div>



            <div class="row mt-5" style="background-color: <?php echo($secondary_colour); ?>">
                <div class="col-lg-6 p-0">
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/HP/HP5.png" class="d-block h-100 w-100" style="object-fit: cover">
                </div>
                <div class="col-lg-6 mb-3 p-5">
                    <h2 class="pt-4 pb-4">Starter pack</h2>
                    <h6>Voxel’s first module pack: a powerful smart home controller, open-sourced. </h6>
                    <p>Augment your smart home with handy environment sensors, brilliant dot matrix displays and tactile inputs; modularised. Compatible with all your favourite devices. </p>
                    <a class="btn btn-primary" href="starterpack">Explore</a>
                </div>
            </div>
        </div>

<br>
<br>
<br>

        <div style="background-color: <?php echo($secondary_colour) ?>">

            <div class="container mt-5">

                <div class="row">
                    <div class="col-lg-5 mb-3">
                        <div class="pt-5 pb-5">
                            <h2>Why Voxel</h2>
                            <h6 class="pt-3">Complete freedom to create</h6>
                            <p>Build whatever you can dream up. Completely open source and customisable.</p>
                            <a class="btn btn-primary" href="hub#tutorials">Tutorials</a>

                            <h6 class="pt-5">Built with privacy first</h6>
                            <p>Our business model is about selling great hardware, not your data. Find out more about us:</p>
                            <a class="btn btn-primary" href="about">About us</a>

                            <h6 class="pt-5">Join a growing movement</h6>
                            <p>Get ideas and support from the wonderful Voxel community. Share your creations with 1 click.
                            </p>
                            <a class="btn btn-primary" href="hub#communityvibes">Voxel Hub</a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/BA/BA1.png" class="d-block h-100 w-100" style="object-fit: cover">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container flex-shrink-0 pt-5">
            <h3>Feed</h3>
            <div class="powr-instagram-feed" id="2c68eddf_1583944683"></div>
            <script src="https://www.powr.io/powr.js?platform=html"></script>
        </div>
    </main>

    <div class="container-fluid">

        <!-- Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body p-0">
                        <!-- BS4 Responsive Embed (https://parrot-tutorial.com/bootstrap4/util_embed) -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php require_once('footer.php'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="javascript/bootstrap.bundle.js"></script>
    <script src="javascript/main.js"></script>

    <script src="replaceme.min.js"></script>
    <script>
        var replace = new ReplaceMe(document.querySelector('.replace-me1'), {
            animation: 'animated faster flipInX', // Animation class or classes
            speed: 2000, // Delay between each phrase in miliseconds
            separator: ',', // Phrases separator
            hoverStop: false, // Stop rotator on phrase hover
            clickChange: false, // Change phrase on click
            loopCount: 'infinite', // Loop Count - 'infinite' or number
            autoRun: true, // Run rotator automatically
            onInit: false, // Function
            onChange: false, // Function
            onComplete: false // Function
        });

    </script>
    <script>
        var replace = new ReplaceMe(document.querySelector('.replace-me2'), {
            animation: 'animated faster flipInX', // Animation class or classes
            speed: 2000, // Delay between each phrase in miliseconds
            separator: ',', // Phrases separator
            hoverStop: false, // Stop rotator on phrase hover
            clickChange: false, // Change phrase on click
            loopCount: 'infinite', // Loop Count - 'infinite' or number
            autoRun: true, // Run rotator automatically
            onInit: false, // Function
            onChange: false, // Function
            onComplete: false // Function
        });

    </script>
</body>

</html>
