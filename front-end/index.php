<?php
    require_once "../back-end/models/products.php";
    require_once "../back-end/models/food.php";
    require_once "../back-end/models/toy.php";
    require_once "../back-end/models/kennel.php";


    $provaProduct = new Product("nome", 23, true, true, true);
    var_dump($provaProduct);
    $provaFood = new Food("royale", 20, true, false, true,"22/03/2025", "1kg");
    var_dump($provaFood);
    $provaToy = new Toy("giocattolo", 10, false, true, false, "plastic", 30, 20);
    var_dump($provaToy);
    $provaKennel = new Kennel("cucica", 10, false, true, false, "tessuso", true);
    var_dump($provaKennel);



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- FONTAWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- LINK CSS - BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
         <!-- LINK MIO CSS -->
        <link rel="stylesheet" href="./css/style.css">
        <!-- TITLE PAGE -->
        <title>Document</title>
    </head>

        <!-- START BODY -->
    <body class="debug">
        <div id="app">
            <!-- START MAIN HEADER -->
            <header>
                <div class="container">
                    <div>
                        <h1 class="text-center">
                            {{h1Content}}
                        </h1>
                    </div>
                </div>
            </header>
            <!-- END MAIN HEADER -->

            <!-- START MAIN -->
            <main>
                <div class="container">
                    MAIN
                </div>
            </main>
            <!-- END MAIN -->


        </div>


        <!---------------------------------------------------------------------------------------------------------------------------->
         <!-- VUE -->
         <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
         <!-- AXIOS -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js" integrity="sha512-NQfB/bDaB8kaSXF8E77JjhHG5PM6XVRxvHzkZiwl3ddWCEPBa23T76MuWSwAJdMGJnmQqM0VeY9kFszsrBEFrQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
         <!--BOOTSTRAP-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
         <!--JS MIO-->
        <script src="./js/script.js"></script>
    </body>
</html>