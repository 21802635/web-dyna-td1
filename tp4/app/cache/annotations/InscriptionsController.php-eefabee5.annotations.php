<?php

return array(
  '#namespace' => 'controllers',
  '#uses' => array (
),
  '#traitMethodOverrides' => array (
  'controllers\\InscriptionsController' => 
  array (
  ),
),
  'controllers\\InscriptionsController::index' => array(
    array('#name' => 'get', '#type' => 'Ubiquity\\annotations\\router\\GetAnnotation', "_default","name"=>"Home")
  ),
  'controllers\\InscriptionsController::Bouton' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "Inscription")
  ),
  'controllers\\InscriptionsController::loadView' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "/do/Inscription")
  ),
);

