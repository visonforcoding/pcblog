<?php

namespace Apps\Frontend;

use Phalcon\Mvc\View\Engine\Volt as VoltEngine;

class Module {

    public function registerAutoloaders() {

        $loader = new \Phalcon\Loader();

        $loader->registerNamespaces(array(
            'Apps\Frontend\Controllers' => '../Apps/Frontend/Controllers/',
            'Apps\Frontend\Models' => '../Apps/Frontend/Models/',
        ));

        $loader->register();
    }

    /**
     * Register the services here to make them general or register in the ModuleDefinition to make them module-specific
     */
    public function registerServices($di) {

        //Registering a dispatcher
        $di->set('dispatcher', function () {
            $dispatcher = new \Phalcon\Mvc\Dispatcher();

            //Attach a event listener to the dispatcher
            $eventManager = new \Phalcon\Events\Manager();
            $eventManager->attach('dispatch', new \Acl('frontend'));
            $eventManager->attach('dispatch:beforeException', new \NotFoundPlugin());

            $dispatcher->setEventsManager($eventManager);
            $dispatcher->setDefaultNamespace("Apps\Frontend\Controllers\\");
            return $dispatcher;
        });


        //Registering the view component
        $di->set('view', function () {
            $view = new \Phalcon\Mvc\View();
            $view->setViewsDir('../Apps/Frontend/Views/');

            $view->registerEngines(array(
                ".volt" => function($view, $di) {
                    $volt = new \Phalcon\Mvc\View\Engine\Volt($view, $di);
                    $volt->setOptions(array(
                        'compiledPath' => '../Apps/Frontend/Cache/Volt/',
                        'compiledSeparator' => '_'
                    ));
                    $compiler = $volt->getCompiler();
                    $compiler->addExtension(new \PhpFunction());
                    return $volt;
                }
                    ));
                    return $view;
                });

                /**
                 * Setting up volt
                 */
                $di->set('volt', function($view, $di) {

                    $volt = new VoltEngine($view, $di);

                    $volt->setOptions(array(
                        "compiledPath" => "../Apps/Frontend/Cache/Volt/"
                    ));

                    $compiler = $volt->getCompiler();
                    $compiler->addFunction('is_a', 'is_a');

                    return $volt;
                }, true);
            }

        }
        