<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aluno".
 *
 * @property integer $id
 * @property integer $matricula
 * @property string $nome
 * @property string $sexo
 * @property integer $id_curso
 * @property integer $ano_ingresso
 *
 * @property Curso $idCurso
 */
class Aluno extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	 
	var $sexo_extenso;
	var $curso_extenso;
    public static function tableName()
    {
        return 'aluno';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
			[['matricula', 'id_curso', 'ano_ingresso'], 'required', 'message'=>'Este campo é obrigatório'],
            [['matricula', 'id_curso', 'ano_ingresso'], 'integer'],
			[['nome'], 'required', 'message'=>'Este campo é obrigatório'],
            [['nome'], 'string', 'max' => 200],
			[['sexo'], 'required', 'message'=>'Este campo é obrigatório'],
            [['sexo'], 'string', 'max' => 1]
        ];
    }
	

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'matricula' => 'Matricula',
            'nome' => 'Nome Completo',
            'sexo' => 'Sexo',
            'id_curso' => 'Curso de Graduação',
            'ano_ingresso' => 'Ano de Ingresso',
			'sexo_extenso' => 'Sexo',
			'curso_extenso' => 'Curso',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCurso()
    {
        return $this->hasOne(Curso::className(), ['id' => 'id_curso']);
    }

	public function afterFind(){
        $this->nome = ucwords(strtolower($this->nome)); 
		
		$model = Curso::findOne(Aluno::getIdCurso()->primaryModel->id_curso );
		$this->curso_extenso = $model->nome;

        if ($this->sexo == 'M'){
            $this->sexo_extenso = 'Masculino';
        }else{
            $this->sexo_extenso = 'Feminino';
        }  
		// $this->id_curso = $this->curso->nome;
    }
	
	public function beforeFind(){
        $this->nome = strtolower($this->nome);     

    }
	
	/*public function relations()
    {
        return array(
            'nome'=>array(self::BELONGS_TO, 'Curso', 'nome'),
            'categories'=>array(self::MANY_MANY, 'Category', 'PostCategory(postID, categoryID)'),
        );
    }*/
}

