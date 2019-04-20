<?php include('includes/header.php'); ?>

    <section class="hero is-light">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
            Image Editor
          </h1>
          <h2 class="subtitle">
            The fun part
          </h2>
        </div>
      </div>
    </section>

    <div class="content container">


    <h2 class="title is-3 has-text-centered">Image Editor</h2>
    <!-- Image Editor Here -->
    
    <div class="columns">
        <div class="column has-text-centered"><h3 class="title is-4">Your Uploaded Image</h3>
        <?php if(isset($_SESSION['image'])) {
            echo '<a href="https://www.ribbet.com/app/?_import=http://printmynonsense.com/'.$_SESSION['image'].'&_export=http://printmynonsense.com/editor.php&_exclude=out,home,share& _export_title=Save&_export_agent=browser&embed=true"><img src="' . $_SESSION['image'] .'" class="responsive" /></a><br /><a class="button" href="https://www.ribbet.com/app/?_import=http://printmynonsense.com/'.$_SESSION['image'].'&_export=http://printmynonsense.com/editor.php&_exclude=out,home,share& _export_title=Save&_export_agent=browser&embed=true">Edit Image</a> ';
         } else {
             echo 'You haven\'t selected an image. Please <a href="index.php">go back</a> to upload an image.';
         } ?>
         </div>
         <div class="column has-text-centered"><h3 class="title is-4">Your Edited Image</h3>
         <?php
         
         if(isset($_GET['file'])) {
             $_SESSION['edit'] = $_GET['file'];
              echo '<img src="'. $_SESSION['edit'] .'" />';
         } else {
            echo 'Click on your image to open the editor. After you save, your edited image will appear here.';
         }
        ?>
        </div>
    </div>


    <div class="has-text-centered">
      <a class="button is-primary is-medium" href="checkout.php">Checkout</a>
    </div>

<?php include('includes/footer.php'); ?>

