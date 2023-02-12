<?php

class Person{
    public $fName;
    public $lName;
    public $email;

    public function basicInfo($name, $email, $phone)
    {
        return [
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone,
        ];
    }

    public function otherInfo($gender, $study)
    {
        return [
            'gender'=>$gender,
            'studey'=>$study,
        ];
    }
}