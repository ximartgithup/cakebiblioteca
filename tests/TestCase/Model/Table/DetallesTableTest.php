<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DetallesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DetallesTable Test Case
 */
class DetallesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DetallesTable
     */
    protected $Detalles;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Detalles',
        'app.Prestamos',
        'app.Libros',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Detalles') ? [] : ['className' => DetallesTable::class];
        $this->Detalles = $this->getTableLocator()->get('Detalles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Detalles);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DetallesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\DetallesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
