<section id="faq" class="container">

  <?php
  $title = 'FAQ';
  $faqs = array(
    array(
      'question' => "How do i get started?",
      'answer' => "All you need is a wallet like MEW, Mist, Parity or Metamask (highly recommended). \n You need to have some balance on your wallet to trade, select the time frame that you wish to operate and make a decision to Put or Call."
    ),
    array(
      'question' => "if I win, How much is the profit?",
      'answer' => "You can get profits like 85% on a time frame of 5 minutes 75% on a time frame of 15 minutes and a 55% on a time frame of 30 minutes."
    ),
    array(
      'question' => "Do Ethbinary holds the funds of the traders?",
      'answer' => "No, Ethbinary is based on smart contracts, so we don´t have access to the user's wallet private key."
    ),
    array(
      'question' => "How do I know if I lose?",
      'answer' => "If your trade was incorrect, you will get a 1 wei. And if you win, the funds will get back to your wallet."
    )
  );
  ?>

  <div class="row col-12">

    <h2 class="title col-12 text-center"><?php echo $title; ?></h2>

    <?php

    for ($i=0; $i < count($faqs); $i++):

      ?>

      <p class="faq-question col-12"><?php echo $faqs[$i]['question']; ?></p>
      <p class="faq-answer col-12"><?php echo $faqs[$i]['answer']; ?></p>

      <?php
    endfor;
    ?>

  </div>

</section>
