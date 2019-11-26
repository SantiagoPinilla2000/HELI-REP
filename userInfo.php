<?php
    class userInfo{
        public $name;
        public $lastName;
        public $job;
        public $age;
        public $phone;
        public $email;
    }
    $user_1 = new userInfo();
    $user_1->name= 'Santiago';
    $user_1->lastName= 'Pinilla';
    $user_1->job= 'Administrador';
    $user_1->age= '19';
    $user_1->phone= 3229024205;
    $user_1->email= 'johansantiagopinillauribe@gmail.com';

    $users = [
        $user_1
    ];
?>