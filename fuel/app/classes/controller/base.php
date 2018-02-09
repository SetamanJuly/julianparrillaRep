<?php 
use \Firebase\JWT\JWT;

class Controller_Base extends Controller_Rest 
{   
    protected function keyName(){
        $_key = "jJksvTuOWxLqISmFLDOTl3hcXYz5R8Zgg3Ilngt+tIBe3By5zv6AHfB+1g1maJGhGSs0XtOXzS3vnnN2aHkDMG0gi3YPioxFyLXPiNnYM1Q8toBJGun9d/zzyuckDnrqY60irvehO/oKmi72VkhvVClLvJeO92imTqX8tDr0WsnRCIq9+102qBOPSojK2PCYLN1VBnJg3uITYqYcgray6CGX+Ulsy6ka0lAD7kWMNJ4Ddnjj3aVxqseTOWe9Nuuc";
        return $_key;
    }

    protected function checkToken()
    {
        $headers = apache_request_headers();
        $token = $headers['Authorization'];    
        $key = self::keyName();    
        $tokenDecodificado = JWT::decode($token, $key, array('HS256'));

        return $tokenDecodificado->id;
    }

    protected function createToken($name, $pass, $id)
    {
        $token = array(
            "name" => $name,
            "pass" => $pass,
            "id" => $id,
            "logged" => true
        );
        
        $key = self::keyName(); 
        $jwt = JWT::encode($token, $key);

        return $jwt;  
    }

    public function post_createRol()
    {
        try {
            if ( ! isset($_POST['descripcion'])) 
            {
                $json = $this->response(array(
                    'code' => 400,
                    'message' => 'parametro incorrecto, se necesita que el parametro que describa el rol',
                    'data' => null
                ));

                return $json;
            }

            $input = $_POST;
            $rol = new Model_Roles();
            $rol->descripcion = $input['descripcion'];
            $rol->save();

            $json = $this->response(array(
                'code' => 201,
                'message' => 'rol creado',
                'data' => $rol
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

    public function post_firstConfig(){
        $checkDataBase = Model_Users::find('all');
        if ($checkDataBase == null){
            $rol = new Model_Roles();
            $rol->descripcion = "administrator";
            $rol->save();
            $user = new Model_Users();
            $user->name = "admin";
            $user->pass = "1234";
            $user->email = "admin@admin.es";
            $user->id_rol = "1";
            $user->save();
            $configDone = true;

            $json = $this->response(array(
                'code' => 200,
                'message' => 'Primera configuración finalizada',
                'data' => null
            ));
            return $json;
        }else{
            $json = $this->response(array(
                'code' => 400,
                'message' => 'No es necesario hacer la primera configuración',
                'data' => null
            ));
            return $json;
        }
    }
}
