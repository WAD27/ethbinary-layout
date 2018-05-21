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
      'text' => "Total Supply ",
      'data' => "42,000,000 EBY Tokens",
    )
  );
  $ico_graph_title = "Points Scored";
  $ico_graph_title_2 = "Bonus";
  $ico_graph_text = "For certain amount of ether you will get a discount";
  $bonus = array(
    array(
      'sent' => "If you send 5 ether ",
      'discount' => "Your discount will be of 10%",
    ),
    array(
      'sent' => "If you send 24 ether ",
      'discount' => "Your discount will be of 20%",
    ),
    array(
      'sent' => "If you send 50 ether ",
      'discount' => "Your discount will be of 25%",
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

    <!--  -->
    <div class="ico-title col-12 text-center">
      <h2 class="ico-text col-12 text-center">
        <?php echo $ico_title; ?>
      </h2>
      <p class="col-12 text-center"><?php echo $ico_text_2; ?></p>
    </div>

    <!--  -->
    <div class="ico-graph col-12">
      <h2 class="ico-graph-title col-12 text-left">
        <?php echo $ico_graph_title; ?>
      </h2>
      <div class="ico-graphic">

      </div>
      <h2 class="ico-graph-title col-12 text-center upper">
        <?php echo $ico_graph_title_2; ?>
      </h2>
      <p class="ico-graph-text col-12 text-center"><?php echo $ico_graph_text; ?></p>
      <div class="ico-graph-bonus">

        <?php for ($i=0; $i < count($bonus) ; $i++):?>

          <div class="bonus row col-12">
            <p class="bonus-sent col-6 text-right"><?php echo $bonus[$i]['sent']; ?></p>
            <p class="bonus-discount col-6 text-left"><?php echo $bonus[$i]['discount']; ?></p>
          </div>

        <?php endfor; ?>
      </div>
    </div>

  </div>

</section>
