<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Multas Model
 *
 * @property \App\Model\Table\PrestamosTable&\Cake\ORM\Association\BelongsTo $Prestamos
 *
 * @method \App\Model\Entity\Multa newEmptyEntity()
 * @method \App\Model\Entity\Multa newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Multa> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Multa get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Multa findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Multa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Multa> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Multa|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Multa saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Multa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Multa>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Multa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Multa> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Multa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Multa>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Multa>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Multa> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MultasTable extends Table
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

        $this->setTable('multas');
        $this->setDisplayField('descripcion');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Prestamos', [
            'foreignKey' => 'prestamos_id',
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
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDate('fecha');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 50)
            ->requirePresence('descripcion', 'create')
            ->notEmptyString('descripcion');

        $validator
            ->numeric('valor')
            ->requirePresence('valor', 'create')
            ->notEmptyString('valor');

        $validator
            ->requirePresence('estado', 'create')
            ->notEmptyString('estado');

        $validator
            ->integer('prestamos_id')
            ->notEmptyString('prestamos_id');

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

        return $rules;
    }
}
