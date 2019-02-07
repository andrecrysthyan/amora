<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Question Entity
 *
 * @property int $id
 * @property int $test_id
 * @property string $description
 *
 * @property \App\Model\Entity\Test $test
 * @property \App\Model\Entity\Answer[] $answers
 */
class Question extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'test_id' => true,
        'description' => true,
        'test' => true,
        'answers' => true
    ];
}
