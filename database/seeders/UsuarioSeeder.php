<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i <= 400; $i++){ 
            $cidades = collect(['Florianópolis', 'Joinville', 'Rio de Janeiro', 'Lins', 'Goiânia', 'Curitiba',
            'Salvados', 'Manaus', 'Belo Horizonte', 'Caxias']);

            $estados = collect(['SC', 'RJ', 'GO', 'SP', 'PR', 'MG', 'BA', 'AM', 'MA']);

            Usuario::create([
                'nome' => 'Celson Da silva',
                'email' => 'celsopolic21@gmail.com',
                'celular' => '+55' . rand(11, 99) . rand(1111, 9999) .'-'. rand(1111, 9999),
                'estado_civil' => 'Casado',
                'data_nascimento' => rand(1990, 2005) . '-' . rand(1, 12) . '-' . rand(1, 31),
                'cidade' => $cidades->random(),
                'estado' => $estados->random(),
                'endereco' => 'Rua Afonso Misto N°' . rand(01, 90) .'-'. rand(01, 90),
                'cep' => rand(10000, 99999) . '-000',
                'password' => Hash::make('password'),
                ]);
    }
}
}