<?php


class CreateOrder
{
    private $orderCreator;

    public function __construct(OrderCreator $orderCreator)
    {
        $this->orderCreator = $orderCreator;
    }

    public function perform(EOrder $order)
    {
        $this->orderCreator->create($order);
    }
}