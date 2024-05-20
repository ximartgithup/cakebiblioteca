<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DetallesFixture
 */
class DetallesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'valor' => 1,
                'prestamos_id' => 1,
                'libros_id' => 1,
                'created' => 1715696965,
                'modified' => 1715696965,
            ],
        ];
        parent::init();
    }
}
