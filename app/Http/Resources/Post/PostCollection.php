<?php

namespace App\Http\Resources\Post;

use Illuminate\Http\Resources\Json\Resource;

class PostCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'image' => $this->image,
            'title' => $this->title,
            'excerpt' => $this->excerpt,
            'contents' => $this->when((strlen(strip_tags($this->contents)) > 50), substr(strip_tags($this->contents), 0, 50)),
            'like' => $this->like,
            'dislike' => $this->dislike,
            'user_id' => $this->user,
            'category' => $this->category->name,
            'tag' => $this->tags,
            'created_at' => (string)$this->created_at
        ];
    }
}
