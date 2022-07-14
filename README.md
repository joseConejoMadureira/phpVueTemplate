# php Angular Template
### template de desenvolvimento. 

<p>Template para reutilização:  php restful api</p>

## Tecnologias 

| Tecnologia  | Versão |
| ------ | ------ |
| PHP | 8.1.8 |
| ANGULAR | 9.1.0 |
| PostgreSQL | 14.4  |
## ROUTES 

### Produtos
| Método | Rota | Parâmetros | Tipo  | Descrição
| ------ | ------ | ------ | ------ |------ |
| GET | /backend/index.php/product/read | |   JSON     | Retorna todos produtos criados.
| GET | /backend/index.php/product/readById/| **id**  `*` |   JSON     | Retorna  produto selecionado. 
| POST | /backend/index.php/product/create |**name**  `*` |JSON | Cria um novo produto. 
| |  | **price**  `*`             |         |
| PUT | /backend/index.php/product/update  |**id**  `*` | JSON |Altera informações de um produto.         |  
|  | | **name**  |
|  |  | **price**  |
| `DELETE` |  /backend/index.php/product/delete  | **id**  `*` | JSON |Deleta um produto.

## PREVIEW

![preview](https://github.com/joseEstudos/phpAngularTemplate/blob/f5d6d158823b8c5c1969b0231444ff3e091ca4b5/summary/prints/produtos.png)

![preview](https://github.com/joseEstudos/phpAngularTemplate/blob/f5d6d158823b8c5c1969b0231444ff3e091ca4b5/summary/prints/novoProduto.png)

![preview](https://github.com/joseEstudos/phpAngularTemplate/blob/f5d6d158823b8c5c1969b0231444ff3e091ca4b5/summary/prints/excluirProduto.png)

![preview](https://github.com/joseEstudos/phpAngularTemplate/blob/f5d6d158823b8c5c1969b0231444ff3e091ca4b5/summary/prints/editarProduto.png)
