<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

WARNING - 2018-02-27 09:10:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 09:11:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 09:11:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-02-27 09:11:47 --> 23000 - SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '2-2' for key 'PRIMARY' with query: "INSERT INTO `contiene` (`id_cancion`, `id_lista`, `createdAt`) VALUES ('2', '2', 1519722707)" in /var/www/html/julianparrillaRep/fuel/core/classes/database/pdo/connection.php on line 253
WARNING - 2018-02-27 09:18:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 09:19:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-02-27 09:19:49 --> Error - Call to a member function delete() on array in /var/www/html/julianparrillaRep/fuel/app/classes/controller/canciones.php on line 197
WARNING - 2018-02-27 09:21:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-02-27 09:21:29 --> 21000 - SQLSTATE[21000]: Cardinality violation: 1241 Operand should contain 1 column(s) with query: "SELECT `t0`.`id_cancion` AS `t0_c0`, `t0`.`id_lista` AS `t0_c1`, `t0`.`createdAt` AS `t0_c2` FROM `contiene` AS `t0` WHERE `t0`.`id_cancion` = ('2', '2') AND `t0`.`id_lista` = '0' LIMIT 1" in /var/www/html/julianparrillaRep/fuel/core/classes/database/pdo/connection.php on line 253
WARNING - 2018-02-27 09:21:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-02-27 09:21:56 --> Error - syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ',' or ')' in /var/www/html/julianparrillaRep/fuel/app/classes/controller/canciones.php on line 188
WARNING - 2018-02-27 09:22:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 09:24:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-02-27 09:24:03 --> Error - Call to a member function delete() on array in /var/www/html/julianparrillaRep/fuel/app/classes/controller/canciones.php on line 191
WARNING - 2018-02-27 09:24:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-02-27 09:24:28 --> Notice - Undefined offset: 0 in /var/www/html/julianparrillaRep/fuel/app/classes/controller/canciones.php on line 191
WARNING - 2018-02-27 09:26:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-02-27 09:26:18 --> 23000 - SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '2-2' for key 'PRIMARY' with query: "INSERT INTO `contiene` (`id_cancion`, `id_lista`, `createdAt`) VALUES ('2', '2', 1519723578)" in /var/www/html/julianparrillaRep/fuel/core/classes/database/pdo/connection.php on line 253
WARNING - 2018-02-27 09:27:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 09:27:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-02-27 09:27:41 --> Notice - Undefined offset: 2 in /var/www/html/julianparrillaRep/fuel/app/classes/controller/canciones.php on line 190
WARNING - 2018-02-27 09:27:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-02-27 09:27:51 --> Error - Argument 2 passed to Orm\Model::find() must be of the type array, integer given, called in /var/www/html/julianparrillaRep/fuel/app/classes/controller/canciones.php on line 190 in /var/www/html/julianparrillaRep/fuel/packages/orm/classes/model.php on line 559
WARNING - 2018-02-27 09:28:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 09:29:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 09:29:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 09:29:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 09:31:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 09:31:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 09:34:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-02-27 09:34:54 --> 23000 - SQLSTATE[23000]: Integrity constraint violation: 1451 Cannot delete or update a parent row: a foreign key constraint fails (`BBDD_ejercicio3`.`contiene`, CONSTRAINT `foreignkeyCancionALista` FOREIGN KEY (`id_cancion`) REFERENCES `cancion` (`id`)) with query: "DELETE FROM `cancion` WHERE `id` = '1' LIMIT 1" in /var/www/html/julianparrillaRep/fuel/core/classes/database/pdo/connection.php on line 253
WARNING - 2018-02-27 09:35:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-02-27 09:35:10 --> Notice - Undefined index: id in /var/www/html/julianparrillaRep/fuel/app/classes/controller/canciones.php on line 244
WARNING - 2018-02-27 09:36:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 09:37:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 09:37:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 09:37:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 09:45:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 09:50:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 09:50:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 09:50:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-02-27 09:50:53 --> Error - Signature verification failed in /var/www/html/julianparrillaRep/fuel/vendor/firebase/php-jwt/src/JWT.php on line 112
WARNING - 2018-02-27 09:52:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 09:53:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 09:53:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 09:54:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-02-27 09:54:42 --> Error - Signature verification failed in /var/www/html/julianparrillaRep/fuel/vendor/firebase/php-jwt/src/JWT.php on line 112
WARNING - 2018-02-27 09:55:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 10:05:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 10:06:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 10:12:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 11:18:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 11:18:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 11:19:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-02-27 11:19:03 --> 23000 - SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'createdAt' cannot be null with query: "INSERT INTO `contiene` (`id_cancion`, `id_lista`, `createdAt`) VALUES ('1', '1', null)" in /var/www/html/julianparrillaRep/fuel/core/classes/database/pdo/connection.php on line 253
WARNING - 2018-02-27 11:20:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 11:21:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-02-27 11:21:53 --> 23000 - SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`BBDD_ejercicio3`.`contiene`, CONSTRAINT `foreignkeyCancionALista` FOREIGN KEY (`id_cancion`) REFERENCES `cancion` (`id`)) with query: "INSERT INTO `contiene` (`id_cancion`, `id_lista`, `createdAt`) VALUES ('123', '1', 1519730513)" in /var/www/html/julianparrillaRep/fuel/core/classes/database/pdo/connection.php on line 253
WARNING - 2018-02-27 11:22:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 11:22:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-02-27 11:22:45 --> 23000 - SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '2-2' for key 'PRIMARY' with query: "INSERT INTO `contiene` (`id_cancion`, `id_lista`, `createdAt`) VALUES ('2', '2', 1519730565)" in /var/www/html/julianparrillaRep/fuel/core/classes/database/pdo/connection.php on line 253
WARNING - 2018-02-27 11:22:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-02-27 11:22:46 --> 23000 - SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '2-2' for key 'PRIMARY' with query: "INSERT INTO `contiene` (`id_cancion`, `id_lista`, `createdAt`) VALUES ('2', '2', 1519730566)" in /var/www/html/julianparrillaRep/fuel/core/classes/database/pdo/connection.php on line 253
WARNING - 2018-02-27 11:23:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 11:24:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 11:26:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 11:40:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 11:43:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:27:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:27:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:27:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:27:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:27:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:27:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:27:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:27:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:27:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:27:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:28:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:28:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:28:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:28:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:28:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:28:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:28:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:28:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:28:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:28:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:28:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:28:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:28:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:44:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:44:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:44:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:44:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:44:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:46:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:46:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:48:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:49:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:50:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:50:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:51:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:51:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:51:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:51:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:51:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:51:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:52:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-02-27 14:52:23 --> Error - Call to a member function delete() on null in /var/www/html/julianparrillaRep/fuel/app/classes/controller/comentarios.php on line 57
WARNING - 2018-02-27 14:52:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:53:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:56:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:56:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:57:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:57:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:58:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:59:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 14:59:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 15:00:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-02-27 15:00:27 --> Error - Call to a member function delete() on null in /var/www/html/julianparrillaRep/fuel/app/classes/controller/comentarios.php on line 57
WARNING - 2018-02-27 15:00:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-02-27 15:00:33 --> Notice - Undefined index: id in /var/www/html/julianparrillaRep/fuel/app/classes/controller/comentarios.php on line 56
WARNING - 2018-02-27 15:01:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 15:27:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 15:27:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 15:27:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 15:27:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 15:27:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 15:27:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 15:27:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 15:28:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 15:29:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 15:29:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 15:29:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 15:30:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 15:31:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 15:31:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 15:31:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 15:31:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 15:31:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-02-27 15:31:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
