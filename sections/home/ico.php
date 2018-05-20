<section id="ico" class="container">

  <?php
  $title = "Join Our ICO";
  $logo = 'ethbinary-logo';
  $ico_title = "Token Distribution";
  $ico_text = "Our ICO is available to acquire EBY tokens, send Ether to this address, 'Please don't send Ether from an exchange or funds will be lost'.";
  $ico_text_2 = "The Token distribution will be the next way:";
  $goal_text = array(
    array(
      'text' => "Goal ",
      'data' => "$1 Million",
    ),
    array(
      'text' => "Token Price ",
      'data' => "$1 Eth = 3600 EBY Tokens",
    ),
    array(
      'text' => "Total Supply 42,000,000 EBY Tokens",
    )
  );
  ?>
  <div class="row col-12">

    <h2 class="title col-12 text-center"><?php echo $title; ?></h2>
    <!-- ICO logo -->
    <div class="ico-logo col-12 text-center">

      <div class="ico-logo-img col-6">
        <div class="col imgLiquid imgLiquidNoFill">
          <img src="img/<?php echo $logo;?>.png" alt="Ethbinary logo">
        </div>
      </div>

    </div>
    <!--  -->

    <p class="ico-text col-12 text-center"><?php echo $ico_text; ?></p>

    <?php
    for ($i=0; $i < count($goal_text) ; $i++):
      ?>
      <div class="goal row col-12">
        <p class="goal-text col-6 text-right"><?php echo $goal_text[$i]['text']; ?></p>
        <p class="goal-text col-6 text-left"><?php echo $goal_text[$i]['data']; ?></p>
      </div>

    <?php endfor; ?>


    <div class="ico-title col-12 text-center">
    <h2 class="ico-text col-12 text-center">
      <?php echo $ico_title; ?>
    </h2>
    <p class="col-12 text-center"><?php echo $ico_text_2; ?></p>
    </div>

  </div>

</section>
