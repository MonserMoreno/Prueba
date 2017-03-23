<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note;

class NoteTest extends TestCase
{
    use WithoutMiddleware;
      public function test_notes_list()
    {
      Note::create(['notes' => 'Mi primer nota']);
      Note::create(['notes' => 'Segunda nota']);
      Note::create(['notes' => 'Tercer nota']);

     //Cuando
     $this->visit('notes')
       //Entonces
       ->see('M ')
       ->see('Se')
       ->see('Tercer');

    }

      public function test_crear_notes()
      {
        $this->post('notes')
          ->see('Creando ruta');
      }
}
