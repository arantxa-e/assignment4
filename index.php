<?php include('includes/header.php'); ?>

  <section class="hero is-light">
    <div class="hero-body">
      <div class="container">
        <h1 class="title">
          Upload your image
        </h1>
        <h2 class="subtitle">
          What nonsense will you print?
        </h2>
      </div>
    </div>
  </section>

  <div class="content container">


    <div class="columns">
      <div class="column">
        <h3 class="title is-4 has-text-centered">File Upload</h3>

        <p>
          Upload your image below.
        </p>

        <form action="" method="post" class="has-text-centered">
          <div class="field">
            <label class="file-label">
              <input class="file-input" type="file" name="uploadFile" id="uploadFile" accept=".jpg, .png" />
              <span class="file-cta">
                <span class="file-icon">
                  <i class="fas fa-upload"></i>
                </span>
                <span class="file-label">
                  Choose a file…
                </span>
              </span>
            </label>
          </div>

          <div class="control">
            <a class="button is-light" id="uploadSubmit">Upload</a>
          </div>

          <!-- Animated progress bar. Will need to be visible when image is loading
          <progress class="progress is-small is-primary" max="100">15%</progress> -->

        </form>
      </div>

      <div class="column">
        <h3 class="title is-4 has-text-centered">Your Image</h3>
      </div>
    </div>

    <div class="has-text-centered">
      <a class="button is-primary is-medium" href="editor.php">Next</a>
    </div>

<?php include('includes/footer.php'); ?>
