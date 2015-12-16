<?php    
namespace IjorTengab\IBank\Command;

// use Composer\Composer;
// use Composer\Console\Application;
// use Composer\IO\IOInterface;
// use Composer\IO\NullIO;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
use IjorTengab\IBank\IBankBNI;
// use Symfony\Component\Console\Command\Command as BaseCommand;

class BalanceCommand extends Command {
    protected function configure()
    {
        $this
            ->setName('balance')
            ->setDescription('Mendapatkan saldo rekening terbaru.')
            ->addOption(
               'username',
               'u',
               InputOption::VALUE_OPTIONAL,
               'If set, the task will yell in uppercase letters'
            )
            ->setHelp(<<<EOT
Contoh Penggunaan:
ibank balance -u IwanFals -p SoreTuguPancoran -b BNI
ibank balance

EOT
            )
        ;
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $a = $input->getOption('username');
        // Cek apakah sudah login
        echo $a . PHP_EOL;
        // if ($input->getOption('username')) {
            // $text = strtoupper($text);
        // }
        
        // echo $saldo . PHP_EOL;
        // echo 'aloha' . PHP_EOL;
        ;
    }
    
}