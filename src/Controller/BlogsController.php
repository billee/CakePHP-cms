<?php

namespace App\Controller;

use Cake\Event\EventInterface;
use Cake\Utility\Text;
use Cake\Http\Client;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;

class BlogsController extends AppController
{
    public $Articles;

    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('blog');
        $this->Articles = TableRegistry::getTableLocator()->get('Articles');
    }

    public function home(){

        //$this->loadModel('Articles');
        $articles = $this->Articles->find('all');
        $this->set('articles', $this->paginate($articles, ['limit' => 3]));
    }


    public function about(){
        //$this->viewBuilder()->setLayout('blog');
    }

    public function contact(){
    }
}
