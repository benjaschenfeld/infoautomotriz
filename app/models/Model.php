<?php
require_once './config.php';

class Model {
    protected $db;

    function __construct() {
      $this->db = new PDO('mysql:host='. MYSQL_HOST .';dbname='. MYSQL_DB .';charset=utf8', MYSQL_USER, MYSQL_PASS);
      $this->deploy();
  }

    private function deploy() {
        $query = $this->db->query('SHOW TABLES');
        $tables = $query->fetchAll();
        if (count($tables) == 0) {
            $sql = <<<END
            CREATE TABLE `autos` (
                `id_auto` int(255) NOT NULL,
                `nombre` varchar(25) NOT NULL,
                `anio` int(25) NOT NULL,
                `motor` varchar(25) NOT NULL,
                `color` varchar(100) NOT NULL,
                `marca` varchar(100) NOT NULL,
                `id_categoria_ext` int(11) NOT NULL
              ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
              
              --
              -- Volcado de datos para la tabla `autos`
              --
              
              INSERT INTO `autos` (`id_auto`, `nombre`, `anio`, `motor`, `color`, `marca`, `id_categoria_ext`) VALUES
              (3, 'x6', 2018, 'v8', 'negro', 'BMW', 1),
              (4, 'Fluence', 2014, '1.6', 'Blanco', 'Renault', 2),
              (5, 'Fluence', 2014, '1.6', 'Blanco', 'Renault', 2);
              
              -- --------------------------------------------------------
              
              --
              -- Estructura de tabla para la tabla `categoria`
              --
              
              CREATE TABLE `categoria` (
                `id_categoria` int(255) NOT NULL,
                `nombre` varchar(100) NOT NULL,
                `caracteristicas` varchar(1000) NOT NULL
              ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
              
              --
              -- Volcado de datos para la tabla `categoria`
              --
              
              INSERT INTO `categoria` (`id_categoria`, `nombre`, `caracteristicas`) VALUES
              (1, 'Coupe', 'No tiene cola, estructura rigida'),
              (2, 'sedan', '5 puertas'),
              (3, 'Deportivos', 'Tienen mejor aceleración, velocidad máxima, adherencia al asfalto, mejor sistema de frenado y una mayor potencia que otros coches convencionales, lo que se logra mediante motores, frenos, suspensión, caja de cambios, neumáticos, chasis y tipo de carrocería especiales.'),
              (4, 'Deportivos', 'Tienen mejor aceleración, velocidad máxima, adherencia al asfalto, mejor sistema de frenado y una mayor potencia que otros coches convencionales, lo que se logra mediante motores, frenos, suspensión, caja de cambios, neumáticos, chasis y tipo de carrocería especiales.');
              
              --
              -- Índices para tablas volcadas
              --
              
              --
              -- Indices de la tabla `autos`
              --
              ALTER TABLE `autos`
                ADD PRIMARY KEY (`id_auto`),
                ADD KEY `fk_id_categoria` (`id_categoria_ext`);
              
              --
              -- Indices de la tabla `categoria`
              --
              ALTER TABLE `categoria`
                ADD PRIMARY KEY (`id_categoria`);
              
              --
              -- AUTO_INCREMENT de las tablas volcadas
              --
              
              --
              -- AUTO_INCREMENT de la tabla `autos`
              --
              ALTER TABLE `autos`
                MODIFY `id_auto` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
              
              --
              -- AUTO_INCREMENT de la tabla `categoria`
              --
              ALTER TABLE `categoria`
                MODIFY `id_categoria` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
              
              --
              -- Restricciones para tablas volcadas
              --
              
              --
              -- Filtros para la tabla `autos`
              --
              ALTER TABLE `autos`
                ADD CONSTRAINT `autos_ibfk_1` FOREIGN KEY (`id_categoria_ext`) REFERENCES `categoria` (`id_categoria`) ON UPDATE CASCADE;
              COMMIT;

END;
            $this->db->query($sql); 
        }
    }
}


