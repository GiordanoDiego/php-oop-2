<?php
    require_once "../back-end/models/products.php";
    require_once "../back-end/models/food.php";
    require_once "../back-end/models/toy.php";
    require_once "../back-end/models/kennel.php";


    $royalCanin = new Food("Royal Canin", 20.00, true, false, true,"22/03/2025", "1kg");
    $royalCanin->img = "https://farmacialoreto.it/image/cache/catalog/products/259392/puppy-mini-2-10mesi-royal-canin-800g-735x735.webp";

    $palla = new Toy("Palla da tennis", 5.00, false, true, false, "plastic", 30, 20);
    $palla->img = "https://arcaplanet.vtexassets.com/arquivos/ids/260664/lovedi-gioco-cane-palla-con-punte-tpr-verde.jpg?v=637617648642300000";

    $cucciaBella = new Kennel("Cuccia Bella", 35.00, false, true, false, "tessuso", true);
    $cucciaBella->img= "https://arcaplanet.vtexassets.com/arquivos/ids/280980/LT_CIAMB-PELOSA-CM-60_10141040--1-.jpg?v=638122241669770000";



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
        <title>PhP OOP 2</title>
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
                    <h4>
                        I nostri prodotti
                    </h4>
                    <hr>
                    <div class=" d-flex justify-content-between ">
                        <!-- food -->
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo $royalCanin->img ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5>
                                    <?php echo $royalCanin->name; ?>
                                </h5>
                                <p class="card-text">
                                    <ul>
                                        <li>
                                            Tipo prodotto:
                                            <?php echo get_class($royalCanin); ?>
                                        </li>
                                        <li>
                                            Prezzo: 
                                            <?php echo  $royalCanin->price; ?>
                                            €
                                        </li>
                                        <li>
                                            Scadenza: 
                                            <?php echo $royalCanin->expiration; ?>
                                        </li>
                                        <li>
                                            Adatto al Gatto:
                                            <?php 
                                                if($royalCanin->forCat == true){
                                                    echo "Si";
                                                }else{
                                                    echo "No";
                                                }
                                            ?>
                                        </li>
                                        <li>
                                            Adatto al Cane:
                                            <?php 
                                                if($royalCanin->forDog == true){
                                                    echo "Si";
                                                }else{
                                                    echo "No";
                                                }
                                            ?>
                                        </li>
                                    </ul>
                                </p>
                            </div>
                        </div>

                        <!-- toy -->
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo $palla->img ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5>
                                    <?php echo $palla->name; ?>
                                </h5>
                                <p class="card-text">
                                    <ul>
                                        <li>
                                            Tipo prodotto:
                                            <?php echo get_class($palla); ?>
                                        </li>
                                        <li>
                                            Prezzo: 
                                            <?php echo  $palla->price; ?>
                                            €
                                        </li>
                                        <li>
                                            Materiale: 
                                            <?php echo $palla->material; ?>
                                        </li>
                                        <li>
                                            Adatto al Gatto:
                                            <?php 
                                                if($palla->forCat == true){
                                                    echo "Si";
                                                }else{
                                                    echo "No";
                                                }
                                            ?>
                                        </li>
                                        <li>
                                            Adatto al Cane:
                                            <?php 
                                                if($palla->forDog == true){
                                                    echo "Si";
                                                }else{
                                                    echo "No";
                                                }
                                            ?>
                                        </li>
                                    </ul>
                                </p>
                            </div>
                        </div>

                        <!-- Kennel -->
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo $cucciaBella->img ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5>
                                    <?php echo $cucciaBella->name; ?>
                                </h5>
                                <p class="card-text">
                                    <ul>
                                        <li>
                                            Tipo prodotto:
                                            <?php echo get_class($cucciaBella); ?>
                                        </li>
                                        <li>
                                            Prezzo: 
                                            <?php echo  $cucciaBella->price; ?>
                                            €
                                        </li>
                                        <li>
                                            Materiale: 
                                            <?php echo $cucciaBella->material; ?>
                                        </li>
                                        <li>
                                            Waterproof: 
                                            <?php 
                                                if($cucciaBella->waterproof == true){
                                                    echo "Si";
                                                }else{
                                                    echo "No";
                                                }
                                            ?>
                                        </li>
                                        <li>
                                            Adatto al Gatto:
                                            <?php 
                                                if($cucciaBella->forCat == true){
                                                    echo "Si";
                                                }else{
                                                    echo "No";
                                                }
                                            ?>
                                        </li>
                                        <li>
                                            Adatto al Cane:
                                            <?php 
                                                if($cucciaBella->forDog == true){
                                                    echo "Si";
                                                }else{
                                                    echo "No";
                                                }
                                            ?>
                                        </li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div> 
                    
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