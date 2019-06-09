
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Materialize - Compiled and minified CSS-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.95.3/css/materialize.min.css">
    <!-- Font Awesome Icon - CSS-->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Custom Styles-->
    
    <title>Ritesh Kumar | Full Stack Developer</title>

    <?= // stylesheets
			cssAsset( [
				'font-awesome.min',
				//'angular-csp',
				'bootstrap',
				'style'
			] )
		?>
		
    
    <!--if lt IE 9script(src='//html5shim.googlecode.com/svn/trunk/html5.js')
    -->
    <meta name="robots" content="index, follow">
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-39096633-2', 'auto');
      ga('send', 'pageview');
    </script>
    <meta name="google-site-verification" content="-3F1R8ekDXe8XFfCi7eIVfXOSWqlp_pWNQX2dfgKD4Y">
  </head>
  <body>
    <?php $this->load->view('/Template/_sidebar'); ?>
    <!-- Main Content-->
    <main>
      <section id="intro" class="section scrollspy full-height">
        <?= $content;?>
      </section>
      <?php $this->load->view('/Template/_footer'); ?>
    </main>
    
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    <!-- jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Materialize - Compiled and minified JavaScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.95.3/js/materialize.min.js"></script>
    <script>
      // Materialize - Initializers
      $(document).ready(function(){
        $('.scrollspy').scrollSpy();
        // Initialize collapse button
        $(".button-collapse").sideNav({
            menuWidth: 190, // Default is 240
            edge: 'left', // Choose the horizontal origin
            closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
          }
        );
      });

      function GetContent(actionName)
      {
          $.ajax({
              url: '<?=base_url()?>index.php/welcome/'+actionName,
              type: 'POST',
              data: {},
              dataType: 'html',
              success: function(data) {
                document.getElementById(actionName.toLowerCase()).innerHTML = data;
                  console.log(data);
              }
          });
      }
      //GetContent("Intro");
    </script>
    <!-- <script type="text/javascript" src="/asset/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="/asset/ckfinder/ckfinder.js"></script> -->
<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<!-- <link rel="stylesheet" href="<?php base_url(); ?>style/format.css"> -->
<script>
    CKEDITOR.replace('txtDescription');
</script>
  </body>
</html>
