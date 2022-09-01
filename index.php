<?php
include 'includes/data/data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <!-- STYLE -->
    <link rel="stylesheet" href="css/style.css">
    <!-- AXIOS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js' integrity='sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==' 
    crossorigin='anonymous' referrerpolicy='no-referrer'></script>
    <!-- VUE -->
    <script src='https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js'></script>
    <script src="./assets/js/main.js"></script>
    <title>Php Spotify Dischi</title>
</head>
<body>
    <div id="app">
        <header id="site_header">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="logo text-start align-middle">
                    <img width="50" src="img/favicon.ico" alt="" />
                </div>
            </div>
            <!-- /.container -->
        </header>
        <main id="site_main">
            <div class="container">
                <div class="row row-cols-2 row-cols-sm-3 row-cols-xl-6 py-5 justify-content-center">
                    <?php foreach ($discs as $disk): ?>
                        <div class="col py-3">
                            <div class="card h-100 align-items-center" >
                                <img src="<?php echo $disk['poster']; ?>" class="card-img-top" alt="<?php echo $disk['title']; ?>" />
                                    <div class="card-body text-center">
                                        <h5 class="card-title text-white">
                                            <?php echo strtoupper($disk['title']); ?>
                                        </h5>
                                        <p class="card-text text-muted m-0">
                                            <?php echo $disk['author']; ?>
                                        </p>
                                        <p class="card-text text-muted">
                                            <?php echo $disk['year']; ?>
                                        </p>
                                    </div>
                            </div>
                            <!-- ./card -->
                        </div>
                        <!-- ./col -->
                    <?php endforeach;?>
                </div>
                <!-- ./row -->
            </div>
        </main>
        <footer id="site_footer">
            <div class="container">
                <div class="copyright">
                    <small class="text-white">&copy;Boolean</small>
                </div>
            </div>
            <!-- /.container -->
        </footer>
    </div>
</body>
</html>