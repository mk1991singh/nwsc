<?php

namespace App\Controller\Apiteacher;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 */

class AppController extends Controller
{

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth',[
            'authError' => 'Did you really think you are allowed to see that?',
            'authenticate' => [
                'Form' => [
                    'userModel' => 'Teachers',
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password'
                    ]
                ]
            ]
        ]);
    }
    public function rq($data){
        ob_start();
        print_r($data);
        $c = ob_get_clean();
        $fc = fopen('rq.txt', 'w');
        fwrite($fc, $c);
        fclose($fc);
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }
}
