<?php

namespace frontend\resource;

class Comment extends \common\models\Comment
{

    public function extraFields()
    {
        return ['post'];
    }

    public function getPost()
    {
        return $this->hasOne(Post::class, ['id' => 'post_id']);
    }
}
