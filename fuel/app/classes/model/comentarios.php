<?php 

class Model_Comentarios extends Orm\Model
{
    protected static $_table_name = 'comentarios';
    protected static $_primary_key = array('id');
    protected static $_properties = array(
        'id', // both validation & typing observers will ignore the PK
        'comentario' => array(
            'data_type' => 'varchar'   
        ),
        'id_cancion' => array(
            'data_type' => 'varchar'   
        )
    );

    protected static $_belongs_to = array(
    'comentario' => array(
        'key_from' => 'id_cancion',
        'model_to' => 'Model_Cancion',
        'key_to' => 'id',
        'cascade_save' => false,
        'cascade_delete' => false,
        )
    );
}
