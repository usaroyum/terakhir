<head>
    <!-- ... --->
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="preload" as="images" href="/assets/button/all.svg">
    <link rel="preload" as="images" href="/assets/button/all-net.svg">
    <link rel="preload" as="images" href="/assets/button/gallery.svg">
    <link rel="preload" as="images" href="/assets/button/gallery-net.svg">

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   <link rel="stylesheet" href="/magic-mouse.css" />
   <script type="text/javascript" src="/magic_mouse.js"></script>

  </head>

  	<script>
          options = {
            "cursorOuter": "disable",
            "hoverEffect": "pointer-overlay",
            "hoverItemMove": false,
            "defaultCursor": false,
            "outerWidth": 30,
            "outerHeight": 30
            };
            magicMouse(options);

		 $('#hamburger').click(function(){
   $('.sidebar').toggleClass('active');
 });

	</script>
