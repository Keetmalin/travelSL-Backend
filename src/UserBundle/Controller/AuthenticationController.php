<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthenticationController extends Controller
{
    //this method is used to validate log in
    public function loginAction(Request $request) {

        $callback = $request->get('callback');

        $userName = $request->query->get('userName');
        $password = $request->query->get('password');


        // process
        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('SELECT * FROM login WHERE User_Username = :userName AND Password = :password ;');
            $hashPassword = md5($password);
            $stmt->bindValue(':userName', $userName);
            $stmt->bindValue(':password', $hashPassword);
            $stmt->execute();
            $result = $stmt->fetchAll();



            if ($stmt->rowCount() > 0){
                $stmt = $conn->prepare('UPDATE login SET last_login = :timeStamp WHERE User_Username = :userName ;');
                $timeStamp = date("Y-m-d h:i:sa");
                $stmt->bindValue(':timeStamp', $timeStamp);
                $stmt->bindValue(':userName', $userName);
                $stmt->execute();
            }

            $response_content = array(
                'value' => $stmt->rowCount(),
                'result' => $result,
                'result2' => "success"
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }
    //this is used to register an user to the User Table and Log in table
    public function registerAction(Request $request) {

        $callback = $request->get('callback');

        $userNameR = $request->query->get('userNameR');
        $nameR = $request->query->get('nameR');
        $emailR = $request->query->get('emailR');
        $passwordR = $request->query->get('passwordR');
        $category = $request->query->get('category');

        // create prepared statements for USer table
        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('INSERT INTO user (Username,Email, Name) VALUES (:userNameR ,:emailR, :nameR);');
            $stmt->bindValue(':userNameR', $userNameR);
            $stmt->bindValue(':nameR', $nameR);
            $stmt->bindValue(':emailR', $emailR);

            $stmt->execute();

            //create prepared statements for login table
            $stmt = $conn->prepare('INSERT INTO login (User_Username,Password , category) VALUES (:userNameR ,:passwordR , :category);');
            $hashPassword = md5($passwordR);
            $stmt->bindValue(':userNameR', $userNameR);
            $stmt->bindValue(':passwordR', $hashPassword);
            $stmt->bindValue(':category', $category);
            $stmt->execute();

            $response_content = array(
                'value' => "success"
            );
            //comment

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;


        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }


    }
    //used to register a corporate account
    public function registerCorporateAction(Request $request) {

        $callback = $request->get('callback');

        $userNameR = $request->query->get('userNameR');
        $telephone = $request->query->get('telephone');
        $Address = $request->query->get('Address');
        $District = $request->query->get('District');
        $account_id = $request->query->get('account_id');
        $description = $request->query->get('description');


        // create prepared statements for corporate account table
        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('INSERT INTO corporate_account (User_Username,Telephone , Address,District,account_id, description) VALUES (:userNameR , :telephone, :Address, :District , :account_id , :description);');
            $stmt->bindValue(':userNameR', $userNameR);
            $stmt->bindValue(':telephone', $telephone);
            $stmt->bindValue(':Address', $Address);
            $stmt->bindValue(':District', $District);
            $stmt->bindValue(':account_id', $account_id);
            $stmt->bindValue(':description', $description);
            $stmt->execute();


            $response_content = array(
                'value' => $stmt->rowCount()
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }
    //add details to the driver table
    public function registerDriverAction(Request $request) {

        $callback = $request->get('callback');

        $vehicle = $request->query->get('vehicle');
        $capacity = $request->query->get('capacity');
        $account_id = $request->query->get('account_id');

        // create prepared statements for corporate account table
        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('INSERT INTO ride (Corporate_Account_account_id,vehicle , capacity) VALUES (:Corporate_Account_account_id , :vehicle, :capacity);');
            $stmt->bindValue(':Corporate_Account_account_id', $account_id);
            $stmt->bindValue(':vehicle', $vehicle);
            $stmt->bindValue(':capacity', $capacity);
            $stmt->execute();

            $response_content = array(
                'value' => "success"
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;


        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }
    //add details to the Hotel tables
    public function registerHotelAction(Request $request) {

        $callback = $request->get('callback');

        $Lat = $request->query->get('lat');
        $long= $request->query->get('long');
        $account_id = $request->query->get('account_id');

        // create prepared statements for corporate account table
        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('INSERT INTO hotel VALUES (:lat , :long , :Corporate_Account_account_id );');
            $stmt->bindValue(':lat', $Lat);
            $stmt->bindValue(':long', $long);
            $stmt->bindValue(':Corporate_Account_account_id', $account_id);


            $stmt->execute();

            $response_content = array(
                'value' => "success"
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;


        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }

//add details to the guids tables
    public function registerGuideAction(Request $request) {

        $callback = $request->get('callback');

        $account_id = $request->query->get('account_id');

        // create prepared statements for corporate account table
        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{

            $stmt = $conn->prepare('INSERT INTO guide VALUES (:Corporate_Account_account_id );');
            $stmt->bindValue(':Corporate_Account_account_id', $account_id);


            $stmt->execute();

            $response_content = array(
                'value' => "success"
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }
//add details to the photographer tables
    public function registerPhotographerAction(Request $request) {

        $callback = $request->get('callback');

        $account_id = $request->query->get('account_id');

        // create prepared statements for corporate account table
        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{

            $stmt = $conn->prepare('INSERT INTO photographer VALUES (:Corporate_Account_account_id );');
            $stmt->bindValue(':Corporate_Account_account_id', $account_id);


            $stmt->execute();

            $response_content = array(
                'value' => "success"
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }


    
    

//load page details of the Hotels
    public function loadHotelPageAction(Request $request) {

        $callback = $request->get('callback');

        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{

            $stmt = $conn->prepare('SELECT * FROM corporate_account,user,hotel WHERE (user.username = corporate_account.User_Username) AND (corporate_account.account_id = hotel.Corporate_Account_account_id);');
            $stmt->execute();
            $result = $stmt->fetchAll();

            $response_content = array(
                'value' => "success",
                'result' => $result
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;
        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }
//load page details of the phptographer
    public function loadPhotographerPageAction(Request $request) {

        $callback = $request->get('callback');

        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('SELECT * FROM corporate_account,user,photographer WHERE (user.username = corporate_account.User_Username) AND (corporate_account.account_id = photographer.Corporate_Account_account_id);');
            $stmt->execute();
            $result = $stmt->fetchAll();

            $response_content = array(
                'value' => "success",
                'result' => $result
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }

//load page details of the Guides
    public function loadGuidePageAction(Request $request) {

        $callback = $request->get('callback');

        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('SELECT * FROM corporate_account,user,guide WHERE (user.username = corporate_account.User_Username) AND (corporate_account.account_id = guide.Corporate_Account_account_id);');
            $stmt->execute();
            $result = $stmt->fetchAll();

            $response_content = array(
                'value' => "success",
                'result' => $result
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }

//load page details of the Rides
    public function loadRidePageAction(Request $request) {

        $callback = $request->get('callback');

        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('SELECT * FROM corporate_account,user,ride WHERE (user.username = corporate_account.User_Username) AND (corporate_account.account_id = ride.Corporate_Account_account_id);');
            $stmt->execute();
            $result = $stmt->fetchAll();

            $response_content = array(
                'value' => "success",
                'result' => $result
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }
//load page details of the Destinations
    public function loadDestinationPageAction(Request $request) {

        $callback = $request->get('callback');

        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('SELECT * FROM location;');
            $stmt->execute();
            $result = $stmt->fetchAll();

            $response_content = array(
                'value' => "success",
                'result' => $result
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }

//add new destinations to the database
    public function addNewDestinationAction(Request $request) {

        $callback = $request->get('callback');

        $locationID = $request->query->get('locationID');
        $nameD = $request->query->get('nameD');
        $descriptionD = $request->query->get('descriptionD');
        $latD = $request->query->get('latD');
        $longD = $request->query->get('longD');

        // create prepared statements for USer table
        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('INSERT INTO location VALUES (:locationID ,:nameD, :descriptionD,:latD, :longD , null);');
            $stmt->bindValue(':locationID', $locationID);
            $stmt->bindValue(':nameD', $nameD);
            $stmt->bindValue(':descriptionD', $descriptionD);
            $stmt->bindValue(':latD', $latD);
            $stmt->bindValue(':longD', $longD);
            $stmt->execute();

            $response_content = array(
                'value' => "success"
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }
//add new contact to the databse
    public function addNewContactAction(Request $request) {

        $callback = $request->get('callback');

        $contactID = $request->query->get('contactID');
        $nameD = $request->query->get('nameD');
        $telephoneD = $request->query->get('telephoneD');
        $addressD = $request->query->get('addressD');
        $latD = $request->query->get('latD');
        $longD = $request->query->get('longD');
        $categoryD = $request->query->get('categoryD');

        // create prepared statements for USer table
        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('INSERT INTO contact VALUES (:contactID ,:nameD, :telephoneD,:addressD, :latD, :longD , null , :categoryD);');
            $stmt->bindValue(':contactID', $contactID);
            $stmt->bindValue(':nameD', $nameD);
            $stmt->bindValue(':telephoneD', $telephoneD);
            $stmt->bindValue(':addressD', $addressD);
            $stmt->bindValue(':latD', $latD);
            $stmt->bindValue(':longD', $longD);
            $stmt->bindValue(':categoryD', $categoryD);
            $stmt->execute();

            $response_content = array(
                'value' => "success"
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }


////load police details from the database
    public function loadPoliceAction(Request $request) {

        $callback = $request->get('callback');

        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('SELECT * FROM contact WHERE category = "police";');
            $stmt->execute();
            $result = $stmt->fetchAll();

            $response_content = array(
                'value' => "success",
                'result' => $result
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }

//load hospital details from the database
    public function loadHospitalAction(Request $request) {

        $callback = $request->get('callback');

        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('SELECT * FROM contact WHERE category = "hospital";');
            $stmt->execute();
            $result = $stmt->fetchAll();

            $response_content = array(
                'value' => "success",
                'result' => $result
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }
//load bank details from the databse
    public function loadBankAction(Request $request) {

        $callback = $request->get('callback');

        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('SELECT * FROM contact WHERE category = "bank";');
            $stmt->execute();
            $result = $stmt->fetchAll();

            $response_content = array(
                'value' => "success",
                'result' => $result
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }
//load airline details from the database
    public function loadAirLineAction(Request $request) {

        $callback = $request->get('callback');

        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('SELECT * FROM contact WHERE category = "airLine";');
            $stmt->execute();
            $result = $stmt->fetchAll();

            $response_content = array(
                'value' => "success",
                'result' => $result
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }
//load the traveller details from the database
    public function travelerDataAction(Request $request) {

        $callback = $request->get('callback');

        $userName = $request->query->get('userName');

        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('SELECT * FROM user WHERE Username = :userName ;');
            $stmt->bindValue(':userName', $userName);
            $stmt->execute();
            $result = $stmt->fetchAll();

            $response_content = array(
                'value' => "success",
                'result' => $result
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }
    ////load hotel data from the database
    public function hotelDataAction(Request $request) {

        $callback = $request->get('callback');

        $userName = $request->query->get('userName');

        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{

            $stmt = $conn->prepare('SELECT * FROM (user LEFT JOIN corporate_account  ON user.Username =corporate_account.User_Username) LEFT JOIN hotel ON corporate_account.account_id = hotel.Corporate_Account_account_id WHERE user.Username = :userName;');
            $stmt->bindValue(':userName', $userName);
            $stmt->execute();
            $result = $stmt->fetchAll();

            $response_content = array(
                'value' => "success",
                'result' => $result
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;
        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }
//load guide data from the database
    public function guideDataAction(Request $request) {

        $callback = $request->get('callback');

        $userName = $request->query->get('userName');

        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('SELECT * FROM user LEFT JOIN corporate_account  ON user.Username =corporate_account.User_Username WHERE user.Username = :userName;');
            $stmt->bindValue(':userName', $userName);
            $stmt->execute();
            $result = $stmt->fetchAll();

            $response_content = array(
                'value' => "success",
                'result' => $result
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }
//load photgrpaher data from the database
    public function photographerDataAction(Request $request) {

        $callback = $request->get('callback');

        $userName = $request->query->get('userName');

        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('SELECT * FROM user LEFT JOIN corporate_account  ON user.Username =corporate_account.User_Username WHERE user.Username = :userName;');
            $stmt->bindValue(':userName', $userName);
            $stmt->execute();
            $result = $stmt->fetchAll();

            $response_content = array(
                'value' => "success",
                'result' => $result
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }
//load driver data from the database
    public function driverDataAction(Request $request) {

        $callback = $request->get('callback');

        $userName = $request->query->get('userName');

        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('SELECT * FROM (user LEFT JOIN corporate_account  ON user.Username =corporate_account.User_Username) LEFT JOIN ride ON corporate_account.account_id = ride.Corporate_Account_account_id WHERE user.Username = :userName;');
            $stmt->bindValue(':userName', $userName);
            $stmt->execute();
            $result = $stmt->fetchAll();

            $response_content = array(
                'value' => "success",
                'result' => $result
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }

    //update traveler details
    public function updateTravelerAction(Request $request) {

        $callback = $request->get('callback');

        $name = $request->query->get('name');
        $email = $request->query->get('email');
        $userName = $request->query->get('userName');

        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('UPDATE user SET Email = :email , Name = :name WHERE Username=:userName;');
            $stmt->bindValue(':name', $name);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':userName', $userName);
            $stmt->execute();

            $response_content = array(
                'value' => "success"
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }
//creat payment regstrations
    public function makePaymentAction(Request $request) {

        $callback = $request->get('callback');

        $account_id = $request->query->get('account_id');
        $userName = $request->query->get('userName');
        $amount = $request->query->get('amount');
        $numberOfDays = $request->query->get('numberOfDays');
        $date = date("Y/m/d");
        $time = date("h:i:sa");

        // create prepared statements for USer table
        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('INSERT INTO payment VALUES (:account_id ,:userName, :date,:time, :amount, :numberOfDays);');
            $stmt->bindValue(':account_id', $account_id);
            $stmt->bindValue(':userName', $userName);
            $stmt->bindValue(':amount', $amount);
            $stmt->bindValue(':date', $date);
            $stmt->bindValue(':time', $time);
            $stmt->bindValue(':numberOfDays', $numberOfDays);
            $stmt->execute();


            $response_content = array(
                'value' => "success"
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }
//get payment messages from the database
    public function getMessagesAction(Request $request) {

        $callback = $request->get('callback');

        $userName = $request->query->get('userName');

        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('SELECT * FROM payment WHERE User_Username = :userName ;');
            $stmt->bindValue(':userName', $userName);
            $stmt->execute();
            $result = $stmt->fetchAll();

            $response_content = array(
                'value' => "success",
                'result' => $result
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }
//get the name of the corporate accounts from the database
    public function getCorporateAccountNameAction(Request $request) {

        $callback = $request->get('callback');

        $account_id = $request->query->get('account_id');

        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('SELECT * FROM corporate_account WHERE account_id = :account_id ;');
            $stmt->bindValue(':account_id', $account_id);
            $stmt->execute();
            $result = $stmt->fetchAll();

            $response_content = array(
                'value' => "success",
                'result' => $result
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }
//get the list of hotels with their lats and longs
    public function loadMapHotelsAction(Request $request) {

        $callback = $request->get('callback');

        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('SELECT * FROM corporate_account LEFT JOIN hotel ON corporate_account.account_id = hotel.Corporate_Account_account_id ;');
            $stmt->execute();
            $result = $stmt->fetchAll();

            $response_content = array(
                'value' => "success",
                'result' => $result
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }

    public function loadContactPageAction(Request $request) {

        $callback = $request->get('callback');

        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('SELECT * FROM contact;');
            $stmt->execute();
            $result = $stmt->fetchAll();

            $response_content = array(
                'value' => "success",
                'result' => $result
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }
    public function loginDetailsAction(Request $request) {

        $callback = $request->get('callback');

        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('SELECT * FROM login;');
            $stmt->execute();
            $result = $stmt->fetchAll();

            $response_content = array(
                'value' => "success",
                'result' => $result
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }

    public function addReviewAction(Request $request) {

        $callback = $request->get('callback');

        $account_id = $request->query->get('account_id');
        $score = $request->query->get('score');


        // create prepared statements for USer table
        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('INSERT INTO comment (Corporate_Account_account_id , Review) VALUES (:account_id ,:score);');
            $stmt->bindValue(':account_id', $account_id);
            $stmt->bindValue(':score', $score);

            $stmt->execute();

            $response_content = array(
                'value' => "success"
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }

    public function getReviewAction(Request $request) {

        $callback = $request->get('callback');

        $account_id = $request->query->get('account_id');
 
        // create prepared statements for USer table
        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('SELECT review FROM comment WHERE Corporate_Account_account_id = :account_id;');
            $stmt->bindValue(':account_id', $account_id);

            $stmt->execute();
            $result = $stmt->fetchAll();

            $response_content = array(
                'value' => "success",
                'result' => $result,
                'count' => $stmt->rowCount()
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }

    public function updatePasswordAction(Request $request) {

        $callback = $request->get('callback');

        $password = $request->query->get('password');
        $userName = $request->query->get('userName');

        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('UPDATE login SET password = :password WHERE User_Username=:userName;');
            $hashPassword = md5($password);
            $stmt->bindValue(':password', $hashPassword);
            $stmt->bindValue(':userName', $userName);
            $stmt->execute();

            $response_content = array(
                'value' => "success"
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }

    public function updateCorporateAction(Request $request) {

        $callback = $request->get('callback');

        $userNameR = $request->query->get('userNameR');
        $telephone = $request->query->get('telephone');
        $Address = $request->query->get('Address');
        $District = $request->query->get('District');
         $description = $request->query->get('description');


        // create prepared statements for corporate account table
        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('UPDATE corporate_account SET User_Username = :userNameR, Telephone = :telephone , Address = :Address ,District = :District , description = :description WHERE User_Username = :userNameR;');
            $stmt->bindValue(':userNameR', $userNameR);
            $stmt->bindValue(':telephone', $telephone);
            $stmt->bindValue(':Address', $Address);
            $stmt->bindValue(':District', $District);
            $stmt->bindValue(':description', $description);
            $stmt->execute();


            $response_content = array(
                'value' => $stmt->rowCount(),
                'success' => 'success'
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }
    //add details to the driver table
    public function updateDriverAction(Request $request) {

        $callback = $request->get('callback');

        $vehicle = $request->query->get('vehicle');
        $capacity = $request->query->get('capacity');
        $account_id = $request->query->get('account_id');

        // create prepared statements for corporate account table
        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('UPDATE ride SET vehicle =  :vehicle, capacity = :capacity WHERE Corporate_Account_account_id = :Corporate_Account_account_id ;');
            $stmt->bindValue(':Corporate_Account_account_id', $account_id);
            $stmt->bindValue(':vehicle', $vehicle);
            $stmt->bindValue(':capacity', $capacity);
            $stmt->execute();

            $response_content = array(
                'value' => "success"
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }
    //add details to the Hotel tables
    public function updateHotelAction(Request $request) {

        $callback = $request->get('callback');

        $Lat = $request->query->get('lat');
        $long= $request->query->get('long');
        $account_id = $request->query->get('account_id');

        // create prepared statements for corporate account table
        $conn = $this->get('database_connection');
        $conn->beginTransaction();

        try{
            $stmt = $conn->prepare('UPDATE hotel SET Lat =  :lat, `Long` = :long WHERE Corporate_Account_account_id = :Corporate_Account_account_id ;');
            $stmt->bindValue(':lat', $Lat);
            $stmt->bindValue(':long', $long);
            $stmt->bindValue(':Corporate_Account_account_id', $account_id);


            $stmt->execute();

            $response_content = array(
                'value' => "success"
            );

            $response = new JsonResponse($response_content, 200, array());
            $response->setCallback($callback);
            return $response;

        }
        catch (\mysqli_sql_exception $e) {
            $conn->rollBack();
            $response = $e->getCode();
            return $response;
        }

    }



}
