<?php
return array (
  'reader' => 
  array (
    'type' => 2,
    'description' => 'Only view dispenserapp',
    'bizRule' => '',
    'data' => '',
    'assignments' => 
    array (
      2002 => 
      array (
        'bizRule' => NULL,
        'data' => NULL,
      ),
    ),
  ),
  'writer' => 
  array (
    'type' => 2,
    'description' => 'Create and edit',
    'bizRule' => '',
    'data' => '',
    'children' => 
    array (
      0 => 'reader',
    ),
  ),
  'admin' => 
  array (
    'type' => 2,
    'description' => 'Admin',
    'bizRule' => '',
    'data' => '',
    'children' => 
    array (
      0 => 'reader',
      1 => 'writer',
    ),
    'assignments' => 
    array (
      1000 => 
      array (
        'bizRule' => NULL,
        'data' => NULL,
      ),
      5175 => 
      array (
        'bizRule' => NULL,
        'data' => NULL,
      ),
      5173 => 
      array (
        'bizRule' => NULL,
        'data' => NULL,
      ),
    ),
  ),
);
