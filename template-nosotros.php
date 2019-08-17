<?php get_header();
/*Template Name: Nosotros*/
$nosotros = get_field('us');
?>
<div class="container nosotros">
    <div class="nosotros__hero">
        <img
                class="nosotros__hero--imagen"
                src="<?php echo $nosotros["nosotros--background"]?>"
                alt="nosotros"
            />
    </div>
    <div class="nosotros--descripcion">
        <p><?php echo $nosotros["descripcion"]?></p>
    </div>
    <div class="thumbnail nosotros--thumbnail">
        <h2 class="center-align">Nuestro Equipo</h2>
        <div class="nosotros--equipo container m-5">
            <div class="nosotros--equipo--individuo">
                <div class="round">
                    <picture>
                        <img class="round__image" src="<?php echo $nosotros["funcionario--1"]?>" alt="Funcionario">
                    </picture>
                </div>
                   
                
            </div>
            <div class="nosotros--equipo--individuo">
                <div class="round">
                    <img class="round__image" src="<?php echo $nosotros["funcionario--2"]?>" alt="Funcionario">
                </div>
                   
            </div>
            
        </div>
    </div>
    
</div>




<?php get_footer();?>