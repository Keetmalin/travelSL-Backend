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

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
