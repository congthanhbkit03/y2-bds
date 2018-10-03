<?php

use yii\db\Migration;

/**
 * Class m180724_043003_bds
 */
class m180724_043003_bds extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180724_043003_car cannot be reverted.\n";

        return false;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%bds}}', [
            'id' => $this->primaryKey(),
            'tieude' => $this->string()->notNull(),
            'gioithieu' => $this->text()->notNull(),
            'dientich' => $this->float(),
            'lat' => $this->float(),
            'long' => $this->float(),
            'diachi' => $this->string(),
            'xa' => $this->integer(),
            'huyen' => $this->integer(),
            'tinh' => $this->integer(),
            'giaban' => $this->integer(),
            'giathue' => $this->integer(),
            'sotang' => $this->integer(),
            'sophongngu' => $this->integer(),
            'sophongtam' => $this->integer(),
            'cachcho' => $this->integer(),
            'cachsieuthi' => $this->integer(),
            'cachbenhvien' => $this->integer(),
            'cachtruonghoc' => $this->integer(),
            'namxay' => $this->integer(),
            'loai_id' => $this->integer(),
            'user_id' => $this->integer(),
            'status' => $this->smallInteger()->notNull()->defaultValue(0),
            'anh1' => $this->string(),
            'anh2' => $this->string(),
            'anh3' => $this->string(),
            'anh4' => $this->string(),
            'anh5' => $this->string(),
            'anh6' => $this->string(),
            'anh7' => $this->string(),
            'anh8' => $this->string(),
            'anh9' => $this->string(),
            'anh10' => $this->string(),
            'ngaytao' => $this->dateTime(),
            'ngaysua' => $this->dateTime(),
        ], $tableOptions);
        $this->addForeignKey('fk_bds_loai', 'bds', 'loai_id', 'loaibds', 'id');
        $this->addForeignKey('fk_bds_user', 'bds', 'user_id', 'user', 'id');
    }

    public function down()
    {
        $this->dropTable('{{%bds}}');
    }
    
}
