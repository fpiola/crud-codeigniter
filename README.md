# crud-codeigniter

Crud básico de produtos com categorias utilizando codeigniter.

Configurações:

1 - Banco de dados MySQL, segue abaixo o script.
```mysql

CREATE DATABASE ci_produtos DEFAULT character SET utf8 DEFAULT COLLATE utf8_general_ci;

use ci_produtos;

CREATE TABLE IF NOT EXISTS `produto` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `produto` varchar(50) DEFAULT NULL,
  `descricao` text,
  `quantidade` int(11) DEFAULT NULL,
  `preco` decimal(12,2) DEFAULT NULL,
  `categoriacorrespondente` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO produto VALUES
(DEFAULT ,'Xiaomi Mi8 Lite', 'Armazenamento externo até 256 GB', 23, '1399.00',1),
(DEFAULT ,'Smart TV 4K LED 43 LG', 'Conectividade sem fio', 3, '1757.41',2),
(DEFAULT ,'Teclado C3 Tech ABNT2', 'Teclado Padrão C3 Tech Resistente a Água USB ABNT2 Preto - KB-12BK', 50, '20.90',3),
(DEFAULT ,'Câmera Nikon COOLPIX P900 16MP', 'O poder de zoom da COOLPIX P900 é nada menos que espetacular.', 5, '3229.91',4);

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO categoria VALUES
(DEFAULT ,'Telefone'),
(DEFAULT ,'Eletrônicos'),
(DEFAULT ,'Informática'),
(DEFAULT ,'Digitais');

```
3- Dados de conexão. application/config/database.php

```php
$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'ci_produtos',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

```
4 - base_url. application\config

```php
$root = "http://".$_SERVER['HTTP_HOST'];
$root .= dirname($_SERVER['SCRIPT_NAME']);
$config['base_url'] = $root;

```
