<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
