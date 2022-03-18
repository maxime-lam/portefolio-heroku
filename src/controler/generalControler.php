<?php
require_once '../src/lib/helperControler.php';


/**
 * @return void
 *
 * permet de faire appel a la fonction render view avec les bon argument
 * en vue d'afficher le contenu demander
 */
function indexAction():void{
    $data['title'] = "porte-folio de maxime lameirinhas";
    $data['titlePage'] = "Bienvenue sur mon porte-folio";

    ob_start();
    require_once '../template/general/homeContent.php';
    $data['output'] = ob_get_clean();

    renderView($data);
}

?>
