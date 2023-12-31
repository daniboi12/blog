<!DOCTYPE html>

<html>

<head>
  <title>Main Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" type="image/x-icon" href="images/logo_circle_favicon.svg" />
  <link rel="stylesheet" type="text/css" href="/css/index.css" />
  <?php
  include "./requiredCSS.php";
  ?>
  <script src="scripts/nav.js" defer></script>
  <script src="scripts/index.js" defer></script>
  <script src="https://kit.fontawesome.com/1e30e30b42.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
  <div class="container-fluid p-3">

    <div class="row sticky-top">
      <div class="col p-0">
        <?php
        include "./components/navBootstrap.php";
        ?>
      </div>
    </div>

    <!-- 1st ROW Carousel-->
    <div class="row py-3 rounded">
      <div class="col-lg-2"></div>
      <div class="col-lg-8 rounded">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
              aria-label="Slide 4"></button>
          </div>
          <div class="carousel-inner rounded">

            <div class="carousel-item active">
              <div class="d-flex align-items-center justify-content-center overflow-hidden">
                <img src="images/image1_wider.jpg" alt="...">
              </div>
              <div class="carousel-caption">
                <h5>First slide label</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam molestiae officiis labore doloribus
                  vero at numquam ipsam iure vitae recusandae sit quisquam, quas ex saepe quo sunt deserunt maiores qui?
                </p>
              </div>
            </div>

            <div class="carousel-item">
              <div class="d-flex align-items-center justify-content-center overflow-hidden">
                <img src="images/image2_wider.jpg" alt="...">
              </div>
              <div class="carousel-caption">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam molestiae officiis labore doloribus
                  vero at numquam ipsam iure vitae recusandae sit quisquam, quas ex saepe quo sunt deserunt maiores qui?
                </p>
              </div>
            </div>

            <div class="carousel-item">
              <div class="d-flex align-items-center justify-content-center overflow-hidden">
                <img src="images/image3_wider.jpg" alt="...">
              </div>
              <div class="carousel-caption">
                <h5>Third slide label</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam molestiae officiis labore doloribus
                  vero at numquam ipsam iure vitae recusandae sit quisquam, quas ex saepe quo sunt deserunt maiores qui?
                </p>
              </div>
            </div>

            <div class="carousel-item">
              <div class="d-flex align-items-center justify-content-center overflow-hidden">
                <img src="images/image4_wider.jpg" alt="...">
              </div>
              <div class="carousel-caption">
                <h5>Fourth slide label</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam molestiae officiis labore doloribus
                  vero at numquam ipsam iure vitae recusandae sit quisquam, quas ex saepe quo sunt deserunt maiores qui?
                </p>
              </div>
            </div>

          </div>
          <button class="carousel-control-prev justify-content-start px-5" type="button"
            data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <p aria-hidden="true">&#10094;</p>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next justify-content-end px-5" type="button"
            data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <p aria-hidden="true">&#10095;</p>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>

    <!-- 2nd ROW - Rubric -->
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <div class="container-fluid d-flex align-items-center justify-content-center rounded shadow-sm"
          id="longRubricContainer">
          <p class="text-center">How food affects our emotions?</p>
        </div>
      </div>
      <div class="col-lg-2"></div>
    </div>

    <!-- 3rd ROW-->
    <div class="row mt-3">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <p
          class=" short-quote fs-4 p-4 font-italic d-flex align-items-center shadow-sm fst-italic text-justify rounded">
          "Life is a beautiful tapestry woven with threads of joy and sorrow, and it's in the intricate patterns of both
          that we find the true art of living. Every moment, every experience, every challenge we face, is a thread that
          adds depth and richness to the masterpiece of our existence. Embrace the ups and downs, for it's in the
          contrast of colors and textures that the true beauty of life is revealed."<br>
          - Gabriela Bashalova
        </p>
      </div>
      <div class="col-lg-2"></div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-2"></div>
      <div class="col-lg-4 rounded">
        <div class="imgLinkContainer position-relative">
          <img class="rounded object-fit-cover" src="images/img_link1_small.jpeg" alt="" />
          <a href="#" class="btn btn-primary shadow-sm position-absolute top-50 start-50 translate-middle">SEE NOW</a>
        </div>
      </div>
      <div class="col-lg-4 rounded give-margin-top">
        <div class="imgLinkContainer position-relative">
          <img class="rounded object-fit-cover" src="images/img_link2_small.jpeg" alt="" />
          <a href="#" class="btn btn-primary shadow-sm position-absolute top-50 start-50 translate-middle">LEARN
            MORE</a>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>


    <div class="row">
      <div class="col p-0">
        <?php
        include "./components/footer.php";
        ?>
      </div>
    </div>

  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>