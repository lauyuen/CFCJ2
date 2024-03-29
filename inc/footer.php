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
