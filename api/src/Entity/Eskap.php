<?php
// api/src/Entity/Eskap.php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;

/** An eskap. */
#[ApiResource]
class Eskap
{
    /** The id of this eskap. */
    private ?int $id = null;

    /** The name of this eskap */
    public ?string $name = null;

    /** The difficulty of this eskap */
    public ?string $difficulty = null;

    /** The minimum price of this eskap */
    public ?float $minprice = null;

    /** The maximum price of this eskap */
    public ?float $maxprice = null;

    /** The imgurl of this eskap. */
    public ?string $imgurl = null;

    /** The website of this eskap. */
    public ?string $websiteurl = null;

    /** The description of this eskap. */
    public ?string $description = null;

    /** The minimum player number of this eskap */
    public ?int $minplayer = null;

    /** The maximum player number of this eskap */
    public ?int $maxplayer = null;

    /** The number of room of this eskap */
    public ?int $roomnumber = null;

    /** The address number of this eskap */
    public ?int $number = null;

    /** The address street name of this eskap */
    public ?string $street = null;

    /** The address city name of this eskap */
    public ?string $city = null;

    /** The address country name of this eskap */
    public ?string $country = null;

    /** The latitude of this eskap */
    public ?float $latitude = null;

    /** The longitude of this eskap */
    public ?float $longitude = null;

    /** @var String[] Available themes for this eskap. */
    public iterable $themes;

    /** @var Review[] Available reviews for this eskap. */
    public iterable $reviews;

    public function __construct()
    {
        $this->themes = new ArrayCollection();
        $this->reviews = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}