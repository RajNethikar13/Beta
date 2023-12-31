<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hazra lab</title>
     <!--bootstrap scripts--->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
  
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
                <li class="sidepanel active" role="presentation">
                  <a href="Data.php"><button class="link-button ">Sequences</button></a>
                </li>
                <li class="sidepanel"  role="presentation">
                  <a href="../panel/structure.php">
                    <button class="link-button">Structures</button>
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
                <li class="sidepanel"  role="presentation">
                  <a href="../panel/prodynamics.php">
                    <button class="link-button">Protein Dynamics</button>
                  </a>
                </li>
              </ul>
                
            </div>

            <div class="header">
              <div>
                <ul class="nav nav-tabs" id="myTab" >
                  <li class="nav-item" role="presentation">
                  <a href="Data.php" class="subpanel">   <button class="nav-link active" >Sequences</button>    </a> 
                  </li>
                  <li class="nav-item" role="presentation">
                    <a href="../sequence/msa.php" class="subpanel"><button class="nav-link" >MSA Analysis</button></a>
                  </li>
                  <li class="nav-item" role="presentation">
                   <a href="../sequence/phylogeny.php" class="subpanel" > <button class="nav-link" >Phylogeny</button>
                   </li></a>
                  <li class="nav-item" role="presentation">
                    <a  href="../sequence/conserve.php"  class="subpanel" ><button class="nav-link" >Conservation Analysis</button></a>
                  </li>
                  
                </ul>
              </div> 
              <div class="sid" style="margin:10px 10px">
              <form method="POST"  enctype="multipart/form-data" action="data1.php">
                   <input type="file" name="file">
                   <input type="submit" value="Upload" >
                  </form>
               </div>
              <div class="info_body">
                <ul id="sr">
                  <li><a href="../sequence_data/sequence_1.txt">CepA_01</a></li>
                  <li><a href="../sequence_data/sequence_2.txt">CepA_02</a></li>
                  <li><a href="../sequence_data/sequence_3.txt">CepA_03</a></li>
                  <li><a href="../sequence_data/sequence_4.txt">CepA_04</a></li>
                  <li><a href="../sequence_data/sequence_5.txt">CepA_05</a></li>
                  <li><a href="../sequence_data/sequence_6.txt">CepA_06</a></li>
                  <li><a href="../sequence_data/sequence_7.txt">CepA_07</a></li>
                  <li><a href="../sequence_data/sequence_8.txt">CepA_08</a></li>
                  <li><a href="../sequence_data/sequence_9.txt">CepA_09</a></li>
                  <li><a href="../sequence_data/sequence_10.txt">CepA_10</a></li>
                  <li><a href="../sequence_data/sequence_11.txt">CepA_11</a></li>
                  <li><a href="../sequence_data/sequence_12.txt">CepA_12</a></li>
                  <li><a href="../sequence_data/sequence_13.txt">CepA_13</a></li>
                  <li><a href="../sequence_data/sequence_14.txt">CepA_14</a></li>
                  <li><a href="../sequence_data/sequence_15.txt">CepA_15</a></li>
                  <li><a href="../sequence_data/sequence_16.txt">CepA_16</a></li>
                  <li><a href="../sequence_data/sequence_17.txt">CepA_17</a></li>
                  <li><a href="../sequence_data/sequence_18.txt">CepA_18</a></li>
                  <li><a href="../sequence_data/sequence_19.txt">CepA_19</a></li>
                  <li><a href="../sequence_data/sequence_20.txt">CepA_20</a></li>
                  <li><a href="../sequence_data/sequence_21.txt">CepA_21</a></li>
                  <li><a href="../sequence_data/sequence_22.txt">CepA_22</a></li>
                  <li><a href="../sequence_data/sequence_23.txt">CepA_WT</a></li>
                </ul>
                
                
              </div>
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
           $files = scandir("Data-data");
  
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
                 
                td1.href="Data-data/<?php echo $files[$a]; ?>";
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
