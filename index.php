<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
<link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

    <title>Hazra lab | Home</title>
</head> 
<body>
    <!--------------------------------- Header and Navbar starts ----------------------------------->

    <header>
        <nav>
            <h1>CepA Beta-Lactamase Database</h1>
            <ul>
              <li>
                <a href="index.php">Home</a>
              </li>
                <li>
                    <a href="panel/Data.php">Collective Data</a>                    
                </li>
                <li>
                    <a href="faq.php">FAQ's</a>
                </li>
                <li>
                    <a href="sign.php">Sign In</a>                    
                </li>
            </ul>
        </nav>
    </header>

    <!---------------------------------- Header and Navbar ends ------------------------------------>

    <!----------------------------------- Home Container starts ------------------------------------>

    <div class="home-container">
        <div class="home-box-1">
            <h2>BETA-LACTAMASE Hazra Database</h2>
            <h3>CepA Beta-Lactamase Database</h3>
            <br>
            <p>A database offering multi-level data for CepA Beta-Lactamase enzyme hosted by Hazra Lab</p>
        </div>
        <div class="home-box-2">
            <p>
                CepA is a chromosomal class A <em>Beta-lactamase</em> produced by the Enterobacteria <em>Bacteroides fragilis</em>,
                with a wider substrate hydrolysis profile. CepA is coded by the <em>cepA</em> gene and has a protein length of 272 amino acids.
                Based on the classification by Ambler, <em>cepA</em> shows the four conserved elements of class A beta-lactamases.
                Until now, 22 allelic variants of the <em>CepA</em> enzyme have been sequenced.
                CepA shows efficient hydrolysis of cephalosporins. <em>Bacteroides</em> is resistant to benzylpenicillin and cephalosporidine.
                It is inhibited by <em>Clavulanic acid</em> and <em>tazobactam</em> but not by aztreonam.
                (check) but a-methoxyl cephamycins such as cefoxitin and the carbapenems have been highly active against <em>Bacteroides</em> species.
                Extended spectrum <em>Beta lactamase</em> (ESBL) hydrolyses cephalosporins.
            </p>
        </div>

        <div class="slider">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">


                <div class="slide first">
                    <img src="images/protein1.png" alt="Image 1">
                </div>
                <div class="slide">
                    <img src="images/protein1.png" alt="Image 2">
                </div>
                <div class="slide">
                    <img src="images/what-are-proteins-part-3-of-3.png" alt="Image 3">
                </div>


                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                </div>
            </div>
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
            </div>
        </div>

        <script>
            var counter = 1;
            setInterval(function(){
                document.getElementById('radio' + counter).checked = true;
                counter++;
                if(counter>3){
                    counter = 1;
                }
            }, 2000);
        </script>

    <!------------------------------------ Home Container ends ------------------------------------->

    <!--------------------------------------- Footer starts ---------------------------------------->

    <footer id="footer">
        <h3 style="margin-bottom: 5px;">Contact us by mailing at : </h3>
        <a href="mailto:saugata.iitk@gmail.com" style="text-decoration: underline;">saugata.iitk@gmail.com</a>
        <p style="margin-top: 7px;">&copy; Copyright 2022, CepA Beta-Lactamase, Hazra Lab.</p>
    </footer>

    <!---------------------------------------- Footer ends ----------------------------------------->

</body>
</html>