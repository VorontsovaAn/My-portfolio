<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-mok</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <?php
    require_once("../element/header.php");
    ?>
    <main>
        <div class="container content" id="buildingsBlock">
        <h2>СПО</h2>
        <div class="container container-fluid d-flex justify-content-around flex-wrap" id="buildings">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="elem">
                        <div class="h3">
                            <a href="#">
                                <h3>Здание</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="elem">
                        <div class="h3">
                            <a href="#">
                                <h3>Здание</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="elem">
                        <div class="h3">
                            <a href="#">
                                <h3>Здание</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="elem">
                        <div class="h3">
                            <a href="#">
                                <h3>Здание</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="elem">
                        <div class="h3">
                            <a href="#">
                                <h3>Здание</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="elem">
                        <div class="h3">
                            <a href="#">
                                <h3>Здание</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <?php
    require_once("../element/footer.php");
    ?>
    <script src="https://use.fontawesome.com/e18f9a41ff.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>