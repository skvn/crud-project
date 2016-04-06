<?php 
 return array (
  'name' => 'LocalText',
  'ent_name' => 'текст',
  'list' => 
  array (
    'default' => 
    array (
      'title' => 'Список текстов',
      'description' => 'Локальные тексты',
      'multiselect' => true,
      'columns' => 
      array (
        0 => 
        array (
          'data' => 'name',
          'title' => 'Название',
          'orderable' => false,
        ),
      ),
      'filter' => 
      array (
      ),
      'edit_tab' => 1,
      'buttons' => 
      array (
        'single_edit' => true,
        'single_delete' => true,
        'mass_delete' => true,
      ),
    ),
  ),
  'form' => 
  array (
    0 => 'name',
    1 => 'alias',
    2 => 'body',
    3 => 'docs',
  ),
  'fields' => 
  array (
    'name' => 
    array (
      'type' => 'text',
      'title' => 'Название',
      'hint_default' => '',
      'required' => 0,
      'editable' => 1,
    ),
    'alias' => 
    array (
      'type' => 'text',
      'title' => 'alias',
      'hint_default' => '',
      'required' => 0,
      'editable' => 1,
    ),
    'body' => 
    array (
      'type' => 'textarea',
      'title' => 'Текст',
      'hint_default' => '',
      'editor' => 1,
      'editor_type' => 'summernote',
      'required' => 0,
      'editable' => 1,
    ),
    'docs' => 
    array (
      'editable' => 1,
      'type' => 'multi_file',
      'multi' => 1,
      'name' => 'docs',
      'title' => 'Документы',
      'hint_default' => '',
    ),
  ),
);