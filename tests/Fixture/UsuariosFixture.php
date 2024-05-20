<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuariosFixture
 */
class UsuariosFixture extends TestFixture
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
                'documento' => 'Lorem ip',
                'nombres' => 'Lorem ipsum dolor sit a',
                'apellidos' => 'Lorem ipsum dolor sit a',
                'direccion' => 'Lorem ipsum dolor sit amet',
                'telefono' => 'Lorem ipsum dolor ',
                'correo' => 'Lorem ipsum dolor sit amet',
                'created' => 1715696935,
                'modified' => 1715696935,
            ],
        ];
        parent::init();
    }
}
