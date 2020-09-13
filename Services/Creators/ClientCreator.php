<?php


class ClientCreator
{
    /**
     * @var IClientRepository
     */
    private $clientRepository;

    /**
     * ClientCreator constructor.
     * @param IClientRepository $clientRepository
     */
    public function __construct(IClientRepository $clientRepository)
    {
        $this->clientRepository = $clientRepository;
    }

    /**
     * @param EClient $client
     */
    public function create(EClient $client)
    {
        $this->clientRepository->create($client);
    }
}