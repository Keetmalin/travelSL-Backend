<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/user')) {
            // user_login
            if ($pathinfo === '/user/login') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_login;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::loginAction',  '_route' => 'user_login',);
            }
            not_user_login:

            if (0 === strpos($pathinfo, '/user/register')) {
                // user_register
                if ($pathinfo === '/user/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_register;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::registerAction',  '_route' => 'user_register',);
                }
                not_user_register:

                // user_register_corporate
                if ($pathinfo === '/user/registerCorporate') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_register_corporate;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::registerCorporateAction',  '_route' => 'user_register_corporate',);
                }
                not_user_register_corporate:

                // user_register_driver
                if ($pathinfo === '/user/registerDriver') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_register_driver;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::registerDriverAction',  '_route' => 'user_register_driver',);
                }
                not_user_register_driver:

                // user_register_hotel
                if ($pathinfo === '/user/registerHotel') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_register_hotel;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::registerHotelAction',  '_route' => 'user_register_hotel',);
                }
                not_user_register_hotel:

                // user_register_guide
                if ($pathinfo === '/user/registerGuide') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_register_guide;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::registerGuideAction',  '_route' => 'user_register_guide',);
                }
                not_user_register_guide:

                // user_register_photographer
                if ($pathinfo === '/user/registerPhotographer') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_register_photographer;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::registerPhotographerAction',  '_route' => 'user_register_photographer',);
                }
                not_user_register_photographer:

            }

            // user_hotel_page
            if ($pathinfo === '/user/hotelPage') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_hotel_page;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::loadHotelPageAction',  '_route' => 'user_hotel_page',);
            }
            not_user_hotel_page:

            // user_photographer_page
            if ($pathinfo === '/user/photographerPage') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_photographer_page;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::loadPhotographerPageAction',  '_route' => 'user_photographer_page',);
            }
            not_user_photographer_page:

            // user_guide_page
            if ($pathinfo === '/user/guidePage') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_guide_page;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::loadGuidePageAction',  '_route' => 'user_guide_page',);
            }
            not_user_guide_page:

            // user_ride_page
            if ($pathinfo === '/user/ridePage') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_ride_page;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::loadRidePageAction',  '_route' => 'user_ride_page',);
            }
            not_user_ride_page:

            // user_destination_page
            if ($pathinfo === '/user/destinationPage') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_destination_page;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::loadDestinationPageAction',  '_route' => 'user_destination_page',);
            }
            not_user_destination_page:

            if (0 === strpos($pathinfo, '/user/addNew')) {
                // user_add_new_destination
                if ($pathinfo === '/user/addNewDestination') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_add_new_destination;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::addNewDestinationAction',  '_route' => 'user_add_new_destination',);
                }
                not_user_add_new_destination:

                // user_add_new_contact
                if ($pathinfo === '/user/addNewContact') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_add_new_contact;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::addNewContactAction',  '_route' => 'user_add_new_contact',);
                }
                not_user_add_new_contact:

            }

            if (0 === strpos($pathinfo, '/user/load')) {
                // user_load_police
                if ($pathinfo === '/user/loadPolice') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_load_police;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::loadPoliceAction',  '_route' => 'user_load_police',);
                }
                not_user_load_police:

                // user_load_hospital
                if ($pathinfo === '/user/loadHospital') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_load_hospital;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::loadHospitalAction',  '_route' => 'user_load_hospital',);
                }
                not_user_load_hospital:

                // user_load_Bank
                if ($pathinfo === '/user/loadBank') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_load_Bank;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::loadBankAction',  '_route' => 'user_load_Bank',);
                }
                not_user_load_Bank:

                // user_load_air_line
                if ($pathinfo === '/user/loadAirLine') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_load_air_line;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::loadAirLineAction',  '_route' => 'user_load_air_line',);
                }
                not_user_load_air_line:

            }

            // user_traveler_data
            if ($pathinfo === '/user/travelerData') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_traveler_data;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::travelerDataAction',  '_route' => 'user_traveler_data',);
            }
            not_user_traveler_data:

            // user_hotel_data
            if ($pathinfo === '/user/hotelData') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_hotel_data;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::hotelDataAction',  '_route' => 'user_hotel_data',);
            }
            not_user_hotel_data:

            // user_guide_data
            if ($pathinfo === '/user/guideData') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_guide_data;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::guideDataAction',  '_route' => 'user_guide_data',);
            }
            not_user_guide_data:

            // user_photographer_data
            if ($pathinfo === '/user/photographerData') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_photographer_data;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::photographerDataAction',  '_route' => 'user_photographer_data',);
            }
            not_user_photographer_data:

            // user_driver_data
            if ($pathinfo === '/user/driverData') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_driver_data;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::driverDataAction',  '_route' => 'user_driver_data',);
            }
            not_user_driver_data:

            // user_update_traveler
            if ($pathinfo === '/user/updateTraveler') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_update_traveler;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::updateTravelerAction',  '_route' => 'user_update_traveler',);
            }
            not_user_update_traveler:

            // user_make_payment
            if ($pathinfo === '/user/makePayment') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_make_payment;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::makePaymentAction',  '_route' => 'user_make_payment',);
            }
            not_user_make_payment:

            if (0 === strpos($pathinfo, '/user/get')) {
                // user_get_messages
                if ($pathinfo === '/user/getMessages') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_get_messages;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::getMessagesAction',  '_route' => 'user_get_messages',);
                }
                not_user_get_messages:

                // user_get_corporate_account_name
                if ($pathinfo === '/user/getCorporateAccountName') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_get_corporate_account_name;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::getCorporateAccountNameAction',  '_route' => 'user_get_corporate_account_name',);
                }
                not_user_get_corporate_account_name:

            }

            if (0 === strpos($pathinfo, '/user/lo')) {
                if (0 === strpos($pathinfo, '/user/load')) {
                    // user_load_map_hotels
                    if ($pathinfo === '/user/loadMapHotels') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_user_load_map_hotels;
                        }

                        return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::loadMapHotelsAction',  '_route' => 'user_load_map_hotels',);
                    }
                    not_user_load_map_hotels:

                    // user_load_contact_page
                    if ($pathinfo === '/user/loadContactPage') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_user_load_contact_page;
                        }

                        return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::loadContactPageAction',  '_route' => 'user_load_contact_page',);
                    }
                    not_user_load_contact_page:

                }

                // user_login_details
                if ($pathinfo === '/user/loginDetails') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_login_details;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\AuthenticationController::loginDetailsAction',  '_route' => 'user_login_details',);
                }
                not_user_login_details:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
