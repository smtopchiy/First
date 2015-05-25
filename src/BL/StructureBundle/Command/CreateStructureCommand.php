<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 28.12.2014
 * Time: 21:43
 */

namespace BL\StructureBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Yaml\Parser;

/**
 * Class CreateStructureCommand
 * @package BL\StructureBundle\Command
 */
class CreateStructureCommand extends ContainerAwareCommand
{

    protected function configure()
    {
        $this
            ->setName('structure:create')
            ->setDescription('Create schema and tables in database ');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $conn = $this->getContainer()->get('database_connection');
        $yaml = new Parser();
        $arrayArguments = $yaml->parse(
            file_get_contents(__DIR__ . '/../Resources/config/schema_name.yml')
        );
        $arraySchemas = array_shift($arrayArguments);
        foreach ($arraySchemas as $schema) {
            $indicator = 0;
            $sql = $conn->getDatabasePlatform()->getCreateSchemaSQL($schema);
            try {
                $conn->fetchAll($sql);
                $indicator = 1;
            } finally {
                if (!!$indicator) {
                    echo 'schema create';
                } else {
                    echo 'schema ' . $schema . ' already exists';
                }
            }
        }
    }
}