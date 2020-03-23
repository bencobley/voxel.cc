<!doctype html>
<html lang="en" class="h-100">

<head>
    <!-- Google Analytics -->
    <?php require_once('head.php'); ?>
    <title>Video</title>
</head>

<body style="background-color: black;">
    <div>
    <a href="index" type="button" class="close text-white" style="position: absolute; right: 30px; top: 30px;">&times;</a>
        <video id="vid" onended="myFunction()" style="  max-width: 100vw !important; height: 100vh !important; margin: 0 auto; display: block; " autoplay="autoplay" controls>
            <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/HP/video.mp4" type="video/mp4">
        </video>
    </div>
</body>
<script>
    document.getElementById('vid').play();
</script>
<script type='text/javascript'>
  function myFunction(){
    window.location.href = "index.php";
    console.log("ended");
  }
</script>