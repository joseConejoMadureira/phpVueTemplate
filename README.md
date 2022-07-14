# phpAngularTemplate
## Em desenvolvimento

## ROUTES 

### Produtos
| Método | Rota | Parâmetros | Descrição
| ------ | ------ | ------ | ------ |
| GET | /backend/index.php/product/read |  | Retorna todos produtos criados.
| POST | /backend/index.php/product/create |  **name:** String `*`| Cria um novo produto.
| |  | **stateId:** String `*`  |
| PUT | /backend/index.php/product/update |  **id:** String `*` | Altera informações de um produto.
|  | | **name:** String |
|  |  | **stateId:** String |
| `DELETE` |  /backend/index.php/product/delete  | **id:** String `*` | Deleta um produto.

## PREVIEW

![preview](https://github.com/joseEstudos/phpAngularTemplate/blob/f5d6d158823b8c5c1969b0231444ff3e091ca4b5/summary/prints/produtos.png)

![preview](https://github.com/joseEstudos/phpAngularTemplate/blob/f5d6d158823b8c5c1969b0231444ff3e091ca4b5/summary/prints/novoProduto.png)

![preview](https://github.com/joseEstudos/phpAngularTemplate/blob/f5d6d158823b8c5c1969b0231444ff3e091ca4b5/summary/prints/excluirProduto.png)

![preview](https://github.com/joseEstudos/phpAngularTemplate/blob/f5d6d158823b8c5c1969b0231444ff3e091ca4b5/summary/prints/editarProduto.png)
