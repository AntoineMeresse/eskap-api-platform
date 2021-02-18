<?php
// api/src/Entity/User.php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;

/** An User. */
#[ApiResource]
class User
{
    /** The id of this User. */
    private ?string $id = null;

    /** The firstname of this User */
    public ?string $firstname = null;

    /** The lastname of this User */
    public ?string $lastname = null;

    /** @var int[] id of eskap done by this User. */
    public iterable $donelist;

    /** @var int[] id of fav eskap of this User.  */
    public iterable $favlist;

    public function __construct()
    {
        $this->themes = new ArrayCollection();
        $this->reviews = new ArrayCollection();
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}