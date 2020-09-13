<?php


class CreateClient
{
    /**
     * @var ClientCreator
     */
    private $clientCreator;

    /**
     * CreateClient constructor.
     * @param ClientCreator $clientCreator
     */
    public function __construct(ClientCreator $clientCreator)
    {
        $this->clientCreator = $clientCreator;
    }

    /**
     * @param EClient $client
     */
    public function perform(EClient $client)
    {
        $this->clientCreator->create($client);
    }
}