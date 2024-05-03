<?php
function get_CURL($url)
{
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);

  return json_decode($result, true);
}
//yt
$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCoIiiHof6BJ85PLuLkuxuhw&key=AIzaSyB1A4--UgtgVEMkb0h71JNsenlLwFt4JgA');
$ytprofil = $result['items'][0]['snippet']['thumbnails']['high']['url'];
$ytname = $result['items'][0]['snippet']['title'];
$ytsub = $result['items'][0]['statistics']['subscriberCount'];

$result2 = get_CURL('https://www.googleapis.com/youtube/v3/search?key=AIzaSyB1A4--UgtgVEMkb0h71JNsenlLwFt4JgA&channelId=UCoIiiHof6BJ85PLuLkuxuhw&maxResults=1&order=date&part=snippet');
$ytvideo = $result2['items'][0]['id']['videoId'];

//ig
$resultig = get_CURL('https://graph.instagram.com/me/media?fields=id,username,caption,permalink,media_url,thumbnail_url&access_token=IGQWRORXd5UmtwU2VHa3NXYUhmY1ZALVm8xWUpSZAFVpMldtTm03NjhMdy1XeTFQWFNWa24zemlzR0p6UEJWV1FqMUdEMWFoUDdCQl9MRmVFNjNSd3JHTW93emhYaTluR1pqY2Q5T0pqRWhadwZDZD');
$igpp = $resultig['data'][0]['media_url'];
$iglink = $resultig['data'][0]['permalink'];
$igusername = $resultig['data'][0]['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/solid.css">
  <link rel='icon' href=''>
  <link rel="stylesheet" href="style.css">
  <title>Big Data</title>
</head>

<body>
  <header>
    <!-- ------navbar------ -->
    <nav class="navbar navbar-expand-lg align-items-center bg-body-tertiary mt-2" id="navbar">
      <div class="container">
        <a class="navbar-brand text-light"><i class="fa-solid fa-user"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center " id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item px-4">
              <a class="nav-link active" aria-current="page" href="#">Biodata</a>
            </li>
            <li class="nav-item px-4">
              <a class="nav-link" href="#yt">Youtube</a>
            </li>
            <li class="nav-item px-4">
              <a class="nav-link" href="#ig">instagram</a>
            </li>
            <li class="nav-item px-4">
              <a class="nav-link" href="#">Contact Me</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- ------navbar end------ -->

    <!-- ------hero start------ -->
    <div class="hero jumbotron jumbotron-fluid text-center py-4" id="home">
      <div class="container">
        <h1 class="jumbotron-title display-4"><span class="text-warning">HI, I am </span>Candra Pratama</h1>
        <p class="jumbotron-text lead">Teknik Informatika | UNTRIM</p>
        <a class="fa-brands fa-facebook"></a>
        <a class="fa-brands fa-twitter"></a>
        <a class="fa-brands fa-instagram"></a>
      </div>
    </div>
    <!-- ------hero end------ -->
  </header>

  <!-- ------About me start------ -->
  <section id="about" class="section-ab">
    <div class="container about-container">
      <div class="row">
        <div class="about-title col-12 text-center py-4">
          <h2>API-YOUTUBE</h2>
        </div>
      </div>
      <div class="row col-12">
        <div class="col-6 ">
          <img class="img " src="<?= $ytprofil; ?>" alt="">
        </div>
        <div class="col-6">
          <p class="label-chanel"><?= $ytname; ?></p>
          <p class="label-chanel-sub"><?= $ytsub; ?> Subsciber</p>
          <div class="g-ytsubscribe" data-channelid="UCoIiiHof6BJ85PLuLkuxuhw" data-layout="default" data-count="default"></div>
        </div>
      </div>
    </div>
    <div class="container container-video">
      <div class="label-video">Video Terbaru :</div>
      <div class="embed embed-responsive embed-responsive-l6by9 col-6">
        <iframe class="embed embed-responsive-item" src="https://www.youtube.com/embed/<?= $ytvideo ?>?rel=0" allowfullscreen></iframe>
      </div>
    </div>
  </section>
  <!-- ------About me end------ -->

  <!-- ------API IG Start------ -->
  <!--token : IGQWRPYVpDXzB0NmtwbzlLYVA1ZA2tDYy1WUzJZAV3BETmo3aURyN2xHdkxNVW9pZAjAtRFpQZA1ItT1Q0TXZAYdU5hdXMydWUwZAUNJVXJnWTVBWjJwYlY0R1YxWmZA1dm5kSXVnbUdWUVdZAY0dRck5KNTdPdUplUGI1em8ZD -->
  <section id="about" class="section-sk">
    <div class="container about-container">
      <div class="row">
        <div class="about-title col-12 text-center py-4">
          <h2>API-INSTAGRAM</h2>
        </div>
      </div>
      <div class="row col-12">
        <div class="col-6 ">
          <img class="img " src="<?= $igpp; ?>" alt="">
        </div>
        <div class="col-6">
          <p class="label-video">@<?= $igusername; ?></p>
        </div>
      </div>
    </div>
  </section>
  <!-- ------Skill end------ -->

  <!-- script -->
  <script>
  </script>
  <script src="https://apis.google.com/js/platform.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
<!-- IGQWRPUWh1SVlwY0x6OFpPenA4aVRYQm1QRmtCR1FXSlpCbURvbFVVY3BEU1RvZAEM0X19jVEtDNVMxR1NGbmhhVDI2SWpIbGpxMVU5RTNIRFJXLWYwbS1LLXc1LWYyMDhZASElKLTVEVEpuTHdXYWdqU0tWSXBrRlkZD -->