<?php

use League\Fractal;
use League\Fractal\Manager;
use League\Fractal\Serializer\ArraySerializer;

class ApiController extends \BaseController{
    
    public function getManager()
    {
        $manager = new Manager();
        $manager->setSerializer(new ArraySerializer());
        return $manager;
    }

    public function createReponseData($resource){
        return $this->getManager()->createData($resource)->toArray();
    }

    /**
     * @var int
     */
    protected $statusCode = 200; //200-ok

    /**
     * @param $statusCode
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * @param null $statusCode
     * @return int|null
     */
    public function getStatusCode($statusCode=null)
    {
        return $this->statusCode === 200 && $statusCode !==null ? $statusCode : $this->statusCode;
    }


    /**
     * @param string $message
     * @param array $data
     * @param int $statusCode
     * @return mixed
     */
    public function respondWithError($message="Something bad happened", $data=[], $statusCode=200)
	{
		return Response::json([
			'error' => [$data],
			'message' => $message,
			'status_code' => $this->getStatusCode($statusCode)
		], $this->getStatusCode($statusCode));
	}


    /**
     * @param string $message
     * @return mixed
     */
    public function responseNotFound($message="Not Found")
    {
        return $this->setStatusCode(404)->respondWithError($message);
    }


    /**
     * the third parameter is for adding meta data like total, pagination and page num
     * @param $data
     * @param string $message
     * @param array $rdata
     * @return \Illuminate\Http\JsonResponse
     */
    public function response($data, $message = "Successful", $rdata=[])
    {
        $response = [
            'message' => $message,
            'status_code' => $this->getStatusCode(),
            'data' => $data
        ];

        $response = array_merge($response, $rdata);

        return Response::json($response);
    }

} 