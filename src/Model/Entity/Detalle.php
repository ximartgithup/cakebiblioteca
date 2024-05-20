<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Detalle Entity
 *
 * @property int $id
 * @property float $valor
 * @property int $prestamos_id
 * @property int $libros_id
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Prestamo $prestamo
 * @property \App\Model\Entity\Libro $libro
 */
class Detalle extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'valor' => true,
        'prestamos_id' => true,
        'libros_id' => true,
        'created' => true,
        'modified' => true,
        'prestamo' => true,
        'libro' => true,
    ];
}
