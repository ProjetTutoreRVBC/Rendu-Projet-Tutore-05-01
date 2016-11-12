<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // app_channel_index
        if (0 === strpos($pathinfo, '/feed/channel') && preg_match('#^/feed/channel(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_channel_index')), array (  'id' => 1,  '_controller' => 'AppBundle\\Controller\\ChannelController::indexAction',));
        }

        // homepage
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::indexAction',  '_route' => 'homepage',);
        }

        // welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'welcome');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\ListController::showAction',  '_route' => 'welcome',);
        }

        // app_lucky_number
        if ($pathinfo === '/lucky/number') {
            return array (  '_controller' => 'AppBundle\\Controller\\LuckyController::numberAction',  '_route' => 'app_lucky_number',);
        }

        // register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'register',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // security_login_check
            if ($pathinfo === '/login_check') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'security_login_check',);
            }

            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
            }

        }

        if (0 === strpos($pathinfo, '/blog')) {
            // blog_list
            if (preg_match('#^/blog(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_list')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::listAction',  'page' => 1,));
            }

            // blog_show
            if (preg_match('#^/blog/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_show')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::showAction',));
            }

        }

        // login
        if (rtrim($pathinfo, '/') === '/login') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'login');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
