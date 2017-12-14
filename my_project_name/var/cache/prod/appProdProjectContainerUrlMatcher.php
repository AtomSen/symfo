<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/electronics')) {
            // getById
            if (preg_match('#^/electronics/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_getById;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'getById')), array (  '_controller' => 'ElectronicController:getElectronicById',));
            }
            not_getById:

            // getAll
            if ('/electronics' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_getAll;
                }

                return array (  '_controller' => 'ElectronicController:getAllElectronics',  '_route' => 'getAll',);
            }
            not_getAll:

            // add
            if ('/electronics' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_add;
                }

                return array (  '_controller' => 'ElectronicController:addElectronics',  '_route' => 'add',);
            }
            not_add:

            // delete
            if (preg_match('#^/electronics/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete')), array (  '_controller' => 'ElectronicController:deleteElectronicById',));
            }
            not_delete:

            // update
            if (preg_match('#^/electronics/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($requestMethod, array('PUT', 'PATCH'))) {
                    $allow = array_merge($allow, array('PUT', 'PATCH'));
                    goto not_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update')), array (  '_controller' => 'ElectronicController:updateElectronic',));
            }
            not_update:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
