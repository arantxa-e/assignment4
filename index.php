<?php include('includes/header.php'); ?>
<?php include('config/db.php'); ?>

<script
  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous"></script>
  <script src="http://malsup.github.com/jquery.form.js"></script>

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




           <form id="uploadImage" action="upload.php" method="post">
            <div class="form-group">
             <label>File Upload (.jpg or .png): </label>
             <input type="file" name="uploadFile" id="uploadFile" accept=".jpg, .png" />
            </div>
            <div class="form-group">
             <input type="submit" id="uploadSubmit" value="Upload" class="button" />
            </div>
            <div class="progress">
             <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </form>

       </div><!-- /column -->

    <div class="column">
        <h3 class="title is-4 has-text-centered">Your Image</h3>
        
            <div id="targetLayer" style="display:none;"></div>

            <div id="loader-icon" style="display:none;"><img src="img/loader.gif" /></div>
           
    </div>

  </div><!-- /columns -->

    <div class="has-text-centered">
      <a class="button is-primary is-medium" href="editor.php">Next</a>
    </div>



<?php include('includes/footer.php'); ?>

<script>
        $(document).ready(function(){
         $('#uploadImage').submit(function(event){
          if($('#uploadFile').val())
          {
           event.preventDefault();
           $('#loader-icon').show();
           $('#targetLayer').hide();
           $(this).ajaxSubmit({
            target: '#targetLayer',
            beforeSubmit:function(){
             $('.progress-bar').width('0%');
            },
            uploadProgress: function(event, position, total, percentageComplete)
            {
             $('.progress-bar').animate({
              width: percentageComplete + '%'
             }, {
              duration: 1000
             });
            },
            success:function(){
             $('#loader-icon').hide();
             $('#targetLayer').show();
            },
            resetForm: true
           });
          }
          return false;
         });
        });
    </script>
