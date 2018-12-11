<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImagesVehicleTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImagesVehicleTable Test Case
 */
class ImagesVehicleTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ImagesVehicleTable
     */
    public $ImagesVehicle;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.images_vehicle',
        'app.vehicles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ImagesVehicle') ? [] : ['className' => ImagesVehicleTable::class];
        $this->ImagesVehicle = TableRegistry::get('ImagesVehicle', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ImagesVehicle);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
