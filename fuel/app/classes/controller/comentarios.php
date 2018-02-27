php<?php 
use \Firebase\JWT\JWT;

class Controller_Comentarios extends Controller_Base 
{   
    public function post_add()
    {
        try {
            if ( ! isset($_POST['idCancion'])) 
            {
                $json = $this->response(array(
                    'code' => 400,
                    'message' => 'parametro incorrecto, se necesita que el parametro de la cancion'
                ));

                return $json;
            }

            if ( ! isset($_POST['comentario'])) 
            {
                $json = $this->response(array(
                    'code' => 400,
                    'message' => 'parametro incorrecto, se necesita que el parametro de la lista'
                ));

                return $json;
            }

            $input = $_POST;
            $add = new Model_Comentarios();
            $add->id_cancion = $input['idCancion'];
            $add->comentario = $input['comentario'];
            $add->save();

            $json = $this->response(array(
                'code' => 201,
                'message' => 'comentario añadido',
                'data' => $add
            ));

            return $json;
        } 
        catch (Exception $e) 
        {
            $json = $this->response(array(
                'code' => 500,
                'message' => 'error interno del servidor',
            ));

            return $json;
        }        
    }

    public function post_delete()
    {
    	try{
    		if ( ! isset($_POST['id'])) 
            {
                $json = $this->response(array(
                    'code' => 400,
                    'message' => 'parametro incorrecto, se necesita que el parametro id'
                ));

                return $json;
            }
	        $comentario = Model_Comentarios::find($_POST['id']);
	        $comentario->delete();

	        $json = $this->response(array(
	            'code' => 200,
	            'message' => 'cometario borrado',
	            'data' => $comentario
	        ));

	        return $json;
        } 
        catch (Exception $e) 
        {
            $json = $this->response(array(
                'code' => 500,
                'message' => 'error interno del servidor',
                'data' => null
            ));

            return $json;
        }
    }

    public function get_comentarios()
    {
        try{
            $comentario = Model_Comentarios::find('all');

            $json = $this->response(array(
                'code' => 200,
                'message' => 'Mostrando comentarios',
                'name' => $comentario
            ));

            return $json;  
        } 
        catch (Exception $e) 
        {
            $json = $this->response(array(
                'code' => 500,
                'message' => 'error interno del servidor',
                'data' => null
            ));

            return $json;
        }
    }

    public function post_modify()
    {
        try {
            if ( ! isset($_POST['idComentario'])) 
            {
                $json = $this->response(array(
                    'code' => 400,
                    'message' => 'parametro incorrecto, se necesita que el parametro se llame id'
                ));

                return $json;
            }

            if ( ! isset($_POST['comentario'])) 
            {
                $json = $this->response(array(
                    'code' => 400,
                    'message' => 'parametro incorrecto, se necesita que el parametro comentario'
                ));

                return $json;
            }

            $input = $_POST;
            $comentario = Model_Comentarios::find($input['idComentario']);
            $comentario->comentario = $input['comentario'];
            $comentario->save();

            $json = $this->response(array(
                'code' => 200,
                'message' => 'comentario modificado',
                'name' => $comentario
            ));

            return $json;   
        } 
        catch (Exception $e) 
        {
            $json = $this->response(array(
                'code' => 500,
                'message' => 'error interno del servidor',
                'data' => null
            ));

            return $json;
        }    
    }
}
