# php Vuejs Template (em desenvolvimento)
### template de desenvolvimento. 

<p>Template para reutilização:  php restful api</p>

## Tecnologias 

| Tecnologia  | Versão |
| ------ | ------ |
| PHP | 8.1.8 |
| VUEJS | XXX |
| PostgreSQL | 14.4  |
## ROUTES 

### Produtos
| Método | Rota | Parâmetros | Tipo  | Descrição
| ------ | ------ | ------ | ------ |------ |
| GET | /backend/index.php/product/read   |                     |                    | Retorna todos produtos criados.
| GET | /backend/index.php/product/readById |   **id**  `*`  |             JSON     | Retorna  produto selecionado. 
| POST |  /backend/index.php/product/create |**product**  `*`   |               JSON     | Cria um novo produto. 
| PUT | /backend/index.php/product/update  |**product**  `*`    |                JSON     |Altera informações de um     produto.         |  
| `DELETE` |   /backend/index.php/product/delete   |  **id**  `*` |        JSON         |           Deleta um produto.

## MODELS 

### Products
| ID  | NAME | PRICE |
| ------ | ------ |------ |
## PREVIEW todo

![preview](https://github.com/joseEstudos/phpAngularTemplate/blob/f5d6d158823b8c5c1969b0231444ff3e091ca4b5/summary/prints/produtos.png)

![preview](https://github.com/joseEstudos/phpAngularTemplate/blob/f5d6d158823b8c5c1969b0231444ff3e091ca4b5/summary/prints/novoProduto.png)

![preview](https://github.com/joseEstudos/phpAngularTemplate/blob/f5d6d158823b8c5c1969b0231444ff3e091ca4b5/summary/prints/excluirProduto.png)

![preview](https://github.com/joseEstudos/phpAngularTemplate/blob/f5d6d158823b8c5c1969b0231444ff3e091ca4b5/summary/prints/editarProduto.png)
