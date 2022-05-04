<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "crud".
 *
 * @property int $id
 * @property string|null $nombre
 * @property string|null $apellido
 * @property int|null $numero
 * @property int|null $edad
 * @property int|null $genero
 * @property string|null $estado_civil
 */
class Crud extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'crud';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['nombre', 'required'],
            [['numero', 'edad', 'genero'], 'integer'],
            [['nombre', 'apellido', 'estado_civil'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'numero' => 'Numero',
            'edad' => 'Edad',
            'genero' => 'Genero',
            'estado_civil' => 'Estado Civil',
        ];
    }
}