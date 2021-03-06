<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 09 Mar 2017 14:08:55 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Task
 * 
 * @property int $id
 * @property string $title
 * @property int $state_id
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Task extends Eloquent
{
	protected $casts = [
		'state_id' => 'int'
	];

	protected $fillable = [
		'title',
		'state_id',
		'description'
	];

    /**
     * Get the user that owns the phone.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the kanban that owns the phone.
     */
    public function kanban()
    {
        return $this->belongsTo('App\Models\Kanban');
    }

    /**
     * Get the state that owns the phone.
     */
    public function state()
    {
        return $this->belongsTo('App\Models\State');
    }
}
