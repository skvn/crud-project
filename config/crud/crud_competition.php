<?php 
 return array (
  'name' => 'Competition',
  'ent_name' => 'Compet',
  'list' => 
  array (
    'default' => 
    array (
      'title' => 'Comp list',
      'description' => 'any stuff',
      'columns' => 
      array (
        0 => 
        array (
          'data' => 'name',
          'title' => 'Title nah',
          'orderable' => false,
        ),
      ),
      'filter' => 
      array (
      ),
      'buttons' => 
      array (
      ),
    ),
  ),
  'form' => 
  array (
    0 => 'name',
  ),
  'fields' => 
  array (
    'name' => 
    array (
      'type' => 'text',
      'title' => 'Title',
      'hint_default' => '',
      'required' => 0,
      'editable' => 1,
    ),
  ),
);