<?php

$rutas = [
    'GET' => [
        // Listar (GET all)
        '/cliente'    => ['ClienteController', 'listar'],
        '/clientes'   => ['ClienteController', 'listar'],
        '/producto'   => ['ProductoController', 'listar'],
        '/productos'  => ['ProductoController', 'listar'],
        '/categoria'  => ['CategoriaController', 'listar'],
        '/categorias' => ['CategoriaController', 'listar'],
        '/compra'     => ['CompraController', 'listar'],
        '/compras'    => ['CompraController', 'listar'],
        '/proveedor'  => ['ProveedorController', 'listar'],
        '/proveedores'=> ['ProveedorController', 'listar'],
        '/venta'      => ['VentaController', 'listar'], 
        '/ventas'     => ['VentaController', 'listar'],

        // Formularios de creación (GET)
        '/cliente/crear'    => ['ClienteController', 'crear'],
        '/clientes/crear'   => ['ClienteController', 'crear'],
        '/producto/crear'   => ['ProductoController', 'crear'],
        '/productos/crear'  => ['ProductoController', 'crear'],
        '/categoria/crear'  => ['CategoriaController', 'crear'],
        '/categorias/crear' => ['CategoriaController', 'crear'],
        '/compra/crear'     => ['CompraController', 'crear'],
        '/compras/crear'    => ['CompraController', 'crear'],
        '/proveedor/crear'  => ['ProveedorController', 'crear'],
        '/proveedores/crear'=> ['ProveedorController', 'crear'],
        '/venta/crear'      => ['VentaController', 'crear'],
        '/ventas/crear'     => ['VentaController', 'crear'],

        // Formularios de edición (GET)
        '/cliente/editar'   => ['ClienteController', 'editar'],
        '/producto/editar'  => ['ProductoController', 'editar'],
        '/categoria/editar' => ['CategoriaController', 'editar'],
        '/compra/editar'    => ['CompraController', 'editar'],
        '/proveedor/editar' => ['ProveedorController', 'editar'],
        '/venta/editar'     => ['VentaController', 'editar'],
    ],

    'POST' => [
        // Guardar nuevos registros
        '/cliente'    => ['ClienteController', 'guardar'],
        '/clientes'   => ['ClienteController', 'guardar'],
        '/producto'   => ['ProductoController', 'guardar'],
        '/productos'  => ['ProductoController', 'guardar'],
        '/categoria'  => ['CategoriaController', 'guardar'],
        '/categorias' => ['CategoriaController', 'guardar'],
        '/compra'     => ['CompraController', 'guardar'],
        '/compras'    => ['CompraController', 'guardar'],
        '/proveedor'  => ['ProveedorController', 'guardar'],
        '/proveedores'=> ['ProveedorController', 'guardar'],
        '/venta'      => ['VentaController', 'guardar'],
        '/ventas'     => ['VentaController', 'guardar'],

        // Actualizar registros existentes
        '/cliente/editar'     => ['ClienteController', 'actualizar'],
        '/cliente/actualizar' => ['ClienteController', 'actualizar'],
        '/producto/editar'    => ['ProductoController', 'actualizar'],
        '/producto/actualizar'=> ['ProductoController', 'actualizar'],
        '/categoria/editar'   => ['CategoriaController', 'actualizar'],
        '/categoria/actualizar'=> ['CategoriaController', 'actualizar'],
        '/compra/editar'      => ['CompraController', 'actualizar'],
        '/compra/actualizar'  => ['CompraController', 'actualizar'],
        '/proveedor/editar'   => ['ProveedorController', 'actualizar'],
        '/proveedor/actualizar'=> ['ProveedorController', 'actualizar'],
        '/venta/editar'       => ['VentaController', 'actualizar'],
        '/venta/actualizar'   => ['VentaController', 'actualizar'],

        // Eliminar registros
        '/cliente/eliminar'   => ['ClienteController', 'eliminar'],
        '/producto/eliminar'  => ['ProductoController', 'eliminar'],
        '/categoria/eliminar' => ['CategoriaController', 'eliminar'],
        '/compra/eliminar'    => ['CompraController', 'eliminar'],
        '/proveedor/eliminar' => ['ProveedorController', 'eliminar'],
        '/venta/eliminar'     => ['VentaController', 'eliminar'],
    ],
];