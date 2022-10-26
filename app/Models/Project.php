<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

      /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'projects';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'title', 'type', 'description', 'comite1', 'comite2', 'comite3', 'comite4', 'image', 'chef_project_id', 'question1', 'question2', 'questionc1', 'questionc2' ];

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    
    public function members()
    {
        return $this->hasMany(Member::class);
    }

    public function memberships()
    {
        return $this->hasMany(Membership::class);
    }

    public function chef_project()
    {
        return $this->belongsTo(User::class);
    }

}
