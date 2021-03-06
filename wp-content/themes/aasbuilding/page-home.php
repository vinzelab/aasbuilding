<?php /* Template Name: homepage */ ?>

<?php get_header(); ?>

<main>
  <section id="about" class="container">
    <div class="row">
      <div class="col-xs-12 col-lg-12">
        <div class="block-title">
          <h2 class="text-center masking">Centre d'affaires <br/>et location de bureaux</h2>
          <h3 class="text-center">Utilisez les infrastructures de notre Réseau</h3>
        </div>
        <p class="text-center">Nos centres d'affaires sont présents sur 31 villes en France (Paris, Lyon, Toulouse, Nantes, Grenoble, etc.) et offrent des prestations de domiciliation, de location de bureaux, de secrétariat et d’accueil téléphonique. </p>
      </div>
    </div>
  </section>
  <section id="map">
    <div class="row vcenter">
      <div class="col-xs-12 col-lg-6">
        <?php get_template_part( 'map' );?>
      </div>
      <div class="col-xs-12 col-lg-6 text-center">
        <div class="block-title">
          <h2 class="text-center masking">Nos 32 agences<br/>sur toute la France</h2>
          <h3 class="text-center">Groupement d'affaires indépendants</h3>
        </div>
        <h5 class="text-center">Le meilleur moyen de gagner du temps est d'utiliser les infrastructures de notre Réseau</h5>
        <p class="text-center">Cliquer sur le département de votre choix pour envoyer un email de renseignement</p>
        <button class='btn'>prenez rdv</button>
      </div>
    </div>
  </section>
  <section id="service">
    <div class="block-title">
      <h2 class="text-center masking">Les services <br/>de notre réseau</h2>
      <h3 class="text-center">Une gamme de service à la carte</h3>
    </div>
    <?php get_template_part( 'service' );?>
  </section>
  <section id="contact">
    <div class="block-title">
      <h2 class="text-center masking">Prenez contact <br/>avec nous</h2>
      <h3 class="text-center">N'hésitez pas à poser toutes vos questions</h3>
    </div>
    <?php get_template_part( 'contact-form' );?>
  </section>
</main>

<?php get_footer(); ?>
