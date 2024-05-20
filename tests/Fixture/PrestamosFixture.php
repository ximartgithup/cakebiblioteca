<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PrestamosFixture
 */
class PrestamosFixture extends TestFixture
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
                'estado' => 1,
                'usuarios_id' => 1,
                'created' => 1715696946,
                'modified' => 1715696946,
            ],
        ];
        parent::init();
    }
}
