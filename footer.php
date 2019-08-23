
    <?php $site_info = get_theme_mod('funeraria_site_info','');?>
    <footer class="page-footer">  
      <div class="container">
        <div class="row">
          <div class="col l4 s12">
            <h5 class="white-text center">
            <img src="<?php echo esc_url( get_theme_mod( 'image-logo-2' ) ); ?>" alt="fondo-marca" />
            </h5>
           
          </div>
          <div class="col l4 s12">
            <h5 class="white-text">Funeraria Isla</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#">Inicio</a></li>
              <li>
                <a class="grey-text text-lighten-3" href="#Servicios">Servicios</a>
              </li>
              <li><a class="grey-text text-lighten-3" href="#Informacion">Informacion</a></li>
              <li>
                <a class="grey-text text-lighten-3" href="#!">Contacto</a>
              </li>
            </ul>
          </div>
          <div class=" col l4 social-contact">
                <h5>Siguenos en facebook</h5>
                <div class="social-icons">
                  <i class=" color fab fa-facebook-square fa-3x"></i>
                </div>
        </div>
      </div>
    </div>
          <div class="footer-copyright">
            <div id="date" class="container center-align">
              &copy; <?php echo $site_info ?>
            </div>
    </footer>
<?php wp_footer()?>
</body>
</html>