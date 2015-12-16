<?php   
namespace IjorTengab\IBank\Command;

// use Composer\Composer;
// use Composer\Console\Application;
// use Composer\IO\IOInterface;
// use Composer\IO\NullIO;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command as BaseCommand;

class AboutCommand extends Command 
{
    protected function configure()
    {
        $this
            ->setName('about')
            ->setDescription('Short information about Composer')
            ->setHelp(<<<EOT
<info>php composer.phar about</info>
EOT
            )
        ;
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->getIO()->write(<<<EOT
<info>Composer - Package Management for PHP</info>
<comment>Composer is a dependency manager tracking local dependencies of your projects and libraries.
See https://getcomposer.org/ for more information.</comment>
EOT
        );
    }
    
}