<?php

class Product {
    private string $name;
    private float $price;
    private float $vatRate;

    public function __construct(string $name, float $price, float $vatRate)
    {
        $this->name = $name;
        $this->price = $price;
        $this->vatRate = $vatRate;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPriceIncludingVAT(): float
    {
        return round($this->price * (1 + $this->vatRate), 2);
    }

    public function getPriceIncludingVATWithInflation(): float
    {
        $inflationRate = 1.15;
        if($this->getPriceIncludingVAT() > 200) $inflationRate = 1.25;

        return round($this->getPriceIncludingVAT() * $inflationRate, 2);
    }
}