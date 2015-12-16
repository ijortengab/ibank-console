<?php
namespace IjorTengab\IBank\Console;

  
use Symfony\Component\Console\Application as BaseApplication;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\ConsoleOutputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Formatter\OutputFormatter;
use IjorTengab\IBank\Command;

class Application extends BaseApplication
{
       private static $logo = '
    ____   ____              __               ______                       __   
   /  _/  / __ )____ _____  / /__            / ____/___  ____  _________  / /__ 
   / /   / __  / __ `/ __ \/ //_/  ______   / /   / __ \/ __ \/ ___/ __ \/ / _ \
 _/ /   / /_/ / /_/ / / / / ,<    /_____/  / /___/ /_/ / / / (__  ) /_/ / /  __/
/___/  /_____/\__,_/_/ /_/_/|_|            \____/\____/_/ /_/____/\____/_/\___/ 
                                                                                                                                                            
';
    public function getHelp()
    {
        return self::$logo . parent::getHelp();
    }
    
     /**
     * Initializes all the composer commands
     */
    protected function getDefaultCommands()
    {
        $commands = parent::getDefaultCommands();
        $commands[] = new Command\AboutCommand();
        $commands[] = new Command\StatusCommand();
        $commands[] = new Command\BalanceCommand();
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