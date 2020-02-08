<?php

use yii\db\Migration;

class m200208_195412_email_confirm_token extends Migration
{
    public function up()
    {
        $this->addColumn('{{%users}}', 'email_confirm_token', $this->string()->unique()->after('email'));
    }

    public function down()
    {
        $this->dropColumn('{{%users}}', 'email_confirm_token');
    }
}