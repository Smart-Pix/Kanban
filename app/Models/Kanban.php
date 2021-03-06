<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 09 Mar 2017 11:16:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Kanban
 * 
 * @property int $id
 * @property string $title
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Kanban extends Eloquent
{
	protected $fillable = [
		'title'
	];

    /**
     * The users that belong to the kanban.
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    /**
     * Get the tasks for the blog post.
     */
    public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }
}
