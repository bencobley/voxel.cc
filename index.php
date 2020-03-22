<!doctype html>
<html lang="en" class="h-100">

<head>
    <!-- Google Analytics -->
    <?php require_once('head.php'); ?>
    <title>Voxel</title>
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
            <div class="row pb-5">
                    <video style="max-width: 100%; padding-bottom: 90px;"preload="auto" autoplay="autoplay" muted="muted" loop="loop">
                        <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/HP/video.mp4" type="video/mp4">
                    </video>

                <div class="col-lg-7">

                    <h2 class="text-break pb-3">The smart home for <span class="replace-me1">freedom.<span style="display:none">,community.,privacy.</span></span>
                    </h2>
                    <h5>Not <span class="replace-me2">closed doors.<span style="display:none">,big tech.,big data.</span></span>
                    </h5>
                    <p>
                        From beginner to expert, our magnetic modules and intuitive software give you the tools and flexibility to create whatever you want. Compatible with all your favourite devices.
                    </p>
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/HP/HP2.gif" class="d-block d-lg-none h-100 w-100" style="object-fit: cover; max-height: 500px">
                    <div class="kickstarter-box mt-5">
                        <h4>Sign up for <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/HP/kickstarter.png" style="height: 25px"> updates: </h4>
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
            <br>
            <br>
            <br>
            <br>

            <div class="row mt-5" style="background-color: <?php echo ($starter_pack_background); ?>">
                <div class="col-lg-6 p-0">
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/HP/HP5.png" class="d-block h-100 w-100" style="object-fit: cover">
                </div>
                <div class="col-lg-6 mb-3 p-5">
                    <h6 style="color: white">Coming soon:</h6>
                    <h2 style="color: white;" class="pb-4">Starter pack</h2>
                    <h6 style="color: white;">Voxel’s first module pack: a powerful smart home controller, open-sourced. </h6>
                    <p style="color: white;">Augment your smart home with handy environment sensors, brilliant dot matrix displays and tactile inputs. Compatible with most of your favourite devices. </p>
                    <a class="btn btn-secondary" href="starterpack">Explore ></a>
                </div>
            </div>
        </div>
        <br>
        <br>
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
        <br>
        <br>
        <br>
        <div class="container flex-shrink-0 pt-5">
            <h3>Feed</h3>
            <!-- LightWidget WIDGET -->
            <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
            <iframe src="https://cdn.lightwidget.com/widgets/93d269bd9e305556bfe48e18c0e2711e.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

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
            animation: 'animated fast flipInX', // Animation class or classes
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