<?php

namespace AppBundle\Command;


use AppBundle\Entity\Electronic;
use AppBundle\Services\ElectronicService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AddElectronicCommand extends Command
{
    private $electronicService;
    
    public function __construct(ElectronicService $repository)
    {
        parent::__construct();
        $this->electronicService = $repository;
    }
    
    /**
     *
     */
    protected function configure()
    {
        $this->setName('add-electronic')
            ->setDescription('Adds an electronic to the database.')
            ->setHelp('This command allows you to create a new electronic and add it to the database.')
            ->addArgument('brand', InputArgument::REQUIRED, 'The brand of the electronic.')
            ->addArgument('model', InputArgument::REQUIRED, 'The model of the electronic.')
            ->addArgument('price', InputArgument::REQUIRED, 'The price of the electronic.');
    }
    
    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return null
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $electronic = new Electronic();
        $electronic->setBrand($input->getArgument('brand'));
        $electronic->setModel($input->getArgument('model'));
        $electronic->setPrice($input->getArgument('price'));
        $this->electronicService->addElectronic($electronic);
        $output->writeln("added:".$electronic);
        
        return null;
    }
}