<?php

use yii\db\Migration;

/**
 * Class m180527_222424_mekan
 */
class m180527_222424_mekan extends Migration
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
        echo "m180527_222424_mekan cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
      $this->createTable('mekan',[
            'mekanID' =>$this->primaryKey()->notNull(),
            'mekanNumarası'=>$this->string()->notNull(),
            'bulunduguFakulte'=>$this->string()->notNull(),
            'demirbasListesi'=>$this->text()->notNull(),
          ]);

          $this->insert('mekan',[
            'mekanNumarası'=>'1040',
            'bulunduguFakulte'=>'Teknoloji Fakültesi',
            'demirbasListesi'=>'Sıra, Masa, Sandalye, Tahta',
          ]);
    }

    public function down()
    {
        echo "m180527_222424_mekan cannot be reverted.\n";

        return false;
    }

}
