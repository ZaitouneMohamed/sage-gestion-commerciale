<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use File;

class MakeSevice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service {name}';
    protected $description = 'Create a new service class in the app/Services directory';


    public function handle()
    {
        $name = $this->argument('name');

        // Create the service class name (e.g., MyService)
        $serviceName = Str::studly($name);
        $path = app_path("Services/{$serviceName}.php");

        // Check if the service class already exists
        if (File::exists($path)) {
            $this->error("Service class {$serviceName} already exists!");
            return;
        }

        // Create the directory if it doesn't exist
        if (!File::isDirectory(app_path('Services'))) {
            File::makeDirectory(app_path('Services'), 0755, true);
        }

        // Create the service class file
        $content = $this->getServiceClassContent($serviceName);
        File::put($path, $content);

        $this->info("Service class {$serviceName} created successfully at {$path}");
    }


    protected function getServiceClassContent($serviceName)
    {
        return "<?php

namespace App\Services;

class {$serviceName}
{
    public function __construct()
    {
        // Initialize your service here
    }

    // Add your methods here
}
";
    }
}
