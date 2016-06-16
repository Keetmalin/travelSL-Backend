<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

         //check the log in method
        $crawler = $client->request('GET', '/user/login');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the Register method
        $crawler = $client->request('GET', '/user/register');
        $this->assertEquals(500, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the Register Corporate account method
        $crawler = $client->request('GET', '/user/registerCorporate');
        $this->assertEquals(500, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the Register Driver method
        $crawler = $client->request('GET', '/user/registerDriver');
        $this->assertEquals(500, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the Register Hotel method
        $crawler = $client->request('GET', '/user/registerHotel');
        $this->assertEquals(500, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the Register Guide method
        $crawler = $client->request('GET', '/user/registerGuide');
        $this->assertEquals(500, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the Register Photographer method
        $crawler = $client->request('GET', '/user/registerPhotographer');
        $this->assertEquals(500, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the Register Hotel method
        $crawler = $client->request('GET', '/user/loadHotelPage');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the load guide method
        $crawler = $client->request('GET', '/user/loadGuidePage');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the Register method
        $crawler = $client->request('GET', '/user/loadRidePage');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the load photographer method
        $crawler = $client->request('GET', '/user/loadPhotographerPage');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the load destination method
        $crawler = $client->request('GET', '/user/loadDestinationPage');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the add new destination method
        $crawler = $client->request('GET', '/user/addNewDestination');
        $this->assertEquals(500, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the Register method
        $crawler = $client->request('GET', '/user/addNewContact');
        $this->assertEquals(500, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the load police method
        $crawler = $client->request('GET', '/user/loadPolice');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the load hospital method
        $crawler = $client->request('GET', '/user/loadHospital');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the load Bank method
        $crawler = $client->request('GET', '/user/loadBank');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the load Airline method
        $crawler = $client->request('GET', '/user/loadAirLine');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the load traveler method
        $crawler = $client->request('GET', '/user/travelerData');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the log in method
        $crawler = $client->request('GET', '/user/hotelData');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the log in method
        $crawler = $client->request('GET', '/user/guideData');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the photographer method
        $crawler = $client->request('GET', '/user/photographerData');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the driver data get method
        $crawler = $client->request('GET', '/user/driverData');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the update traveler method
        $crawler = $client->request('GET', '/user/updateTraveler');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the make Payment method
        $crawler = $client->request('GET', '/user/makePayment');
        $this->assertEquals(500, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the get messages method
        $crawler = $client->request('GET', '/user/getMessages');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the corporate account name method
        $crawler = $client->request('GET', '/user/getCorporateAccountName');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the corporate account name method
        $crawler = $client->request('GET', '/user/loadMapHotels');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the map details of hotels
        $crawler = $client->request('GET', '/user/loadMapHotels');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the contacts in the database
        $crawler = $client->request('GET', '/user/loadContactPage');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //check the log in details of each user
        $crawler = $client->request('GET', '/user/loginDetails');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //add review to database access
        $crawler = $client->request('GET', '/user/addReview');
        $this->assertEquals(500, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //get review of each corporate account
        $crawler = $client->request('GET', '/user/getReview');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //update password of selected account
        $crawler = $client->request('GET', '/user/updatePassword');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //update corporate account details
        $crawler = $client->request('GET', '/user/updateCorporate');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //update driver details in my profile
        $crawler = $client->request('GET', '/user/updateDriver');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());

        //update hotel details in my profile
        $crawler = $client->request('GET', '/user/updateHotel');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('success', $client->getResponse()->getContent());
    }

}
