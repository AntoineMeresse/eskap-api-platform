<?php
// api/src/Entity/Review.php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/** A review of an Eskap. 
 * 
 * @ORM\Entity
*/
#[ApiResource]
class Review
{
    /** The id of this review. 
     * 
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
    */
    private ?int $id = null;

    /** The id of the user. 
     * 
     * @ORM\Column
    */
    public ?string $userid = null;

    /** The text of the review. 
     * 
     * @ORM\Column(type="text")
    */
    public ?string $text = null;

    /** The rateof this review (between 0 and 5). 
     * 
     * @ORM\Column(type="float")
    */
    public float $rate = 0.0;

    /** The date of publication of this review.
     * 
     * @ORM\Column(type="datetime_immutable")
    */
    public ?\DateTimeInterface $publicationDate = null;

    /** The eskap this review is about. 
     * 
     * @ORM\ManyToOne(targetEntity="Eskap", inversedBy="reviews")
    */
    public ?Eskap $eskap = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}