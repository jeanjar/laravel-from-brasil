<?php

namespace LaravelFromBrasil\Eloquent;

use \Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{

    /**
     * Obtém todos os models do banco de dados.
     *
     * @param array|mixed $columns
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function todos($columns = ['*'])
    {
        return self::all($columns);
    }

    /**
     * Começa consultando um model com eager loading.
     *
     * @param array|string $relations
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function com($relations)
    {
        return self::with($relations);
    }

    /**
     * Aplica Eager load nas relações do model.
     *
     * @param array|string $relations
     * @return $this
     */
    public function carregar($relations)
    {
        return $this->load($relations);
    }

    /**
     * Incrementa o valor de uma coluna a partir do valor passado.
     *
     * @param string $column
     * @param float|int $amount
     * @param array $extra
     * @return int
     */
    protected function incrementar($column, $amount = 1, array $extra = [])
    {
        return $this->increment($column, $amount, $extra);
    }

    /**
     * Decrementa o valor de uma coluna a partir do valor passado.
     *
     * @param string $column
     * @param float|int $amount
     * @param array $extra
     * @return int
     */
    protected function decrementar($column, $amount = 1, array $extra = [])
    {
        return $this->decrement($column, $amount, $extra);
    }

    /**
     * Update the model in the database.
     *
     * @param array $attributes
     * @param array $options
     * @return bool
     */
    public function atualizar(array $attributes, array $options)
    {
        return $this->update($attributes, $options);
    }

    /**
     * Save the model to the database.
     *
     * @param array $options
     * @return bool
     */
    public function salvar(array $options)
    {
        return $this->save($options);
    }

    /**
     * Save the model to the database using transaction.
     *
     * @param array $options
     * @return bool
     *
     * @throws \Throwable
     */
    public function salvarOuFalhar(array $options)
    {
        return $this->saveOrFail($options);
    }

    /**
     * Delete the model from the database.
     *
     * @return bool|null
     *
     * @throws \Exception
     */
    public function excluir()
    {
        return $this->delete();
    }

    /**
     * Force a hard delete on a soft deleted model.
     *
     * This method protects developers from running forceDelete when trait is missing.
     *
     * @return bool|null
     */
    public function forcarExclusao()
    {
        return $this->forceDelete();
    }

    /**
     * Determine if two models have the same ID and belong to the same table.
     *
     * @param  \Illuminate\Database\Eloquent\Model|null  $model
     * @return bool
     */
    public function eh($model)
    {
        return $this->is($model);
    }

    /**
     * Determine if two models are not the same.
     *
     * @param  \Illuminate\Database\Eloquent\Model|null  $model
     * @return bool
     */
    public function naoEh($model)
    {
        $this->isNot($model);
    }
}
