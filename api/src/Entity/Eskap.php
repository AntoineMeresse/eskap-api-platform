<?php
// api/src/Entity/Eskap.php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/** An eskap. 
 * 
 * @ORM\Entity
*/
#[ApiResource]
class Eskap
{
    /** The id of this eskap. 
     * 
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
    */
    private ?int $id = null;

    /** The name of this eskap 
     * 
     * @ORM\Column(nullable=true)
    */
    public ?string $name = null;

    /** The difficulty of this eskap 
     * 
     * @ORM\Column(nullable=true)
    */
    public ?string $difficulty = null;

    /** The minimum price of this eskap 
     * 
     * @ORM\Column(nullable=true)
    */
    public ?float $minprice = null;

    /** The maximum price of this eskap 
     * 
     * @ORM\Column(nullable=true)
    */
    public ?float $maxprice = null;

    /** The imgurl of this eskap. 
     * 
     * @ORM\Column(nullable=true)
    */
    public ?string $imgurl = null;

    /** The website of this eskap. 
     * 
     * @ORM\Column(nullable=true)
    */
    public ?string $websiteurl = null;

    /** The description of this eskap. 
     * 
     * @ORM\Column(nullable=true)
    */
    public ?string $description = null;

    /** The minimum player number of this eskap 
     * 
     * @ORM\Column(nullable=true)
    */
    public ?int $minplayer = null;

    /** The maximum player number of this eskap 
     * 
     * @ORM\Column(nullable=true)
    */
    public ?int $maxplayer = null;

    /** The number of room of this eskap 
     * 
     * @ORM\Column(nullable=true)
    */
    public ?int $roomnumber = null;

    /** The address number of this eskap 
     * 
     * @ORM\Column(nullable=true)
    */
    public ?int $number = null;

    /** The address street name of this eskap 
     * 
     * @ORM\Column(nullable=true)
    */
    public ?string $street = null;

    /** The address city name of this eskap 
     * 
     * @ORM\Column(nullable=true)
    */
    public ?string $city = null;

    /** The address country name of this eskap 
     * 
     * @ORM\Column(nullable=true)
    */
    public ?string $country = null;

    /** The latitude of this eskap 
     * 
     * @ORM\Column(nullable=true)
    */
    public ?float $latitude = null;

    /** The longitude of this eskap 
     * 
     * @ORM\Column(nullable=true)
    */
    public ?float $longitude = null;

    /** @var String[] Available themes for this eskap. 
     * 
     * @ORM\Column(type="array")
    */
    public iterable $themes;

    /** @var Review[] Available reviews for this eskap. 
     * 
     * @ORM\OneToMany(targetEntity="Review", mappedBy="eskap", cascade={"persist", "remove"})
    */
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