<?php
spl_autoload_register(function ($nomClasse) {
    include_once __DIR__."/classes/".$nomClasse.".php";
});
