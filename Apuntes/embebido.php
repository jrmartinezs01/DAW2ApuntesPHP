<?php
    //1, Obtenemos los datos
    $productos = [
        ['nombre' => 'Portatil', 'precio' => 899.99, 'stock' => 4],
        ['nombre' => 'Monitor', 'precio' => 219.50, 'stock' => 0],
        ['nombre' => 'Teclado', 'precio' => 79.90, 'stock' => 12],
        ['nombre' => 'Ratón', 'precio' => 39.95, 'stock' => 8],
    ];
        //2. Proceso los datos
        $totalProductos = count($productos);
        $productosDisponibles = 0;

        foreach ($productos as $producto) {
            if ($producto['stock'] > 0) {
                $productosDisponibles++;
            }
        }
        $totalValorStock = 0;
        foreach ($productos as $producto) {
            $totalValorStock += $producto['precio'] * $producto['stock'];
        }

        function estaDisponible($stock) {
            if ($stock > 0)
                return '<span class="disponible">Disponible</span>';
                return '<span class="agotado">Agotado</span>';
        }

        function descuento($precio) {
            $precioFinal = "";
            if ($precio >= 200) {
                $precioFinal .= number_format($precio * 0.90, 2, ',', '.') . ' €';
                $precioFinal .= ' <small>(10% descuento)</small>';
            } else {
                $precioFinal .= number_format($precio, 2, ',', '.') . ' €';
            }
            return $precioFinal;
        }
    
        include('pagina.html');

