<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hazra lab</title>
     <!--bootstrap scripts--->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/data.css">
   
  </head>
  <body>
   
    <header>
      <nav class="navbar navbar-expand-lg navbar-bg-light">
        <h1>CepA Beta-Lactamase Database</h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-right: 10px;">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Data.php">Collective Data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../faq.php">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../sign.php">Sign-in</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <section >

        <div class="wrapper">
            <div class="sidebar">
                
              <ul >
                <li class="sidepanel" role="presentation">
                  <a href="../panel/Data.php"><button class="link-button ">Sequences</button></a>
                </li>
                <li class="sidepanel "  role="presentation">
                  <a href="../panel/structure.php">
                    <button class="link-button ">Structures</button>
                  </a>
                </li>
                <li class="sidepanel" role="presentation">
                  <a href="../panel/prodrug.php">
                    <button class="link-button">Protein-Drug Interaction</button>
                  </a>
                </li>
                <li class="sidepanel" role="presentation">
                  <a href="../panel/variantanalysis.php">
                    <button class="link-button">Variant Analysis</button>
                  </a>
                </li>
                <li class="sidepanel active"  role="presentation">
                  <a href="../panel/prodynamics.php">
                    <button class="link-button">Protein Dynamics</button>
                  </a>
                </li>
              </ul>
                
            </div>

            <div class="header">
              <ul class="nav nav-tabs" id="myTab" >
                <li class="nav-item" role="presentation">
                <a href="../proteinDynamic/rmsd1.php" class="subpanel">   <button class="nav-link " >RMSD</button>    </a> 
                </li>
                <li class="nav-item" role="presentation">
                  <a href="../proteinDynamic/rmsf1.php" class="subpanel"><button class="nav-link " >RMSF</button></a>
                </li>
                <li class="nav-item" role="presentation">
                 <a href="../proteinDynamic/rg.php" class="subpanel" > <button class="nav-link " >Rg</button>
                 </li></a>
                <li class="nav-item" role="presentation">
                  <a  href="../proteinDynamic/sasa.php"  class="subpanel" ><button class="nav-link" >SASA</button></a>
                </li>
                <li class="nav-item" role="presentation">
                    <a  href="../proteinDynamic/hbond.php"  class="subpanel" ><button class="nav-link " >H-bond</button></a>
                  </li>
                  
              </ul>
          </div>   
            

         </div>


    </section>
   

    <footer id="footer">
      <h4 style="font-weight: bold;">Contact us by mailing at : </h4>
      <a href="mailto:saugata.iitk@gmail.com" style="text-decoration: underline;">saugata.iitk@gmail.com</a>
      <p >&copy; Copyright 2022, CepA Beta-Lactamase, Hazra Lab.</p>
      </footer>
   
  </body>
</html>