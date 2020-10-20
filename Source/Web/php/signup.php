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
  .DiFULLBG {
  background: url(<?php echo $selectedBg; ?>) no-repeat;
  }
  </style>

  <link rel="stylesheet" href="../css/DiSTYLE.css" />
  <link rel="stylesheet" href="../css/DiLOAD.css" />
  <link rel="stylesheet" href="../css/DiSIGN.css" />  

</head>

<body>
  <div class="DiLOAD_background"></div>
  <div class="DiLOAD_animation">
  <img src="../../[Assets]/deninkan_emblem-fast.gif" alt="Loading" height="128px">
  </div>

  <header style="justify-content: flex-end">
    <div class="DiHEAD-NAV_icons">
      <a href="index.php" class="DiHEAD-NAV_logo">
          <img src="../../[Assets]/deninkan_emblem.gif" alt="Deninkan Logo" height="64px" />
      </a>
    </div>
  </header>

  <div class="DiBG-FULL_content">  
    <section>
    <div class="DiSIGN-UP_form">
    <h5 class="subtitle">// don't have<br>// an account?<br>// sign up!<br>// it's 🆓✨</h5>
      <form action="DiSIGN-UP.php" method="post">
      <input type="text" name="user" placeholder="username">
      <input type="text" name="email" placeholder="e-mail">
      <input type="password" name="pwd" placeholder="password">
      <input type="password" name="pwd_confirm" placeholder="confirm password">
      <input type="checkbox" name="tos_confirm" id="tos_confirm"
      class="css-checkbox" /><label for="tos_confirm" class="css-label">You agree to the<br><a href="https://github.com/nipponmalaya/deninkan/blob/master/TERMS.md"><i>Terms of Service</i></a></label>
      <button type="submit" name="next">next =></button>
    </form>
    <p class="footnote"><a href="signin.php"><i>already have an account?</i></a></p>
    </div>
    </section>
  </div>

  <script>
    $(window).on("load", function() {
      $(".DiLOAD_background").fadeOut("slow");
      $(".DiLOAD_animation").fadeOut("slow");
    });
  </script>
  
</body>

</html>


