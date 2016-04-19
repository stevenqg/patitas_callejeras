<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
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
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_fundation_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PC\\FundationBundle\\Controller\\MainController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_fundation_comedogs' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PC\\FundationBundle\\Controller\\MainController::comedogsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index/comedogs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_fundation_tapitas' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PC\\FundationBundle\\Controller\\MainController::tapitasAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index/tapitas',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_fundation_adoptar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PC\\FundationBundle\\Controller\\MainController::adoptarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index/adoptar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_fundation_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PC\\FundationBundle\\Controller\\MainController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_fundation_nosotros' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PC\\FundationBundle\\Controller\\MainController::nosotrosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nosotros',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_fundation_encuesta' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PC\\FundationBundle\\Controller\\MainController::encuestaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/encuesta',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_user_encuesta' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PC\\FundationBundle\\Controller\\UserController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_user_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PC\\FundationBundle\\Controller\\UserController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_administrator_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCFundationBundle:Admin:index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_administrator_pet_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCFundationBundle:Admin:addpet',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/pet/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_administrator_pet_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCFundationBundle:Admin:createpet',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/pet/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_administrator_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCFundationBundle:Admin:add',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_administrator_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCFundationBundle:Admin:create',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_administrator_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'PCFundationBundle:Admin:edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_administrator_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'PCFundationBundle:Admin:update',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_admin_jornada_censo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCFundationBundle:Admin:jornadacenso',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/jornadacenso/view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_admin_jornada_censo_mas' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCFundationBundle:Admin:jornadacensomas',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/jornadacenso/mas',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_admin_jornada_censo_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCFundationBundle:Admin:jornadacensoedit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/jornadacenso/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_admin_jornada_censo_agregar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCFundationBundle:Admin:jornadacensodatos',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/jornadacenso/agregar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_admin_jornada_censo_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCFundationBundle:Admin:jornadacensoadd',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/jornadacenso/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_admin_jornada_censo_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCFundationBundle:Admin:jornadacensocreate',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/jornadacenso/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
