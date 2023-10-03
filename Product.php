<?php 

class Product
{
    private int $id;
    private string $name;
    private float $price;

    public function __construct(int $id, string $name, float $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getFormattedPrice($currencySymbol = '$'): string
    {
        return $currencySymbol . number_format($this->price, 2);
    }

    public function showDetails(): void
    {
        $detailsTitle = "Product Details";
        $price = $this->getFormattedPrice();
        echo <<<OUTPUT
{$detailsTitle}
- ID: {$this->id}
- Name: {$this->name}
- Price: {$price}
OUTPUT;
    }
}

$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();
