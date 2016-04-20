<?php

return array(
       'index/([0-9]+)' => 'index/show/$1',
                'index' => 'index/index',
      'delete/([0-9]+)' => 'index/delete/$1',
                'login' => 'user/login',         
             'register' => 'user/register',
                  'add' => 'index/add',
               'logout' => 'index/logout',
       'change/([0-9]+)' => 'index/update/$1'
  
);
