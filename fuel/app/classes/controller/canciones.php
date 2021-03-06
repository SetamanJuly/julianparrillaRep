<?php 
use \Firebase\JWT\JWT;

class Controller_Canciones extends Controller_Base 
{   
    public function post_create()
    {
        try {
            if ( ! isset($_POST['name'])) 
            {
                $json = $this->response(array(
                    'code' => 400,
                    'message' => 'parametro incorrecto, se necesita que el parametro se llame name',
                    'data' => null
                ));

                return $json;
            }

            if ( ! isset($_POST['urlS'])) 
            {
                $json = $this->response(array(
                    'code' => 400,
                    'message' => 'parametro incorrecto, se necesita que el parametro url',
                    'data' => null
                ));

                return $json;
            }

            if ( ! isset($_POST['artista'])) 
            {
                $json = $this->response(array(
                    'code' => 400,
                    'message' => 'parametro incorrecto, se necesita que el parametro artista',
                    'data' => null
                ));

                return $json;
            }


            $check = Model_Cancion::find('all', ['where' => ['urlSong' => $_POST['urlS']]]);
            
            $boolTested;

            if ($check == null){
                $boolTested = false;
            }else{
                $boolTested = true;
            }

            if ($boolTested == false){
                $input = $_POST;
                $song = new Model_Cancion();
                $song->nameSong = $input['name'];
                $song->urlSong = $input['urlS'];
                $song->nameArtist = $input['artista'];
                $song->playsCount = 0;
                $song->save();

                $json = $this->response(array(
                    'code' => 201,
                    'message' => 'Cancion creada',
                    'data' => $song
                ));

                return $json;
            }else{
                $json = $this->response(array(
                    'code' => 401,
                    'message' => 'La cancion ya existe',
                    'data' => null
                ));

                return $json;
            }

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
    	try{
	        if ( ! isset($_POST['nameSong'])) 
	        {
	            $json = $this->response(array(
	                'code' => 400,
	                'message' => 'parametro incorrecto, se necesita que el parametro se llame name',
	                'data' => null
	            ));

	            return $json;
	        }

	        if ( ! isset($_POST['urlSong'])) 
	        {
	            $json = $this->response(array(
	                'code' => 400,
	                'message' => 'parametro incorrecto, se necesita que el parametro url',
	                'data' => null
	            ));

	            return $json;
	        }

	        if ( ! isset($_POST['idsong'])) 
	        {
	            $json = $this->response(array(
	                'code' => 400,
	                'message' => 'parametro incorrecto, se necesita que el parametro id',
	                'data' => null
	            ));

	            return $json;
	        }

	        $input = $_POST;
	        $song = Model_Cancion::find($input['idsong']);
	        $song->nameSong = $input['nameSong'];
	        $song->urlSong = $input['urlSong'];
	        $song->save();

	        $json = $this->response(array(
	            'code' => 200,
	            'message' => 'cancion modificada',
	            'data' => $song->nameSong
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

    public function get_playOneSong()
    {
    	try{
    	   	$tokenDecoded = self::checkToken();
	    	if ($tokenDecoded != null){
		    	if ( ! isset($_GET['id'])) 
		        {
		            $json = $this->response(array(
		                'code' => 400,
		                'message' => 'parametro incorrecto, se necesita que el parametro id valido',
		                'data' => null
		            ));

		            return $json;
		        }else{
			        $song = Model_Cancion::find($_GET['id']);
			        if(empty($song)){
			        	$json = $this->response(array(
				            'code' => 400,
				            'message' => 'Canción solicitada no existe',
				            'data' => null
				        ));

				        return $json; 
			        }else{
			        	$sumador = $song->playsCount + 1;
				        $song->playsCount = $sumador;
				        $song->save();

				        $listToAdd = Model_List::find('all', ['where' => ['id_user' =>$tokenDecoded, 'systemList' => 1]]);
				        $songToAdd = Model_Cancion::find('all', ['where' => ['id' =>$_GET['id']]]);
				        $dataList = Arr::reindex($listToAdd);
				        $songList = Arr::reindex($songToAdd);

						$checkIfExist = Model_Contiene::find([$songList[0]->id, $dataList[0]->id]);

						if ($checkIfExist != null){
					    	$checkIfExist->delete();
					    }

						$add = new Model_Contiene();
	            		$add->id_cancion = $songList[0]->id;
	            		$add->id_lista = $dataList[0]->id;
	            		$add->createdAt = time();
	            		$add->save();

				        $json = $this->response(array(
				            'code' => 200,
				            'message' => 'Mostrando cancion solicitada',
				            'data' => $checkIfExist
				        ));

				        return $json;  
			    	}
			    }
			}else{
				$json = $this->response(array(
				            'code' => 200,
				            'message' => 'Autenticacion fallida',
				            'data' => $song
				        ));
				return $json; 
			}
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

    public function get_songs(){
		$song = Model_Cancion::find('all');

        $json = $this->response(array(
            'code' => 200,
            'message' => 'mostrando todas las canciones',
            'data' => ["songs" => arr::reindex($song)]
        ));

        return $json; 
    }

    public function post_delete()
    {
    	try{
	    	if ( ! isset($_POST['id'])) 
		        {
	            $json = $this->response(array(
	                'code' => 400,
	                'message' => 'parametro incorrecto, se necesita que el parametro id valido',
	                'data' => null
	            ));

	            return $json;
	        }else{
			    $song = Model_Cancion::find($_POST['id']);
			    $song->delete();

			    $json = $this->response(array(
			        'code' => 200,
			        'message' => 'cancion borrado',
			        'name' => $song
			    ));

			    return $json;
			}
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

    public function get_views()
   	{
		$song = Model_Cancion::find('all',array('order_by' => array('playsCount' => 'desc')));

        $json = $this->response(array(
            'code' => 200,
            'message' => 'mostrando todas las canciones',
            'data' => Arr::reindex($song)
        ));

        return $json; 
   	} 
}
