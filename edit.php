<?php
    $page   = array(
                "title"     => array(
                    "english"   => "Canadian Forum of Civil Justice",
                    "french"    => "Forum Canadien sur la Justice Civile"
                ),
                "nav"       => array(
                    "english"   => array("About the Forum", "Research",
                                    "Publications", "Inventory of Reforms",
                                    "Clearinghouse", "Links"),
                    "french"    => array("Au sujet du Forum", "Recherche", 
                                    "Publications", "Répertoire des réformes", 
                                    "Centre d'information", "Hyperliens")
                )
              ); 
    $lang    = isset($_GET["fr"]) ? "french" : "english";
    $content = array(
                "section"   => array(
                                "english" => "Search", 
                                "french" => "Recherche"),
                "header"    => array(
                    "english"   =>  "Search the Inventory",
                    "french"    =>  "Recherche dans le répertoire"),
                "lead"      => array(
                    "english"   =>  "This database contains descriptions of 
                        civil justice system reform initiatives from across 
                        Canada, each described according to a standard format 
                        that includes information on the purpose, development, 
                        implementation, and evaluation of the reform. 
                        <a href=\"#\">Read more »</a>",
                    "french"    =>  "Cette base de données contient des 
                        initiatives de réforme de la justice civile de partout
                        au Canada. Chacune est décrite selon un modèle standard 
                        qui précise la raison d'être, le développement, la mise
                        en œuvre et l’évaluation de la réforme. <a href=\"#\">
                        Lire plus »</a>"),
                "nav"       => array(
                    "english"   => array("Search", "About", "Update", 
                                    "Take Part"),
                    "french"    => array("Recherche", "Aperçu", "Mises à jour", 
                                    "Collaborer")
                    )
                );
                
?>
    
    
<?php include("inc/header.php"); ?>
      <header>
        <h1 class="jumbotron"><?php echo $content["header"][$lang];?></h1>
        <p class="lead"><?php  echo $content["lead"][$lang];?></p>
      </header>
      <br>
      <br>
      <h2>Navigation Settings <small>for configuring page location</small></h2>
      <hr>
      <div class="row-fluid" >
        <form class="well span6">
          <h4>Section Name</h4>
            <input type="text" class="input-append" placeholder="Type something…">
          <hr>
          <h4>Page Name</h4>
            <input type="text" class="input-append" placeholder="Type something…">
        </form>
        <form class="well span6">
          <h4>Section Name</h4>
            <input type="text" class="input-append" placeholder="Type something…">
          <hr>
          <h4>Page Name</h4>
            <input type="text" class="input-append" placeholder="Type something…">
        </form>
      </div>

      <h2>Title Settings <small>for configuring title blob</small></h2>
      <hr>
      <div class="row-fluid" >
        <form class="well span6">
          <h4>Title Text</h4>
            <input type="text" class="input-append" placeholder="Type something…">
          <hr>
          <h4>Lead Text</h4>
            <input type="text" class="input-append" placeholder="Type something…">
        </form>
        <form class="well span6">
          <h4>Title Text</h4>
            <input type="text" class="input-append" placeholder="Type something…">
          <hr>
          <h4>Lead Text</h4>
            <input type="text" class="input-append" placeholder="Type something…">
        </form>
      </div>
        
      </div>
<?php include("inc/footer.php"); ?>