<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/product/index' => [[['_route' => 'product_info', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
            '/techonology/map' => [[['_route' => 'techonology_map', '_controller' => 'App\\Controller\\TechonologyMapController::index'], null, null, null, false, false, null]],
            '/techonology/map/position' => [[['_route' => 'techonology_map_position', '_controller' => 'App\\Controller\\TechonologyMapPositionController::index'], null, null, null, false, false, null]],
            '/tovar' => [[['_route' => 'tovar', '_controller' => 'App\\Controller\\TovarController::index'], null, null, null, false, false, null]],
            '/diman2' => [[['_route' => 'asd', '_controller' => 'App\\Controller\\Dudos::asd'], null, null, null, false, false, null]],
            '/diman' => [[['_route' => 'hello', '_controller' => 'App\\Controller\\TovarController::index'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                    .'|/product/([^/]++)(?'
                        .'|(*:62)'
                        .'|/edit(*:74)'
                    .')'
                    .'|/tovar/([^/]++)(*:97)'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            35 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            62 => [[['_route' => 'show_change_page', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], null, null, false, true, null]],
            74 => [[['_route' => 'editProduct', '_controller' => 'App\\Controller\\ProductController::save'], ['id'], null, null, false, false, null]],
            97 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\TovarController::show'], ['id'], null, null, false, true, null]],
        ];
    }
}
