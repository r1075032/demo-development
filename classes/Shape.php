<?php

class Shape
{
    private string $color;
    private int $x;
    private int $y;
    private int $width;
    private int $height;

    public function __construct(
        string $color,
        int $x,
        int $y,
        int $width,
        int $height
    ) {
        $this->setColor($color);
        $this->setX($x);
        $this->setY($y);
        $this->setWidth($width);
        $this->setHeight($height);
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function setX(int $x): void
    {
        if ($x < 0) {
            throw new InvalidArgumentException('x moet positief zijn.');
        }

        $this->x = $x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function setY(int $y): void
    {
        if ($y < 0) {
            throw new InvalidArgumentException('y moet positief zijn.');
        }

        $this->y = $y;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setWidth(int $width): void
    {
        if ($width <= 0) {
            throw new InvalidArgumentException('width moet positief zijn.');
        }

        $this->width = $width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function setHeight(int $height): void
    {
        if ($height <= 0) {
            throw new InvalidArgumentException('height moet positief zijn.');
        }

        $this->height = $height;
    }
}
