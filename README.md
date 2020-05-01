# Instalação

## Composer
`composer require jeanjar/laravel-from-brasil`
## Model
Extender a classe `Modelo` dentro dos seus Models


```php
use LaravelFromBrasil\Eloquent\Modelo;

class Cliente extends Modelo {
    
} 
```

# Sobre

Esse pacote serve apenas para fins educativos, lúdicos e para quem quiser utilizar os métodos mais utilizados do Eloquent em Português do Brasil.

# Ajude a traduzir

Faça seu fork e envie seus PR para aumentar a quantidade de traduções.

# Esse pacote não é

Esse pacote é apenas para traduções dos métodos do Eloquent e não para "novas" implementações e métodos:


# Métodos traduzidos até hoje: 30/Abr/2020

| Original | Português do Brasil | 
| -------- | ------------------- |
| Model::all() | Model::todos() |
| Model::with(...) | Model::com(...) |
| Model::load(...) | Model::carregar(...) |
| Model::increment(...) | Model::incrementar(...) |
| Model::decrement(...) | Model::decrementar(...) |
| $model->update(...) | $model->atualizar(...) |
| $model->save() | $model->salvar() | 
| $model->saveOfFail() | $model->salvarOuFalhar() |
| $model->delete() | $model->excluir() | 
| $model->forceDelete() | $model->forcarExclusao() |
| $model->is(...) | $model->eh(...) |
| $model->isNot(...) | $model->naoEh(...) | 
