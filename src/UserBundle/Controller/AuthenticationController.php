<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthenticationController extends Controller
{
    public function loginAction(Request $request) {
//        $request_data = $request->query->get('userName');      //get
////        $request_data = $request->request->get('value');  //post

        $userName = $request->query->get('userName');
        $password = $request->query->get('password');


        // process
        $conn = $this->get('database_connection');
        $stmt = $conn->prepare('SELECT * FROM login WHERE User_Username = :userName AND Password = :password ;');
        //$hashPassword = md5($password);
        $stmt->bindValue(':userName', $userName);
        $stmt->bindValue(':password', $password);
        $stmt->execute();
        $result = $stmt->fetchAll();

        $response = new Response(json_encode(array(
            'value' => $stmt->rowCount(),
            'result' => $result
        )));
        $response->headers->set('Content-type', 'application/json');
        return $response;
    }

    public function registerAction(Request $request) {

        $userNameR = $request->query->get('userNameR');
        $nameR = $request->query->get('nameR');
        $emailR = $request->query->get('emailR');
        $passwordR = $request->query->get('passwordR');

        // create prepared statements for USer table
        $conn = $this->get('database_connection');
        $stmt = $conn->prepare('INSERT INTO user (Username,Email, Name ) VALUES (:userNameR ,:emailR, :nameR);');
        $stmt->bindValue(':userNameR', $userNameR);
        $stmt->bindValue(':nameR', $nameR);
        $stmt->bindValue(':emailR', $emailR);
        $stmt->execute();

        //create prepared statements for login table
        $stmt = $conn->prepare('INSERT INTO login (User_Username,Password) VALUES (:userNameR ,:passwordR);');
        //$hashPassword = md5($passwordR);
        $stmt->bindValue(':userNameR', $userNameR);
        $stmt->bindValue(':passwordR', $passwordR);
        $stmt->execute();


        $response = new Response(json_encode(array(
            'value' => "success"
        )));
        $response->headers->set('Content-type', 'application/json');
        return $response;
    }

    public function registerCorporateAction(Request $request) {

        $userNameR = $request->query->get('userNameR');
        $telephone = $request->query->get('telephone');
        $Address = $request->query->get('Address');
        $District = $request->query->get('District');
        $account_id = $request->query->get('account_id');
        $description = $request->query->get('description');


        // create prepared statements for corporate account table
        $conn = $this->get('database_connection');
        $stmt = $conn->prepare('INSERT INTO corporate_account (User_Username,Telephone , Address,District,account_id, description) VALUES (:userNameR , :telephone, :Address, :District , :account_id , :description);');
        $stmt->bindValue(':userNameR', $userNameR);
        $stmt->bindValue(':telephone', $telephone);
        $stmt->bindValue(':Address', $Address);
        $stmt->bindValue(':District', $District);
        $stmt->bindValue(':account_id', $account_id);
        $stmt->bindValue(':description', $description);
        $stmt->execute();


        $response = new Response(json_encode(array(
            'value' => $stmt->rowCount()
        )));
        $response->headers->set('Content-type', 'application/json');
        return $response;
    }

    public function registerDriverAction(Request $request) {

        $vehicle = $request->query->get('vehicle');
        $capacity = $request->query->get('capacity');
        $account_id = $request->query->get('account_id');

        // create prepared statements for corporate account table
        $conn = $this->get('database_connection');
        $stmt = $conn->prepare('INSERT INTO ride (Corporate_Account_account_id,vehicle , capacity) VALUES (:Corporate_Account_account_id , :vehicle, :capacity);');
        $stmt->bindValue(':Corporate_Account_account_id', $account_id);
        $stmt->bindValue(':vehicle', $vehicle);
        $stmt->bindValue(':capacity', $capacity);
        $stmt->execute();



        $response = new Response(json_encode(array(
            'value' => "success"
        )));
        $response->headers->set('Content-type', 'application/json');
        return $response;
    }

    public function registerHotelAction(Request $request) {

        $Lat = $request->query->get('lat');
        $long= $request->query->get('long');
        $account_id = $request->query->get('account_id');

        // create prepared statements for corporate account table
        $conn = $this->get('database_connection');
        $stmt = $conn->prepare('INSERT INTO hotel VALUES (:lat , :long , :Corporate_Account_account_id );');
        $stmt->bindValue(':lat', $Lat);
        $stmt->bindValue(':long', $long);
        $stmt->bindValue(':Corporate_Account_account_id', $account_id);


        $stmt->execute();

;

        $response = new Response(json_encode(array(
            'value' => "success"
        )));
        $response->headers->set('Content-type', 'application/json');
        return $response;
    }

    public function registerGuideAction(Request $request) {

        $account_id = $request->query->get('account_id');

        // create prepared statements for corporate account table
        $conn = $this->get('database_connection');
        $stmt = $conn->prepare('INSERT INTO guide VALUES (:Corporate_Account_account_id );');
        $stmt->bindValue(':Corporate_Account_account_id', $account_id);


        $stmt->execute();

        ;

        $response = new Response(json_encode(array(
            'value' => "success"
        )));
        $response->headers->set('Content-type', 'application/json');
        return $response;
    }

    public function registerPhotographerAction(Request $request) {

        $account_id = $request->query->get('account_id');

        // create prepared statements for corporate account table
        $conn = $this->get('database_connection');
        $stmt = $conn->prepare('INSERT INTO photographer VALUES (:Corporate_Account_account_id );');
        $stmt->bindValue(':Corporate_Account_account_id', $account_id);


        $stmt->execute();

        ;

        $response = new Response(json_encode(array(
            'value' => "success"
        )));
        $response->headers->set('Content-type', 'application/json');
        return $response;
    }
    
    


    public function loadHotelPageAction(Request $request) {

        $conn = $this->get('database_connection');
        $stmt = $conn->prepare('SELECT * FROM corporate_account,user,hotel WHERE (user.username = corporate_account.User_Username) AND (corporate_account.account_id = hotel.Corporate_Account_account_id);');
        $stmt->execute();
        $result = $stmt->fetchAll();

        $response = new Response(json_encode(array(
            'value' => "success",
            'result' => $result
        )));
        $response->headers->set('Content-type', 'application/json');
        return $response;
    }

    public function loadPhotographerPageAction(Request $request) {

        $conn = $this->get('database_connection');
        $stmt = $conn->prepare('SELECT * FROM corporate_account,user,photographer WHERE (user.username = corporate_account.User_Username) AND (corporate_account.account_id = photographer.Corporate_Account_account_id);');
        $stmt->execute();
        $result = $stmt->fetchAll();

        $response = new Response(json_encode(array(
            'value' => "success",
            'result' => $result
        )));
        $response->headers->set('Content-type', 'application/json');
        return $response;
    }

    public function loadGuidePageAction(Request $request) {

        $conn = $this->get('database_connection');
        $stmt = $conn->prepare('SELECT * FROM corporate_account,user,guide WHERE (user.username = corporate_account.User_Username) AND (corporate_account.account_id = guide.Corporate_Account_account_id);');
        $stmt->execute();
        $result = $stmt->fetchAll();

        $response = new Response(json_encode(array(
            'value' => "success",
            'result' => $result
        )));
        $response->headers->set('Content-type', 'application/json');
        return $response;
    }

    public function loadRidePageAction(Request $request) {

        $conn = $this->get('database_connection');
        $stmt = $conn->prepare('SELECT * FROM corporate_account,user,ride WHERE (user.username = corporate_account.User_Username) AND (corporate_account.account_id = ride.Corporate_Account_account_id);');
        $stmt->execute();
        $result = $stmt->fetchAll();

        $response = new Response(json_encode(array(
            'value' => "success",
            'result' => $result
        )));
        $response->headers->set('Content-type', 'application/json');
        return $response;
    }

}
