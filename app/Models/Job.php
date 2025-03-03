<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    use HasFactory;
    protected $table = "job_listings";
    // protected $fillable = ['title', 'salary', 'employer_id']; // This will allow only the title, salary, and employer_id fields to be mass assignable
    protected $guarded = []; // This will allow all fields to be mass assignable except for the ones that are guarded

    public function employer(): BelongsTo
    {
        return $this->belongsTo(related: Employer::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(related: Tag::class, foreignPivotKey: 'job_listing_id');
    }
}

