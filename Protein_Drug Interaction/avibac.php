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
    <script src="../app.js"></script>
   
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
                <li class="sidepanel active" role="presentation">
                  <a href="../panel/prodrug.php">
                    <button class="link-button">Protein-Drug Interaction</button>
                  </a>
                </li>
                <li class="sidepanel" role="presentation">
                  <a href="../panel/variantanalysis.php">
                    <button class="link-button">Variant Analysis</button>
                  </a>
                </li>
                <li class="sidepanel"  role="presentation">
                  <a href="../panel/prodynamics.php">
                    <button class="link-button">Protein Dynamics</button>
                  </a>
                </li>
              </ul>
                
            </div>

            <div class="header">
              <ul class="nav nav-tabs" id="myTab" >
                <li class="nav-item" role="presentation">
                <a href="../Protein_Drug Interaction/amp.php" class="subpanel">   <button class="nav-link " >Ampicillin</button>    </a> 
                </li>
                <li class="nav-item" role="presentation">
                  <a href="../Protein_Drug Interaction/cepha.php" class="subpanel"><button class="nav-link " >Cephalexin</button></a>
                </li>
                <li class="nav-item" role="presentation">
                 <a href="../Protein_Drug Interaction/aztreo.php" class="subpanel" > <button class="nav-link " >Aztreonam</button>
                 </li></a>
                <li class="nav-item" role="presentation">
                  <a  href="../Protein_Drug Interaction/clav.php"  class="subpanel" ><button class="nav-link" >Clavulanate</button></a>
                </li>
                <li class="nav-item active" role="presentation">
                    <a  href="../Protein_Drug Interaction/avibac.php"  class="subpanel" ><button class="nav-link " >Avibactum</button></a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a  href="../Protein_Drug Interaction/mer.php"  class="subpanel" ><button class="nav-link " >Meropenem</button></a>
                  </li>
                 
              </ul>   
              <div class="sid">
              <form method="POST"  enctype="multipart/form-data" action="avibac1.php">
                   <input type="file" name="file">
                   <input type="submit" value="Upload" >
                  </form>
</div>
              <div id="dataContainer">
                <h4 style="margin: 10px;">Select the Variant</h4>
                   <ul id="sr">
                    <li><a href="Avibactum/Avibactum_Cep-01.html">CepA-01</a></li>
                    <li><a href="cep2.html">CepA-02</a></li>
                    <li><a href="cep3.html">CepA-03</a></li>
                    <li><a href="cep4.html">CepA-04</a></li>
                    <li><a href="cep5.html">CepA-05</a></li>
                    <li><a href="cep6.html">CepA-06</a></li>
                    <li><a href="cep7.html">CepA-07</a></li>
                    <li><a href="cep8.html">CepA-08</a></li>
                    <li><a href="cep9.html">CepA-09</a></li>
                    <li><a href="cep10.html">CepA-10</a></li>
                    <li><a href="cep11.html">CepA-11</a></li>
                    <li><a href="cep12.html">CepA-12</a></li>
                    <li><a href="cep13.html">CepA-13</a></li>
                    <li><a href="cep14.html">CepA-14</a></li>
                    <li><a href="cep15.html">CepA-15</a></li>
                    <li><a href="cep16.html">CepA-16</a></li>
                    <li><a href="cep17.html">CepA-17</a></li>
                    <li><a href="cep18.html">CepA-18</a></li>
                    <li><a href="cep19.html">CepA-19</a></li>
                    <li><a href="cep20.html">CepA-20</a></li>
                    <li><a href="cep21.html">CepA-21</a></li>
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

<?php
           $files = scandir("avibac-data");
  
    for ($a = 2; $a < count($files); $a++)
    {
        ?>
        <p>
            <!-- Displaying file name !-->
            <!-- <?php echo $files[$a]; ?> -->
            
            <!-- href should be complete file path !-->
            <script>
               
                var  l1=document.createElement('li');
                var td1=document.createElement('a');
                 
                td1.href="avibac-data/<?php echo $files[$a]; ?>";
                 td1.target="_blank";
                 td1.innerText="<?php echo $files[$a]; ?>"
                var k=l1.appendChild(td1);
                document.getElementById("sr").appendChild(l1);
                
            </script>
            <!-- <a href="uploads/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
            <?php echo $files[$a];?>
            </a> -->
          
        </p>
        
        <?php
    }
    ?>
