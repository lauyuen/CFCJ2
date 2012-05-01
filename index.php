<?php
    $page   = array(
                "title"     => array(
                    "english"   => "Canadian Forum of Civil Justice",
                    "french"    => "Forum Canadien sur la Justice Civile"),
                "nav"       => array(
                    "english"   => array("About the Forum", "Research",
                                    "Publications", "Inventory of Reforms",
                                    "Clearinghouse", "Links"),
                    "french"    => array("Au sujet du Forum", "Recherche", 
                                    "Publications", "Répertoire des réformes", 
                                    "Centre d'information", "Hyperliens")
                    ),
                
                );
    $lang    = isset($_GET["fr"]) ? "french" : "english";
    $content = array(
                "section"   => array(
                                "english" => "Search", 
                                "french" => "Recherche"),
                "header"    => array(
                    "english"   =>  "Inventory of Reforms",
                    "french"    =>  "Répertoire des réformes"),
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
    
    
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $page["title"][$lang]; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="./css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
        html { 
            overflow-y: scroll; 
            font-size: 100%; 
            -webkit-text-size-adjust: 100%; 
            -ms-text-size-adjust: 100%;
        }
        
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
      
        .jumbotron {
            font-size: 54px;
            margin-bottom: 9px;
            font-weight: bold;
            letter-spacing: -1px;
            line-height: 1;
        }
    </style>
    <link href="./css/bootstrap-responsive.css" rel="stylesheet">
    <link href="./css/bootstrap-datatables.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href=".ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href=".ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href=".ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href=".ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href=".ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar">Bleh</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#"><?php echo $page["title"][$lang]; ?></a>
          <div class="nav-collapse">
            <ul class="nav">
              <?php foreach ($page["nav"][$lang] as $li): ?>
                <?php if ($li == $content["header"][$lang]): ?>
                <li class="active"><?php else: ?>
                <li><?php endif; ?><a href="#"><?php echo $li; ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
      <header>
        <h1 class="jumbotron"><?php echo $content["header"][$lang];?></h1>
        <p class="lead"><?php  echo $content["lead"][$lang];?></p>
        <div class="subnav">
          <ul class="nav nav-tabs">
          <?php foreach ($content["nav"][$lang] as $li): ?>
            <?php if ($li == $content["section"][$lang]): ?>
            <li class="active"><?php else: ?>
            <li><?php endif; ?><a href="#"><?php echo $li; ?></a></li>
          <?php endforeach; ?>
          </ul>
        </div>
      </header>
    
    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
        <thead>
            <tr>
                <th>Rendering engine</th>
                <th>Browser</th>
                <th>Platform(s)</th>
                <th>Engine version</th>
                <th>CSS grade</th>
            </tr>
        </thead>
        <tbody>
<?php for($i = 0; $i < 10; $i++): ?>
            <tr class="odd gradeX">
                <td>Trident</td>
                <td>Internet
                     Explorer 4.0</td>
                <td>Win 95+</td>
                <td class="center"> 4</td>
                <td class="center">X</td>
            </tr>
            <tr class="even gradeC">
                <td>Trident</td>
                <td>Internet
                     Explorer 5.0</td>
                <td>Win 95+</td>
                <td class="center">5</td>
                <td class="center">C</td>
            </tr>
            <tr class="odd gradeA">
                <td>Trident</td>
                <td>Internet
                     Explorer 5.5</td>
                <td>Win 95+</td>
                <td class="center">5.5</td>
                <td class="center">A</td>
            </tr>
            <tr class="even gradeA">
                <td>Trident</td>
                <td>Internet
                     Explorer 6</td>
                <td>Win 98+</td>
                <td class="center">6</td>
                <td class="center">A</td>
            </tr>
            <tr class="odd gradeA">
                <td>Trident</td>
                <td>Internet Explorer 7</td>
                <td>Win XP SP2+</td>
                <td class="center">7</td>
                <td class="center">A</td>
            </tr>
            <tr class="even gradeA">
                <td>Trident</td>
                <td>AOL browser (AOL desktop)</td>
                <td>Win XP</td>
                <td class="center">6</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Firefox 1.0</td>
                <td>Win 98+ / OSX.2+</td>
                <td class="center">1.7</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Firefox 1.5</td>
                <td>Win 98+ / OSX.2+</td>
                <td class="center">1.8</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Firefox 2.0</td>
                <td>Win 98+ / OSX.2+</td>
                <td class="center">1.8</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Firefox 3.0</td>
                <td>Win 2k+ / OSX.3+</td>
                <td class="center">1.9</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Camino 1.0</td>
                <td>OSX.2+</td>
                <td class="center">1.8</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Camino 1.5</td>
                <td>OSX.3+</td>
                <td class="center">1.8</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Netscape 7.2</td>
                <td>Win 95+ / Mac OS 8.6-9.2</td>
                <td class="center">1.7</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Netscape Browser 8</td>
                <td>Win 98SE+</td>
                <td class="center">1.7</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Netscape Navigator 9</td>
                <td>Win 98+ / OSX.2+</td>
                <td class="center">1.8</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Mozilla 1.0</td>
                <td>Win 95+ / OSX.1+</td>
                <td class="center">1</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Mozilla 1.1</td>
                <td>Win 95+ / OSX.1+</td>
                <td class="center">1.1</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Mozilla 1.2</td>
                <td>Win 95+ / OSX.1+</td>
                <td class="center">1.2</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Mozilla 1.3</td>
                <td>Win 95+ / OSX.1+</td>
                <td class="center">1.3</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Mozilla 1.4</td>
                <td>Win 95+ / OSX.1+</td>
                <td class="center">1.4</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Mozilla 1.5</td>
                <td>Win 95+ / OSX.1+</td>
                <td class="center">1.5</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Mozilla 1.6</td>
                <td>Win 95+ / OSX.1+</td>
                <td class="center">1.6</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Mozilla 1.7</td>
                <td>Win 98+ / OSX.1+</td>
                <td class="center">1.7</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Mozilla 1.8</td>
                <td>Win 98+ / OSX.1+</td>
                <td class="center">1.8</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Seamonkey 1.1</td>
                <td>Win 98+ / OSX.2+</td>
                <td class="center">1.8</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Epiphany 2.20</td>
                <td>Gnome</td>
                <td class="center">1.8</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Webkit</td>
                <td>Safari 1.2</td>
                <td>OSX.3</td>
                <td class="center">125.5</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Webkit</td>
                <td>Safari 1.3</td>
                <td>OSX.3</td>
                <td class="center">312.8</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Webkit</td>
                <td>Safari 2.0</td>
                <td>OSX.4+</td>
                <td class="center">419.3</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Webkit</td>
                <td>Safari 3.0</td>
                <td>OSX.4+</td>
                <td class="center">522.1</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Webkit</td>
                <td>OmniWeb 5.5</td>
                <td>OSX.4+</td>
                <td class="center">420</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Webkit</td>
                <td>iPod Touch / iPhone</td>
                <td>iPod</td>
                <td class="center">420.1</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Webkit</td>
                <td>S60</td>
                <td>S60</td>
                <td class="center">413</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Presto</td>
                <td>Opera 7.0</td>
                <td>Win 95+ / OSX.1+</td>
                <td class="center">-</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Presto</td>
                <td>Opera 7.5</td>
                <td>Win 95+ / OSX.2+</td>
                <td class="center">-</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Presto</td>
                <td>Opera 8.0</td>
                <td>Win 95+ / OSX.2+</td>
                <td class="center">-</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Presto</td>
                <td>Opera 8.5</td>
                <td>Win 95+ / OSX.2+</td>
                <td class="center">-</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Presto</td>
                <td>Opera 9.0</td>
                <td>Win 95+ / OSX.3+</td>
                <td class="center">-</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Presto</td>
                <td>Opera 9.2</td>
                <td>Win 88+ / OSX.3+</td>
                <td class="center">-</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Presto</td>
                <td>Opera 9.5</td>
                <td>Win 88+ / OSX.3+</td>
                <td class="center">-</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Presto</td>
                <td>Opera for Wii</td>
                <td>Wii</td>
                <td class="center">-</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Presto</td>
                <td>Nokia N800</td>
                <td>N800</td>
                <td class="center">-</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Presto</td>
                <td>Nintendo DS browser</td>
                <td>Nintendo DS</td>
                <td class="center">8.5</td>
                <td class="center">C/A<sup>1</sup></td>
            </tr>
            <tr class="gradeC">
                <td>KHTML</td>
                <td>Konqureror 3.1</td>
                <td>KDE 3.1</td>
                <td class="center">3.1</td>
                <td class="center">C</td>
            </tr>
            <tr class="gradeA">
                <td>KHTML</td>
                <td>Konqureror 3.3</td>
                <td>KDE 3.3</td>
                <td class="center">3.3</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>KHTML</td>
                <td>Konqureror 3.5</td>
                <td>KDE 3.5</td>
                <td class="center">3.5</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeX">
                <td>Tasman</td>
                <td>Internet Explorer 4.5</td>
                <td>Mac OS 8-9</td>
                <td class="center">-</td>
                <td class="center">X</td>
            </tr>
            <tr class="gradeC">
                <td>Tasman</td>
                <td>Internet Explorer 5.1</td>
                <td>Mac OS 7.6-9</td>
                <td class="center">1</td>
                <td class="center">C</td>
            </tr>
            <tr class="gradeC">
                <td>Tasman</td>
                <td>Internet Explorer 5.2</td>
                <td>Mac OS 8-X</td>
                <td class="center">1</td>
                <td class="center">C</td>
            </tr>
            <tr class="gradeA">
                <td>Misc</td>
                <td>NetFront 3.1</td>
                <td>Embedded devices</td>
                <td class="center">-</td>
                <td class="center">C</td>
            </tr>
            <tr class="gradeA">
                <td>Misc</td>
                <td>NetFront 3.4</td>
                <td>Embedded devices</td>
                <td class="center">-</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeX">
                <td>Misc</td>
                <td>Dillo 0.8</td>
                <td>Embedded devices</td>
                <td class="center">-</td>
                <td class="center">X</td>
            </tr>
            <tr class="gradeX">
                <td>Misc</td>
                <td>Links</td>
                <td>Text only</td>
                <td class="center">-</td>
                <td class="center">X</td>
            </tr>
            <tr class="gradeX">
                <td>Misc</td>
                <td>Lynx</td>
                <td>Text only</td>
                <td class="center">-</td>
                <td class="center">X</td>
            </tr>
            <tr class="gradeC">
                <td>Misc</td>
                <td>IE Mobile</td>
                <td>Windows Mobile 6</td>
                <td class="center">-</td>
                <td class="center">C</td>
            </tr>
            <tr class="gradeC">
                <td>Misc</td>
                <td>PSP browser</td>
                <td>PSP</td>
                <td class="center">-</td>
                <td class="center">C</td>
            </tr>
            <tr class="gradeU">
                <td>Other browsers</td>
                <td>All others</td>
                <td>-</td>
                <td class="center">-</td>
                <td class="center">U</td>
            </tr>
<?php endfor; ?>
        </tbody>
    </table>
      
      <hr>

      <footer>
        <p>Footer Placement</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
         ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/bootstrap-datatables.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').dataTable( {
                "sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
                "sPaginationType": "bootstrap",
                "oLanguage": {
                    <?php if ($lang=="english"): ?>
                    "sLengthMenu": "_MENU_<span class=\"add-on\">records per page.</span>",
                    <?php else: ?>
                    "sLengthMenu": "_MENU_<span class=\"add-on\">enregistrements par page.</span>",
                    "sInfo": "Affichage de l'élement _START_ à _END_ sur _TOTAL_ éléments",
                    <?php endif; ?>
                    "sSearch": ""
                }
            } );
            $('.dataTables_length label').attr("class", "input-append");
            $('.dataTables_filter input')
                <?php if ($lang=="english"): ?>.attr("placeholder", "Search");
                <?php else: ?>.attr("placeholder", "Recherche");
            $('ul .prev').html("<a href=\"#\">← Précédent</a>");
            $('ul .next').html("<a href=\"#\">Suivant →</a>");
                <?php endif; ?>
            $('.dataTables_filter label').attr({"class": "input-prepend", "style" : "margin-bottom: 10px;"})
                .prepend('<span class="add-on"><i class="icon-search"></i></span>');
        } );
    </script>
    
  </body>
</html>
