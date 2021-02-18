<?php
// api/src/Entity/Review.php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;

/** A review of an Eskap. */
#[ApiResource]
class Review
{
    /** The id of this review. */
    private ?int $id = null;

    /** The id of the user. */
    public ?string $userid = null;

    /** The text of the review. */
    public ?string $text = null;

    /** The rateof this review (between 0 and 5). */
    public float $rate = 0.0;

    /** The date of publication of this review.*/
    public ?\DateTimeInterface $publicationDate = null;

    /** The eskap this review is about. */
    public ?Eskap $eskap = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}