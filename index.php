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
$ytprofil = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
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
      <div class="row col-12 justify-content-center">
        <div class="embed embed-responsive embed-responsive-l6by9">
          <iframe class="embed embed-responsive-item" src="<?php $ytprofil ?>" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>
  <!-- ------About me end------ -->

  <!-- ------Skill Start------ -->
  <section id="skill" class="section-sk">
    <div class="container container-fluid skill-container">
      <div class="row col-12">
        <div class="text-center py-4">
          <h2>SKILL</h2>
        </div>
      </div>
      <div class="row col-12 px-lg-5 ">
        <div class="col-4">
          <div>
            <i class="fa-solid fa-palette"></i>
            <h2>CSS</h2>
            <p>ldkansldkandlkandalknda</p>
          </div>
        </div>
        <div class="col-4">
          <div>
            <i class="fa-solid fa-code"></i>
            <h2>HTML</h2>
            <p>ldkansldkandlkandalknda</p>
          </div>
        </div>
        <div class="col-4">
          <div>
            <i class="fa-brands fa-square-js"></i>
            <h2>JavaScript</h2>
            <p>ldkansldkandlkandalknda</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ------Skill end------ -->

  <!-- script -->
  <script>
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>