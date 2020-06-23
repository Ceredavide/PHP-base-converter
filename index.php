<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>PHP Base-Converter</title>
</head>

<!-- ho utilizzato bootstrap per rendere il sito responsivo e più gradevole all'utilizzo, ma è necessaria una connessione ad internet -->

<body>
    <?php include('render.php'); ?>
    <div class="container justify-content-center">
        <h1 class="mt-5">PHP Base-Converter</h1>
        <h5>Divertiti a convertire i numeri da base 2 a 16!</h5>
        <p class="mt-3">Progetto finale per M133 - Davide Ceresa(I3C)</p>
        <p class="mt-1">É consigliato usare il sito con una connessione ad internet, dato che usa Bootstrap.</p>
        <form action="index.php" method="POST">
            <div class="row mt-4 mb-4">
                <?php renderForm(); ?>
            </div>
        </form>
        <div class="row">
            <?php renderResult();?>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>