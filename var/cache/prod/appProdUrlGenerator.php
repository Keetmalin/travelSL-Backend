<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'user_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\AuthenticationController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\AuthenticationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_register_corporate' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\AuthenticationController::registerCorporateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/registerCorporate',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_register_driver' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\AuthenticationController::registerDriverAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/registerDriver',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_register_hotel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\AuthenticationController::registerHotelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/registerHotel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_register_guide' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\AuthenticationController::registerGuideAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/registerGuide',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_register_photographer' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\AuthenticationController::registerPhotographerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/registerPhotographer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_hotel_page' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\AuthenticationController::loadHotelPageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/hotelPage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_photographer_page' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\AuthenticationController::loadPhotographerPageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/photographerPage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_guide_page' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\AuthenticationController::loadGuidePageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/guidePage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_ride_page' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\AuthenticationController::loadRidePageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/ridePage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
