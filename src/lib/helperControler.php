<?php


/**
 * @return void
 *
 * permet de rendre la vue demander
 */
function renderView(array $data):void{
    require_once '../template/layout/header.php';
    require_once '../template/layout/menu.php';
    require_once '../template/layout/mainContent.php';
    require_once '../template/layout/footer.php';
}

