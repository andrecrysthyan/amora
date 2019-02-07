<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tests Model
 *
 * @property \App\Model\Table\QuestionsTable|\Cake\ORM\Association\HasMany $Questions
 *
 * @method \App\Model\Entity\Test get($primaryKey, $options = [])
 * @method \App\Model\Entity\Test newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Test[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Test|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Test|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Test patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Test[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Test findOrCreate($search, callable $callback = null, $options = [])
 */
class TestsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('tests');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Josegonzalez/Upload.Upload', [
            // You can configure as many upload fields as possible,
            // where the pattern is `field` => `config`
            //
            // Keep in mind that while this plugin does not have any limits in terms of
            // number of files uploaded per request, you should keep this down in order
            // to decrease the ability of your users to block other requests.
            'image' => [
                'nameCallback' => function ($data, $settings) {
                    #var_dump($data);
                    $extension = pathinfo($data['name'], PATHINFO_EXTENSION);
                    return strtolower(md5($data['name'] . time()) . '.' . $extension);
                },
                'transformer' =>  function ($table, $entity, $data, $field, $settings) {
                    var_dump($data);
                    $extension = pathinfo($data['name'], PATHINFO_EXTENSION);
                    $tmp = tempnam(sys_get_temp_dir(), 'upload') . '.' . $extension;
                    $size = new \Imagine\Image\Box(500, 450);
                    $mode = \Imagine\Image\ImageInterface::THUMBNAIL_INSET;
                    $imagine = new \Imagine\Gd\Imagine();
                    $imagine->open($data['tmp_name'])
                        ->thumbnail($size, $mode)
                        ->crop(new \Imagine\Image\Point(0, 0), new \Imagine\Image\Box(500, 450))
                        ->save($tmp);

                    // Now return the original *and* the thumbnail
                    return [
                        $data['tmp_name'] => $data['name'],
                        $tmp => 'croped-' . $data['name'],
                    ];
                },
                'deleteCallback' => function ($path, $entity, $field, $settings) {
                    // When deleting the entity, both the original and the thumbnail will be removed
                    // when keepFilesOnDelete is set to false
                    return [
                        $path . $entity->{$field},
                        $path . 'croped-' . $entity->{$field}
                    ];
                },
                'keepFilesOnDelete' => false
            ]
        ]);

        $this->hasMany('Questions', [
            'foreignKey' => 'test_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator->provider('upload', \Josegonzalez\Upload\Validation\ImageValidation::class);

        $validator
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('title')
            ->maxLength('title', 65)
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->scalar('result')
            ->requirePresence('result', 'create')
            ->notEmpty('result');

        $validator->allowEmpty('image', true);

        $validator->add('image', 'fileAboveMinHeight', [
            'rule' => ['isAboveMinHeight', 200],
            'message' => 'There was no file found to upload',
            'provider' => 'upload',
            /*'on' => function($context) {
                return !empty($context['data']['image']) && $context['data']['image']['error'] == UPLOAD_ERR_OK;
            }*/
        ])
        ->requirePresence('image', 'create');

        return $validator;
    }
}
