
</main>

<footer id="footer" class="container-fluid">

  <div class="row">
    <!--  -->
    <?php
    // $menu_item = array('Trade', 'FAQ', 'About Us', 'Contract', 'Join our ICO', 'Whitepaper');//original order
    $menu_item = array('About Us', 'Contract', 'Join our ICO', 'Whitepaper', 'FAQ');
    $menu_item_link = array('#about', '#', '#', '#', '#');
    ?>
    <nav class="navbar navbar-expand-lg col-sm-6 col-md-12">
      <!--  -->
      <button class="col-12 navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span>
      </button>
      <!--  -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav col-12">
          <?php for ($i=0; $i < 5; $i++):?>

            <li class="col-lg-2 align-self-center">

              <a class="color-clear" href="<?php echo $menu_item_link[$i]?>">
                <?php echo $menu_item[$i]; ?>
              </a>

            </li>

          <?php endfor; ?>
        </ul>

      </div>

    </nav>
    <!--  -->
    <!-- <div class="logo col-xs-12 col-md-3 align-center">
      <div class="imgLiquid imgLiquidNoFill">
        <img src="img/ethbinary-logo-white.png" alt="">
      </div>
    </div> -->

    <div class="row col-12">
      <h6 class="copyright col-12 align-self-center">
        <?php echo date('Y') . ' | Ethbinary All Rights Reserved'; ?>
      </h6>
    </div>

  </div>

</div>
<!-- </footer> -->

<!--build:js js/main.min.js  -->
<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="bower_components/imgLiquid/js/imgLiquid-min.js"></script>
<script src="js/app.js"></script>
<!-- endbuild -->
</body>
</html>
