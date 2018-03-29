<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Sluggable;

class Post extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
							'title',
							'content',
							'user_id'];
							
	/**
	* save new post
	* @param array $post
	* @return object post
	*/
	
	public function savePost($post)
	{
		return $this->create($post);
	}
	
	public function updatePost($post)
	{
		return $this->update($post);
	}
	

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
	
}
