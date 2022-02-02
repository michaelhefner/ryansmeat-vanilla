<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>ryansmeat.com</title>
    <meta name="description" 
      content="We make food you'll love to snack on.  From spicy pork sausages, to savory venison jerky." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="sausage, jerky, smoked, meat, venison, pork, beef, game, wild"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/medium.css" />

    <script type="module" src="js/app.js"></script>

    <meta name="theme-color" content="#444" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-48K86QB7S6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-48K86QB7S6');
</script>
  </head>

  <body class="container">

    <main>
      <!-- <div id="jumbo">
        <div>
          <h2>Ryan's Meat</h2>
        </div>
        <picture>
          <source
            media="(min-width:1024px)"
            width="1280px"
            alt="fresh ingredients "
            height="600px"

            srcset="./img/grilling_1.jpg"
          />
          <source
            media="(min-width:768px)"
            width="768px"
            height="500px"

            alt="fresh ingredients "

            srcset="./img/grilling_1.jpg"
          />
          <source
            media="(min-width:512px)"
            width="512px"
            height="400px"

            alt="fresh ingredients "

            srcset="./img/grilling_1.jpg"
          />
          <img
            src="./img/grilling_1.jpg"
            alt="fresh ingredients "
            width="512px"
            height="400px"
          />
        </picture>
        <img
          src="./img/top-view-female-cook-cutting-fresh-green-salad-gray-surface-2.jpg"
        />
      </div> -->
      <?php
      include 'header.php';
      include 'hero.php';
      include 'flavors.php';
      include 'snack-sticks.php';
      include 'contact.php';
      include 'footer.php';

      ?>
      <!-- <section id="edu">
        <div>
          <h2>Fringilla est ullamcorper eget</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Pellentesque elit ullamcorper dignissim cras tincidunt lobortis.
            Arcu felis bibendum ut tristique et egestas quis ipsum suspendisse.
            Sollicitudin aliquam ultrices sagittis orci a scelerisque purus
            semper. Eget nunc lobortis mattis aliquam faucibus purus in massa.
          </p>
        </div>
      </section>
      <section id="projects">
        <div>
          <h2>Fringilla est ullamcorper eget</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Pellentesque elit ullamcorper dignissim cras tincidunt lobortis.
            Arcu felis bibendum ut tristique et egestas quis ipsum suspendisse.
            Sollicitudin aliquam ultrices sagittis orci a scelerisque purus
            semper. Eget nunc lobortis mattis aliquam faucibus purus in massa.
          </p>
        </div>
        <img
          src="./img/top-view-female-cook-cutting-fresh-green-salad-gray-surface (1)-2.jpg"
          loading="lazy"
          width="1280px"
        />
      </section> -->
    </main>
  </body>
</html>
