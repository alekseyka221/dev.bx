<?php

class Discount
{
	protected $price;
	protected $discountRate;

	public function __construct(float $price, float $discountRate)
	{
		$this->price = $price;
		$this->discountRate = $discountRate;
	}

	public function calculate(): float
	{
		return $this->price * $this->discountRate / 100;
	}
}

class ShipmentPrice
{
	protected $weight;
	protected $pricePerUnit;

	public function __construct(float $weight, float $pricePerUnit)
	{
		$this->weight = $weight;
		$this->pricePerUnit = $pricePerUnit;
	}

	public function calculate(): float
	{
		return $this->weight * $this->pricePerUnit;
	}
}

class Tax
{
	protected $price;
	protected $taxRate;

	public function __construct(float $price, float $taxRate)
	{
		$this->price = $price;
		$this->taxRate = $taxRate;
	}

	public function calculate(): float
	{
		return $this->price * $this->taxRate / 100;
	}
}

class Order
{
	protected $price;
	protected $weight;

	public function __construct(float $price, float $weight)
	{
		$this->price = $price;
		$this->weight = $weight;
	}

	public function getPrice(): float
	{
		return $this->price;
	}

	public function getWeight(): float
	{
		return $this->weight;
	}
}
class PriceCalculator
{
	public static function calculate(Order $order): float
	{
		$discount = new Discount($order->getPrice(), 10);
		$shipmentPrice = new ShipmentPrice($order->getWeight(), 200);
		$tax = new Tax($order->getPrice(), 20);
		return $order->getPrice() - $discount->calculate() + $shipmentPrice->calculate() + $tax->calculate();
	}
}
$order = new Order(1000, 0.5);
$price = PriceCalculator::calculate($order);
echo "Price: {$price}\n";