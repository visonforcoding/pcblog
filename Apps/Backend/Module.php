<?php

namespace Apps\Backend;

class Module {

    public function registerAutoloaders() {

        $loader = new \Phalcon\Loader();

        $loader->registerNamespaces(array(
            'Apps\Backend\Controllers' => '../Apps/Backend/Controllers/',
            'Apps\Backend\Models' => '../Apps/Backend/Models/',
            'Apps\Backend\Plugins' => '../Apps/Backend/Plugins/',
        ));

        $loader->register();
    }

    /**
     * Register the services here to make them general or register in the ModuleDefinition to make them module-specific
     */
    public function registerServices($di) {

        //Registering a dispatcher
        $di->set('dispatcher', function() {

            $dispatcher = new \Phalcon\Mvc\Dispatcher();

            //Attach a event listener to the dispatcher
            $eventManager = new \Phalcon\Events\Manager();
            $eventManager->attach('dispatch', new \Acl('backend'));

            $dispatcher->setEventsManager($eventManager);
            $dispatcher->setDefaultNamespace("Apps\Backend\Controllers\\");
            return $dispatcher;
        });


        //Registering the view component
        $di->set('view', function () {
            $view = new \Phalcon\Mvc\View();
            $view->setViewsDir('../Apps/Backend/Views/');
            $view->registerEngines(array(
                ".volt" => function($view, $di) {
                    $volt = new \Phalcon\Mvc\View\Engine\Volt($view, $di);
                    $volt->setOptions(array(
                        'compiledPath' => '../Apps/Backend/Cache/Volt/',
                        'compiledSeparator' => '_'
                    ));
                    $compiler = $volt->getCompiler();
                    $compiler->addExtension(new \PhpFunction());
                    return $volt;
                }
                    ));
                    return $view;
                });
            }

        }
        