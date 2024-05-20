<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LibrosFixture
 */
class LibrosFixture extends TestFixture
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
                'titulo' => 'Lorem ipsum dolor sit amet',
                'autor' => 'Lorem ipsum dolor sit amet',
                'editorial' => 'Lorem ipsum dolor sit amet',
                'isbn' => 'Lorem ipsum d',
                'precio' => 1,
                'created' => 1715696923,
                'modified' => 1715696923,
            ],
        ];
        parent::init();
    }
}
