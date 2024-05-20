<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Libro Entity
 *
 * @property int $id
 * @property string $titulo
 * @property string $autor
 * @property string $editorial
 * @property string $isbn
 * @property float $precio
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime|null $modified
 */
class Libro extends Entity
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
        'titulo' => true,
        'autor' => true,
        'editorial' => true,
        'isbn' => true,
        'precio' => true,
        'created' => true,
        'modified' => true,
    ];
}
