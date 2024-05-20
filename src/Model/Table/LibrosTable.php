<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Libros Model
 *
 * @method \App\Model\Entity\Libro newEmptyEntity()
 * @method \App\Model\Entity\Libro newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Libro> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Libro get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Libro findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Libro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Libro> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Libro|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Libro saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Libro>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Libro>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Libro>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Libro> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Libro>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Libro>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Libro>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Libro> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LibrosTable extends Table
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

        $this->setTable('libros');
        $this->setDisplayField('titulo');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('titulo')
            ->maxLength('titulo', 50)
            ->requirePresence('titulo', 'create')
            ->notEmptyString('titulo');

        $validator
            ->scalar('autor')
            ->maxLength('autor', 40)
            ->requirePresence('autor', 'create')
            ->notEmptyString('autor');

        $validator
            ->scalar('editorial')
            ->maxLength('editorial', 40)
            ->requirePresence('editorial', 'create')
            ->notEmptyString('editorial');

        $validator
            ->scalar('isbn')
            ->maxLength('isbn', 15)
            ->requirePresence('isbn', 'create')
            ->notEmptyString('isbn');

        $validator
            ->numeric('precio')
            ->requirePresence('precio', 'create')
            ->notEmptyString('precio');

        return $validator;
    }
}
