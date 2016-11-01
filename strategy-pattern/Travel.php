<?php


class Travel
{
    public $transport;

    public function __construct(Transport $transport)
    {
        $this->transport = $transport;
    }

    public function getTransportInfo()
    {
        return $this->transport->getTransportInfo();
    }

}

Interface Transport
{
    public function getTransportInfo();
}

class Bus implements Transport
{
    public function getTransportInfo()
    {
        return 'bus';
    }
}
class Fly implements Transport
{
    public function getTransportInfo()
    {
        return 'fly';
    }
}

$bus = new Bus();
$byBus = new Travel($bus);
echo $byBus->getTransportInfo().PHP_EOL;
$fly = new Fly();
$byFly = new Travel($fly);
echo $byFly->getTransportInfo().PHP_EOL;