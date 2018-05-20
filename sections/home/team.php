<section id="team" class="container">

  <?php
  $title = 'Our Team';
  $social = array( 'steemit', 'twitter', 'github', 'linkedin', 'instagram');
  $team_member = array(
    array(
      'name'=>'Carlos Parra',
      'job'=>'Marketing',
      'social_1'=>$social[0],
      'social_1_url'=>'https://steemit.com/@criptraders',
      'social_2'=>$social[1],
      'social_2_url'=>'https://twitter.com/crz9403'
    ),
    array(
      'name'=>'Cesar Ciau',
      'job'=>'Developer',
      'social_1'=>$social[3],
      'social_1_url'=>'https://linkedin.com/cesar-arturo-ciau-mendoza-38031885'
    ),
    array(
      'name'=>'Manuel Cruz',
      'job'=>'Designer',
      'social_1'=>$social[0],
      'social_1_url'=>'https://steemit.com/@manuelcruz',
      'social_2'=>$social[4],
      'social_2_url'=>'http://instagram.com/brand.ico'
    ),
    // array(
    //   'name'=>'Carlos Hasbun',
    //   'job'=>'Developer',
    //   'social_1'=>$social[0],
    //   'social_1_url'=>'https://steemit.com/@jazzvoon',
    //   'social_2'=>$social[2],
    //   'social_2_url'=>'http://github.com/josecaos'
    // )
  );
  ?>

  <div class="row col-12">

    <h2 class="title col-12 text-center"><?php echo $title; ?></h2>

    <?php

    for ($i=0; $i < count($team_member); $i++):

      ?>

      <div class="team-member container col-xs-12 col-sm-6 col-lg-4">
        <!-- image -->
        <div class="team-image col-12 imgLiquid imgLiquidNoFill">
          <img src="" alt="Ethbinary team member">
        </div>
        <!-- member data -->
        <div class="team-data col-12 color-clear">
          <h4 class="team-data-title text-center"><?php echo $team_member[$i]['name']; ?></h4>
          <p class="team-data-job text-center"><?php echo $team_member[$i]['job']; ?></p>
          <!-- social selection -->
          <div class="team-icons col-12">

            <?php
            if($team_member[$i]['social_1']):
              ?>

              <div class="social-icon col-3">
                <a href="<?php echo $team_member[$i]['social_1_url'];?>" target="_blank">
                  <div class="col imgLiquid imgLiquidNoFill">
                    <img src="img/<?php echo $team_member[$i]['social_1'];?>.png" alt="">
                  </div>
                </a>
              </div>

              <?php
            endif;

            if($team_member[$i]['social_2']):
              ?>
              <div class="social-icon col-3">
                <a href="<?php echo $team_member[$i]['social_2_url'];?>" target="_blank">
                  <div class="col imgLiquid imgLiquidNoFill">
                    <img src="img/<?php echo $team_member[$i]['social_2'];?>.png" alt="">
                  </div>
                </a>
              </div>
              <?php
            endif;
            ?>
          </div>

        </div>
      </div>

      <?php
    endfor;

    $title_2 = "Our Social Media";

    ?>

    <h4 class="col-12 text-center"><?php echo $title_2; ?></h4>
    <!--  -->
    <div class="social-icon col-12">
      <a href="<?php echo $team_member[$i]['social_1_url'];?>" target="_blank">
        <div class="col imgLiquid imgLiquidNoFill">
          <img src="img/<?php echo $team_member[$i]['social_1'];?>.png" alt="">
        </div>
      </a>
    </div>
  </div>

</section>
