<?php

namespace App\Course\Domain\Entity;

use DateTime;

readonly class Course
{
    public function __construct(
        private ?string $id,
        private string $name,
        private string $description,
        private int $authorId,
        private ?DateTime $startsAt,
        private ?DateTime $endsAt,
        private ?DateTime $publishedAt,
    ) {
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getAuthorId(): int
    {
        return $this->authorId;
    }

    public function getStartsAt(): ?DateTime
    {
        return $this->startsAt;
    }

    public function getEndsAt(): ?DateTime
    {
        return $this->endsAt;
    }

    public function getPublishedAt(): ?DateTime
    {
        return $this->publishedAt;
    }

}