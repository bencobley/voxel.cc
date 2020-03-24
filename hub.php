<!doctype html>
<html lang="en" class="h-100 w-100">

<head>
    <!-- Google Analytics meta tags and css-->
    <?php require_once('head.php'); ?>
    <title>Voxel Hub</title>
</head>

<?php
/* Your password */
$email = getenv('PELIN_EMAIL') ?: die('"PELIN_EMAIL" config var in found in env!');
$password = getenv('PELIN_PASSWORD') ?: die('"PELIN_PASSWORD" config var in found in env!');
$loginerror = "";

/* Redirects here after login */
$redirect_after_login = 'secret_page';

/* Will not ask password again for */
$remember_password = strtotime('+30 days'); // 30 days

if (isset($_POST['password']) && isset($_POST['email'])) {
    if ($_POST['password'] == $password && $_POST['email'] == $email) {
        setcookie("password", $password, $remember_password);
        header('Location: ' . $redirect_after_login);
        exit;
    } else {
        $loginerror = "<h4 style='color:black;'>" . 'Invalid Login Credentials' . "</h4><br>";
    }
}

?>

<body class="d-flex flex-column h-100">
    <!-- Navbar -->
    <?php require('nav_bar.php'); ?>

    <main role="main">

        <div class="jumbotron pt-5 pb-5" style="background-size: 100vw; background-image: url('https://voxelmedia.s3.eu-west-2.amazonaws.com/CO/banner.png');">
            <h1 class="pt-5">Join the movement</h1>

            <div class="mx-auto p-4 mt-5 mb-5" style="max-width: 400px; background-color: #ddd; border-radius: 5px;">
                <form method="POST" class="form-signin">
                    <div class="text-center mb-4">
                        <h4 class="mb-3 font-weight-normal">Login to Voxel Hub</h4>
                        <!--                        <p>Description</p>-->
                    </div>

                    <div class="form-label-group">
                        <input style="font-size: 22px" type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required>
                        <label for="inputEmail">Email address</label>
                    </div>

                    <div class="form-label-group">
                        <input style="font-size: 22px" type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                        <label for="inputPassword">Password</label>
                    </div>

                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <?php echo ($loginerror) ?>
                    <button class="btn btn-lg btn-primary btn-block" type="submit" href="shop">Sign in</button>
                </form>
                <a class="btn" href="shop">Sign Up</a>
            </div>
        </div>


        <div class="container flex-shrink-0" id="communityvibes">

            <div class="row pt-5">
                <div class="col text-center">
                    <h2 class="text-break">Creative Community</h2>
                </div>

            </div>
            <br>
            <div class="row mt-3">
                <div class="col-md">
                    <h4>Everything Voxel, all in one place. </h4>

                </div>
                <div class="col-md">
                    <p>We invite you to join the Voxel Hub, home of projects, tutorials, community support and ideas. This is an environment where ideas can be shared and worked on collaboratively.
                    </p>

                </div>

            </div>
            <br>
            <br>
            <br>
            <br>
            <div id="featuresCarousel" class="carousel slide pt-5 pb-5 mx-auto" data-ride="carousel" style="max-width: 1470px; background-color: #1D98B3;">
                <ol class="carousel-indicators">
                    <li data-target="#featuresCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#featuresCarousel" data-slide-to="1"></li>
                    <li data-target="#featuresCarousel" data-slide-to="2"></li>
                    <!--                    <li data-target="#featuresCarousel" data-slide-to="3"></li>-->

                </ol>
                <div class="carousel-inner">

                    <div class="carousel-item">
                        <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/CO/CO1.png" class="d-block">
                        <div class="carousel-caption">
                            <h2 style="color: white; white-space:nowrap">Discover</h2>
                            <p style="color: white;">Discover exciting and innovative projects to serve as inspiration for your smart home. Push the boundaries of what a smart home can be. </p>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/CO/CO2.png" class="d-block">
                        <div class="carousel-caption">
                            <h2 style="color: white;">Create</h2>
                            <p style="color: white;">Challenge yourself and develop new skills whilst creating exciting interactions with Voxel. Learn electronics and programming the fun way, by building something useful.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/CO/CO3.png" class="d-block">
                        <div class="carousel-caption">
                            <h2 style="color: white; white-space:nowrap">Contribute</h2>
                            <p style="color: white;">Work with other makers to build and contribute to open source software. See your work in the hands of fellow smart home enthusiasts, innovators and disruptors. </p>
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
            <h3 id="tutorials" name="tutorials" class="pt-5 pb-3">Tutorials</h3>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="https://voxelmedia.s3.eu-west-2.amazonaws.com/CO/CO6.png">
                    <div class="card-body">
                        <h5 class="card-title">Starter Pack Introduction</h5>
                        <p class="card-text">Unlock the full potential of the Voxel starter kit, learn how to measure and display sensor data on the dot matrix and design custom graphics to suite your needs.</p>
                        <p class="card-text"><small class="text-muted">Voxel Team</small></p>

                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="https://voxelmedia.s3.eu-west-2.amazonaws.com/CO/CO7.png">
                    <div class="card-body">
                        <h5 class="card-title">Smart Plug Sensor Control</h5>
                        <p class="card-text">See how easy it is to setup Voxel smart plugs to communicate with the brain. Configure remote sensor tiles or attach them directly to the plug.</p>
                        <p class="card-text"><small class="text-muted">Voxel Team</small></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">And much more</h5>
                        <p class="card-text">Stay tuned for more tutorials as our community grows and we release more Voxel packs!</p>
                        <a class="btn btn-secondary" style="color: black" href="hub#tutorials">Browse tutorials ></a>

                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <h3 class="pt-5 pb-3">Projects</h3>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="https://voxelmedia.s3.eu-west-2.amazonaws.com/CO/CO8.png">
                    <div class="card-body">
                        <h5 class="card-title">Pong Game</h5>
                        <p class="card-text">I used 2 motion sensor tiles as game controllers for a multi-player game of pong, programmed in scratch.</p>
                        <p class="card-text"><small class="text-muted">othompson420</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="https://voxelmedia.s3.eu-west-2.amazonaws.com/CO/CO9.png">
                    <div class="card-body">
                        <h5 class="card-title">Retro Pi</h5>
                        <p class="card-text">I interfaced my Voxel with my retro-pi to show my most played games!</p>
                        <p class="card-text"><small class="text-muted">bencobley</small></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">And much more</h5>
                        <p class="card-text">Keep checking back for more exciting inspiration for your nest Voxel project</p>
                        <a class="btn btn-secondary" style="color: black" href="shop ">Browse projects ></a>

                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <h3 class="pt-5 pb-3">News</h3>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="https://voxelmedia.s3.eu-west-2.amazonaws.com/CO/CO10.png">
                    <div class="card-body">
                        <h5 class="card-title">Funding News</h5>
                        <p class="card-text">New funding received, Kickstarter scheduled to start late May!</p>
                        <p class="card-text"><small class="text-muted">Voxel Press</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="https://voxelmedia.s3.eu-west-2.amazonaws.com/CO/CO11.png">
                    <div class="card-body">
                        <h5 class="card-title">Prototyping News</h5>
                        <p class="card-text">Voxel starter pack at the final prototype stage, nearly ready for batch manufacture.</p>
                        <p class="card-text"><small class="text-muted">Voxel Press</small></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">And much more</h5>
                        <p class="card-text">Stay posted for exciting news about the Voxel project!</p>
                        <a class="btn btn-secondary" style="color: black" href="shop ">Browse news ></a>

                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>


        </div>
    </main>

    <?php require_once('footer.php'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="javascript/bootstrap.bundle.js"></script>
    <script src="slick/slick.js"></script>
    <script src="javascript/main.js"></script>


</body>

</html>