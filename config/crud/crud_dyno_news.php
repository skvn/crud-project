<?php 
 return array (
  'name' => 'DynoNews',
  'ent_name' => 'News',
  'timestamps' => true,
  'timestamps_type' => 'int',
  'authors' => true,
  'list' => 
  array (
    'default' => 
    array (
      'title' => 'News list',
      'description' => 'blah blah',
      'multiselect' => true,
      'columns' => 
      array (
      ),
      'filter' => 
      array (
        0 => 'default_filter_title',
      ),
      'edit_tab' => 1,
      'buttons' => 
      array (
      ),
    ),
    'list2' => 
    array (
      'title' => 'Another news list',
      'description' => 'Another news list lala',
      'columns' => 
      array (
      ),
      'filter' => 
      array (
        0 => 'list2_filter_title',
      ),
      'buttons' => 
      array (
      ),
    ),
  ),
  'form' => 
  array (
  ),
  'fields' => 
  array (
    'default_filter_title' => 
    array (
      'type' => 'text',
      'title' => 'Title',
      'column' => 'title',
    ),
    'list2_filter_title' => 
    array (
      'type' => 'text',
      'title' => 'Title',
      'column' => 'title',
    ),
  ),
);