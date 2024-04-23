<?php
    include_once "../../conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <!-- head -->
    <meta charset="utf-8 ">
    <meta name="viewport " content="width=device-width, initial-scale=1.0 " />

    <title>
        Responsive Carousel </title>

    <!-- Stylesheets -->

    <link rel="stylesheet " href="styles/style.css ">


    <link rel="stylesheet " href="styles/carousel.min.css ">


    <!-- javascript -->
    <script src="scripts/jquery-3.5.1.min.js "></script>
    <script src="scripts/carousel.js "></script>
</head>

<body>

    <!--  Demos -->
    <section id="slaide">
        <div class="row">
            <div class="large-12 columns">
                <div class="car-carousel car-theme">
              <?php
                  
                  $listagemSeries = mysqli_query($conexao, "SELECT * FROM itens WHERE categoria = 'Series' ");

                  $listagemRowSeries = mysqli_num_rows($listagemSeries);
                 
                  if($listagemRowSeries > 0){
   
                    while($seriesArrays = mysqli_fetch_array($listagemSeries)){

                    $idSerie = $seriesArrays['id'];
                    $tituloSerie = $seriesArrays['titulo'];
                    $imageSerie = $seriesArrays['caminho'];    

                  echo "
                
                <div class='item'>
                       <a href='../../assist-series.php?id=$idSerie' target='_top'>
                        <img src='../../$imageSerie' style='position:absolute; width: 100%; height:100%;'></a>
                </div>";
                    }
            }else{

                echo "
                
                <div class='item'>
                        <b>Não existe séries ainda!</b>
                </div>";

            }
                   ?>
                </div>

                <script>
                    $(document).ready(function() {
                        $('.car-carousel').carCarousel({
                            loop: false,
                            margin: 5,
                            responsiveClass: true,
                            responsive: {
                                0: {
                                    items: 2,
                                    nav: true
                                },
                                600: {
                                    items: 4,
                                    nav: true
                                },
                                1000: {
                                    items: 7,
                                    nav: true,
                                    loop: false,
                                    margin: 3
                                }
                            }
                        })
                    })
                </script>
            </div>
        </div>
    </section>


</body>

</html>