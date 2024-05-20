<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Detalles Model
 *
 * @property \App\Model\Table\PrestamosTable&\Cake\ORM\Association\BelongsTo $Prestamos
 * @property \App\Model\Table\LibrosTable&\Cake\ORM\Association\BelongsTo $Libros
 *
 * @method \App\Model\Entity\Detalle newEmptyEntity()
 * @method \App\Model\Entity\Detalle newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Detalle> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Detalle get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Detalle findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Detalle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Detalle> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Detalle|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Detalle saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Detalle>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detalle>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Detalle>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detalle> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Detalle>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detalle>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Detalle>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detalle> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DetallesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('detalles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Prestamos', [
            'foreignKey' => 'prestamos_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Libros', [
            'foreignKey' => 'libros_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->numeric('valor')
            ->requirePresence('valor', 'create')
            ->notEmptyString('valor');

        $validator
            ->integer('prestamos_id')
            ->notEmptyString('prestamos_id');

        $validator
            ->integer('libros_id')
            ->notEmptyString('libros_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['prestamos_id'], 'Prestamos'), ['errorField' => 'prestamos_id']);
        $rules->add($rules->existsIn(['libros_id'], 'Libros'), ['errorField' => 'libros_id']);

        return $rules;
    }
}
