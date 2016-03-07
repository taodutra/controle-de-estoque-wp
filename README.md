# Controle de estoque WP

Versão do CRUD de **Controle de estoque** feito em WP.

### Banco de dados

Na raiz, há o arquivo **db.sql** contendo a estrutura WP, configurações de PostTypes e CustomFields, além de alguns exemplos de cadastros feitos usando o sistema.

A URL local usada para o desenvolvimento foi http://www.controlewp.local

### Customização

Para esta execução, foram usados dois plugins.

**Custom Post Type UI** para a criação de PostTypes
**Advanced Custom Fields** para a criação e configuração de CustomFields

### Configuração

Os dados do servidor MySQL devem ser editados no arquivo /wp-config.php

Caso exita algum problema relacionado ao charset, editar a linha abaixo:

```php
define('DB_CHARSET', 'utf8mb4');
```

para:

```php
define('DB_CHARSET', 'utf8');
```

### Campo Nome para Produto e Cliente

Para manter as características bases do sistema (URL, título do site, entre outras), mantive o campo **Título** com a função de **Nome**.

### Login e senha

Para acessar o admin, basta usar os dados abaixo.

**Login**: admin
**Senha**: controle_estoque_wp