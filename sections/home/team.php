<section id="team" class="container">

  <?php
  $title = 'Our Team';
  $social = array( 'steemmit', 'twitter', 'github', 'linkedin', 'instagram');
  $team_member = array(
    array(
      'name'=>'Carlos Parra',
      'job'=>'Marketing',
      'social_1'=>$social[0],
      'social_1_url'=>'http://steemit.com/criptraders',
      'social_2'=>$social[1],
      'social_2_url'=>'http://twitter.com/crz9403'
    ),
    array(
      'name'=>'Cesar Ciau',
      'job'=>'Developer',
      'social_1'=>$social[3],
      'social_1_url'=>'http://linkedin.com/cesar-arturo-ciau-mendoza-38031885'
    ),
    array(
      'name'=>'Manuel Cruz',
      'job'=>'Designer',
      'social_1'=>$social[0],
      'social_1_url'=>'http://steemit.com/manuelcruz',
      'social_2'=>$social[4],
      'social_2_url'=>'http://instagram.com/brand.ico'
    ),
    array(
      'name'=>'Carlos Hasbun',
      'job'=>'Developer',
      'social_1'=>$social[0],
      'social_1_url'=>'http://steemit.com/jazzvoon',
      'social_2'=>$social[2],
      'social_2_url'=>'http://github.com/josecaos'
    )
  );
  ?>

  <div class="row col-12">

    <h2 class="title col-12 text-center"><?php echo $title; ?></h2>

    <?php

    for ($i=0; $i < 4; $i++):

      ?>

      <div class="team-member row col-xs-12 col-md-3">
        <!-- image -->
        <div class="team-image col-12 imgLiquid imgLiquidNoFill">
          <img src="" alt="Ethbinary team member">
        </div>
        <!-- member data -->
        <div class="team-data col-12 color-clear">
          <h4 class="team-data-title text-center"><?php echo $team_member[$i]['name']; ?></h4>
          <p class="team-data-job text-center"><?php echo $team_member[$i]['job']; ?></p>
          <!-- social selection -->
          <div class="col-12">

          </div>
          <?php
          if($team_member[$i]['social_1']):
            ?>
            <div class="col-3 imgLiquid imgLiquidNoFill">
              <img src=" " alt="">
            </div>
            <?php
            echo $team_member[$i]['social_1'];
            echo $team_member[$i]['social_1_url'];

          endif;

          if($team_member[$i]['social_2']):

            echo $team_member[$i]['social_2'];
            echo $team_member[$i]['social_2_url'];

          endif;

          ?>
        </div>
      </div>

      <?php
    endfor;
    ?>

  </div>

</section>
