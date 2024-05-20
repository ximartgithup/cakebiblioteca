<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Prestamo Entity
 *
 * @property int $id
 * @property \Cake\I18n\Date $fecha
 * @property int $estado
 * @property int $usuarios_id
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Usuario $usuario
 */
class Prestamo extends Entity
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
        'fecha' => true,
        'estado' => true,
        'usuarios_id' => true,
        'created' => true,
        'modified' => true,
        'usuario' => true,
    ];
}
