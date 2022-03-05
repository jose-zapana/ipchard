<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Módulo Permisos
        //Módulo Tiendas
        Permission::create([
            'name' => 'create_store',
            'description' => 'Visualizar Formulario de Creación' // Permiso para ver el formulario
        ]);
        Permission::create([
            'name' => 'save_store',
            'description' => 'Guardar información de Tienda' //Permiso para guardar datos de una tienda
        ]);
        Permission::create([
            'name' => 'edit_store',
            'description' => 'Visualizar Formulario de edición' //Permiso para visualizar Form de Editar una tienda
        ]);
        Permission::create([
            'name' => 'update_store',
            'description' => 'Actualizar datos de la tienda' //Permiso para actualizar datos de la tienda
        ]);
        Permission::create([
            'name' => 'destroy_store',
            'description' => 'Eliminar Tiendas'
        ]);
        Permission::create([
            'name' => 'restore_store',
            'description' => 'Restaurar Tiendas' //ver y guardar el formulario de tiendas
        ]);
        //Módulo Categorias
        //Módulo Productos

        //Módulo Clientes
        //Módulo Pedidos
        //Módulo Método Pago
        //Módulo Método Envio
    }
}
