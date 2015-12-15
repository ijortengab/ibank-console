<?php
namespace IjorTengab\IBank\Console;

  
use Symfony\Component\Console\Application as BaseApplication;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\ConsoleOutputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Formatter\OutputFormatter;
use IjorTengab\IBank\Console\Command;

class Application extends BaseApplication
{
     /**
     * Initializes all the composer commands
     */
    protected function getDefaultCommands()
    {
        $commands = parent::getDefaultCommands();
        $commands[] = new Command\AboutCommand();
        // $commands[] = new Command\ConfigCommand();
        // $commands[] = new Command\DependsCommand();
        // $commands[] = new Command\InitCommand();
        // $commands[] = new Command\InstallCommand();
        // $commands[] = new Command\CreateProjectCommand();
        // $commands[] = new Command\UpdateCommand();
        // $commands[] = new Command\SearchCommand();
        // $commands[] = new Command\ValidateCommand();
        // $commands[] = new Command\ShowCommand();
        // $commands[] = new Command\SuggestsCommand();
        // $commands[] = new Command\RequireCommand();
        // $commands[] = new Command\DumpAutoloadCommand();
        // $commands[] = new Command\StatusCommand();
        // $commands[] = new Command\ArchiveCommand();
        // $commands[] = new Command\DiagnoseCommand();
        // $commands[] = new Command\RunScriptCommand();
        // $commands[] = new Command\LicensesCommand();
        // $commands[] = new Command\GlobalCommand();
        // $commands[] = new Command\ClearCacheCommand();
        // $commands[] = new Command\RemoveCommand();
        // $commands[] = new Command\HomeCommand();
        // if ('phar:' === substr(__FILE__, 0, 5)) {
            // $commands[] = new Command\SelfUpdateCommand();
        // }
        return $commands;
    }
    
    
    
}