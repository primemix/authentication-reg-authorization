<?php

use yii\db\Migration;

/**
 * Handles adding nikname to table `user`.
 */
class m170110_105113_add_nikname_column_to_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('user', 'nikname', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('user', 'nikname');
    }
}
