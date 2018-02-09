<?php

namespace Fuel\Migrations;

class Users
{
    function up()
    {
        \DBUtil::create_table('users', 
            array(
            'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
            'name' => array('type' => 'text', 'null' => true),
            'email' => array('type' => 'text', 'null' => true),
            'id_device' => array('type' => 'text'),
            'profilePic' => array('type' => 'text', 'null' => true),
            'pass' => array('type' => 'text', 'null' => true),
            'descripcion' => array('type' => 'text'),
            'birthdate' => array('type' => 'int'),
            'x' => array('type' => 'int'),
            'y' => array('type' => 'int'),
            'ciudad' => array('type' => 'text'),
            'id_rol' => array('type' => 'int', 'null' => true)
            ), 
            array('id'), false, 'InnoDB', 'utf8_general_ci',
            array(
                array(
                    'constraint' => 'foreignkeyUsuariosARoles',
                    'key' => 'id_rol',
                    'reference' => array(
                        'table' => 'roles',
                        'column' => 'id',
                    ),
                    'on_update' => 'RESTRICT',
                    'on_delete' => 'RESTRICT'
                )
            )     
        );

        \DB::query("ALTER TABLE `users` ADD UNIQUE (`id`)",
            "ALTER TABLE `users` ADD UNIQUE (`email`)")->execute();
    }

    function down()
    {
       \DBUtil::drop_table('users');
    }
}
