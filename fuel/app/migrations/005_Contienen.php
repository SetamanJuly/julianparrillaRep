<?php

namespace Fuel\Migrations;

class Contienen
{

    function up()
    {
        \DBUtil::create_table('contiene', 
            array(
            'id_lista' => array('type' => 'int', 'null' => false),
            'id_cancion' => array('type' => 'int', 'null' => false),
            ), 
            array('id_lista','id_cancion'), false, 'InnoDB', 'utf8_general_ci',
            array(
		        array(
		            'constraint' => 'foreignkeyListaACancion',
		            'key' => 'id_lista',
		            'reference' => array(
		                'table' => 'list',
		                'column' => 'id',
		            ),
		            'on_update' => 'RESTRICT',
		            'on_delete' => 'RESTRICT'
		        ),
                array(
                    'constraint' => 'foreignkeyCancionALista',
                    'key' => 'id_cancion',
                    'reference' => array(
                        'table' => 'cancion',
                        'column' => 'id',
                    ),
                    'on_update' => 'RESTRICT',
                    'on_delete' => 'RESTRICT'
                )
			)
        );
    }

    function down()
    {
       \DBUtil::drop_table('contiene');
    }
}
