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

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
