<?php

use yii\db\Migration;

/**
 * Class m220504_142408_crud
 */
class m220504_142408_crud extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';

        $this->createTable('crud', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(),
            'apellido' => $this->string(),
            'numero' => $this->integer(),
            'edad' => $this->integer(),
            'genero' => $this->boolean(),
            'estado_civil' => $this->string(),
        ], $tableOptions);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('crud');
        return true;
    }
}