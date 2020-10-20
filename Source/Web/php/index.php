<!--+++.+++.+++.+++.+++.+++.+++.+++.+++.+++.+++.
.+++.+++.+++.+++.+++.+++.+++.+++.+++.+++.+++.+++
+++.                                        +++.
.+++                                        .+++
+++.        DDD.    NNN.    NNN.    AAA.    +++.
.+++        DDD.    NNN.    NNN.    AAA.    .+++
+++.    DDD.    NNN.    NNN.    AAA.        +++.
.+++    DDD.    NNN.    NNN.    AAA.        .+++
+++.        DDD.NNN.NNN.NNN.NNN.            +++.
.+++        DDD.NNN.NNN.NNN.NNN.            .+++
+++.            NNN.    NNN.        AAA.    +++.
.+++            NNN.    NNN.        AAA.    .+++
+++.        EEE.    III.    KKK.    NNN.    +++.
.+++        EEE.    III.    KKK.    NNN.    .+++
+++.    EEE.    III.    KKK.    NNN.        +++.
.+++    EEE.    III.    KKK.    NNN.        .+++
+++.        EEE.III.    KKK.    NNN.NNN.    +++.
.+++        EEE.III.    KKK.    NNN.NNN.    .+++
+++.        EEE.    III.KKK.KKK.NNN.        +++.
.+++        EEE.    III.KKK.KKK.NNN.        .+++
+++.                                        +++.
.+++                                        .+++
+++.+++.+++.+++.+++.+++.+++.+++.+++.+++.+++.+++.
.+++.+++.+++.+++.+++.+++.+++.+++.+++.+++.+++.-->

<!-- Licensed under the EUPL-1.2-or-later -->

<?php include 'scripts/DiBG_WIP.php'; ?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title></title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://twemoji.maxcdn.com/v/latest/twemoji.min.js" crossorigin="anonymous"></script>
  <script>
        window.onload = function() {    
            // Parses the document body and    
            // inserts <img> tags in place of Unicode Emojis    
            twemoji.parse(document.body, 
                    {folder: 'svg', ext: '.svg'} // This is to specify to Twemoji to use SVGs and not PNGs
            );

        }

    </script>
  <script src="https://kit.fontawesome.com/2901699eaf.js" crossorigin="anonymous"></script>

  <style type="text/css">
  .DiBG-FULL {
  background: url(<?php echo $selectedBg; ?>) no-repeat;
  }
  </style>

  <link rel="stylesheet" href="../css/DiSTYLE.css" />
  <link rel="stylesheet" href="../css/DiLOAD.css" />

</head>

<body>
  <div class="DiLOAD_background"></div>
  <div class="DiLOAD_animation">
  <img src="../../[Assets]/deninkan_emblem-fast.gif" alt="Loading" height="128px">
  </div>

    <div class="DiBG-FULL">
    <?php include 'elements/DiHEAD.php'; ?>
        
        <div class="DiBG-FULL_content">
          <h1 class="headline">coming soon<br>近日公開</h1>
        </div>

    <?php include 'elements/DiFOOT.php'; ?>
    </div>

  <script>
    $(window).on("load", function() {
      $(".DiLOAD_background").fadeOut("slow");
      $(".DiLOAD_animation").fadeOut("slow");
    });
  </script>
  
</body>

</html>


