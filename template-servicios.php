<?php get_header()/*Template Name: Servicios*/ ?>
<?php
$services_layout = '3,3,3';
$columns = explode(',',$services_layout);
?>
<div class="container">
    <div class="row center-align">
        <?php foreach($columns as $i => $column){?>
            <div class="row">
             
                <?php if(is_active_sidebar('sec-sidebar-'.($i+1))){
                    dynamic_sidebar('sec-sidebar-'.($i+1)); 
                }?>

            </div>
        <?php }?>
    </div>
</div>
<?php get_footer()?>