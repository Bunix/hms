<?php
require 'vendor/autoload.php';
require 'config.inc.php';

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Slim\Middleware\HttpBasicAuthentication\AuthenticatorInterface;

class HMSAuthenticator implements AuthenticatorInterface{
    public function __invoke(array $arguments) {

        $users = new Users();

        $data['username'] = trim($arguments['user']);
        $data['password'] = md5(trim($arguments['password']));

        $result = $users->validate($data);

        if(!$result) {
            return false;
        }

        $client = $users->getUserDetails($result['id']);

        if($client['id'] < 1) 
            return false;

        return true;

    }
}

$app = new \Slim\App(array("settings" => $config));

$app->add(new \Slim\Middleware\HttpBasicAuthentication(array(
    "path" => "/",
    "realm" => "Protected",
    "secure" => false,
    "relaxed" => ["localhost", "127.0.0.1"],
    "authenticator" => new HMSAuthenticator(),
    "error" => function ($request, $response, $arguments) {
        $data = [];
        $data["status"] = "error";
        $data["message"] = $arguments["message"];
        return $response->write(json_encode($data, JSON_UNESCAPED_SLASHES));
    }
)));



$app->get('/patients', function (Request $request, Response $response) {

	$patients = new Patients();
    $patients = $patients->getAll();

    if($patients) {
        $data_response = array('success' => TRUE, 'patients_list' => $patients);
    } else{
        $data_response = array('success' => FALSE);
    }
    

    //make response
    $response = $response->withJson($data_response);

    //send response
    return $response;
});

$app->get('/patient/{id}', function (Request $request, Response $response) {

    global $DB;

    $patient_no = $request->getAttribute('id');

    $patients = new Patients();
    $patient = $patients->getPatient($patient_no);

    if($patient['patient_no'] < 1)
    {
        $newResponse = $response->withStatus(404);
        $newResponse->getBody()->write(json_encode(array('success' => FALSE,'errMsg'=>'Invalid patient.')));
        return $newResponse;
    }

    $data_response = array('success' => TRUE, 'patient' => $patient);

    //make response
    $response = $response->withJson($data_response);

    //send response
    return $response;
});



$app->get('/room_categories', function (Request $request, Response $response) {

    $category = new Room_category();
    $categories = $category->getAll();

    if($categories) {
        $data_response = array('success' => TRUE, 'room_category' => $categories);
    } else{
        $data_response = array('success' => FALSE);
    }
    

    //make response
    $response = $response->withJson($data_response);

    //send response
    return $response;
});

$app->get('/room_category/{id}', function (Request $request, Response $response) {

    global $DB;

    $category_id = $request->getAttribute('id');

    $room_category = new Room_category();
    $roomcategory = $room_category->getRoom($category_id);

    if($roomcategory['category_id'] < 1)
    {
        $newResponse = $response->withStatus(404);
        $newResponse->getBody()->write(json_encode(array('success' => FALSE,'errMsg'=>'Invalid category.')));
        return $newResponse;
    }

    $data_response = array('success' => TRUE, 'room_category' => $roomcategory);

    //make response
    $response = $response->withJson($data_response);

    //send response
    return $response;
});

$app->post('/room_category/create', function (Request $request, Response $response) {

    global $DB;

    $json = $request->getBody();
    $data = json_decode($json, true);

    $room_category = new Room_category();

    $data['category_name'] = $data['category_name'];
    $data['category_desc'] = $data['category_desc'];

    $category = $room_category->saveRoom($data);
    if($category) {
        $get_room = $room_category->getRoom($category);
        $data_response = array('success' => TRUE,'room_category' => $get_room);
    } else {
        $data_response = array('success' => FALSE, 'errMsg' => 'Their was an error in saving the room category.');
    }

    //make response
    $response = $response->withJson($data_response);

    //send response
    return $response;
});

$app->put('/room_category/{id}', function (Request $request, Response $response) {

    global $DB;

    $json = $request->getBody();
    $data = json_decode($json, true);

    $id = $request->getAttribute('id');

    $room_category = new Room_category();

    $data['id'] = $id;

    $roomcategory = $room_category->getRoom($data['id']);

    if($roomcategory['category_id'] < 1)
    {
        $newResponse = $response->withStatus(404);
        $newResponse->getBody()->write(json_encode(array('success' => FALSE,'errMsg'=>'Invalid category.')));
        return $newResponse;
    }

    $category = $room_category->updateRoom($data);
    if($category) {
        $get_room = $room_category->getRoom($id);
        $data_response = array('success' => TRUE,'room_category' => $get_room);
    } else {
        $data_response = array('success' => FALSE, 'errMsg' => 'Their was an error in updating the room category.');
    }

    //make response
    $response = $response->withJson($data_response);

    //send response
    return $response;
});

$app->run();