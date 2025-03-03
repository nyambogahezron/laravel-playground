<?php
namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'PHP Developer',
                'salary' => '$1200',
            ],
            [
                'id' => 2,
                'title' => 'Python Developer',
                'salary' => '$4500',
            ],
            [
                'id' => 3,
                'title' => 'Java Developer',
                'salary' => '$3000',
            ],
            [
                'id' => 4,
                'title' => 'C# Developer',
                'salary' => '$2500',
            ],
            [
                'id' => 5,
                'title' => 'Ruby Developer',
                'salary' => '$2000',
            ],
        ];
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404, "No job with id {$id} found.");
        }

        return $job;
    }
}

