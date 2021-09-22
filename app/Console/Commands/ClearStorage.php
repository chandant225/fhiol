<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;

class ClearStorage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'storage:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clears the storage directory content';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $directories = [
            config('constants.image_directory')
        ];

        try {
            $file = new Filesystem;

            foreach ($directories as $directory) {
                Storage::deleteDirectory($directory);
                $this->line('Cleaned directory: ' . $directory);
            }

            $this->info('Storage directory cleaned.');
        } catch (\Exception $ex) {
            logger('Error while clearing storage. Exception: ' . $ex->getMessage());
            $this->error('Something went wrong while clearing storage!');
        }

        return true;
    }
}
