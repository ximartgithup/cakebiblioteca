<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MultasFixture
 */
class MultasFixture extends TestFixture
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
                'fecha' => '2024-05-14',
                'descripcion' => 'Lorem ipsum dolor sit amet',
                'valor' => 1,
                'estado' => 1,
                'prestamos_id' => 1,
                'created' => 1715696957,
                'modified' => 1715696957,
            ],
        ];
        parent::init();
    }
}
