<?php


return [
    'acl' => 'user',
    'ent_name' => 'user',
    'bc' => [],
    'list'=> [
        'default' => [
            'title'=>'User list',
            'multiselect' => true,
            'columns'=>[
                [ "data"=> "id", "orderable"=>true],
                [ "data"=> "email", "orderable"=>true, 'title'=>'Email'],
                [ "data"=> "first_name", "orderable"=>true, 'title'=>'First name'],
                [ "data"=> "last_name", "orderable"=>true, 'title'=>'Last name'],
                [ "data"=> "acl_role_title", "orderable"=>true, 'title'=>'Role']
            ],
            'buttons'=> [
                'mass_delete' =>true,
                'single_edit' => true,
                'single_delete' => true
            ],
        ]


    ],


    'fields'=>[

        'email' =>
            [
                'type'=>'text',
                'required'=>1,
                'title' => 'Email'
            ],
        'password' =>
            [
                'type'=>'text',
                'title' => 'Password',
                'value' => "",
                'disable_autocomplete' => true
            ],

        'first_name' =>
            [
                'type'=>'text',
                'required'=>1,
                'title' => 'First name'
            ],

        'last_name' =>
            [
                'type'=>'text',
                'required'=>1,
                'title' => 'Last name'
            ],
        'acl_role' =>
            [
                'type' => \Skvn\Crud\CrudConfig::FIELD_SELECT,
                'required' => 1,
                'method_options' => "getAclRoleOptions",
                'title' => "Role"
            ],


    ],
];