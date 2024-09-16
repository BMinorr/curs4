<?php

use yii\db\Migration;

class m190829_054720_add_access_token_column_to_user_table extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'access_token', $this->string(512)->after('auth_key'));
    }

    public function safeDown()
    {
        $this->dropColumn('{{%user}}', 'access_token');
    }
}
