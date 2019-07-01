<?php
// src/Entity/User.php

namespace App\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer",nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", nullable=true)

    protected $last_activity;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $tel_nr;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $mobile_nr;

    /**
     * @ORM\Column(type="string",nullable=true)
     */
    protected $first_name;

    /**
     * @ORM\Column(type="string",nullable=true)
     */
    protected $insertion_name;

    /**
     * @ORM\Column(type="string",nullable=true)
     */
    protected $last_name;

    /**
     * @ORM\Column(type="string",nullable=true)
     */
    protected $adress;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    protected $zip;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    protected $city;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    protected $country;






    public function __construct()
    {
        parent::__construct();
        // your own logic
    }


}
