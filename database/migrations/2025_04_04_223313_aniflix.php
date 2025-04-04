<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('filmes', function (Blueprint $table) {
            $table->id();
            $table->char('codigo', 8)->unique();
            $table->string('titulo', 200);
            $table->enum('audio', ['Dublado', 'Legendado', 'Nacional', 'Desconhecido']);
            $table->string('sinopse', 1000);
            $table->string('titulo_original', 100);
            $table->char('data_lancamento', 10);
            $table->string('titulo_alternativo', 100);
            $table->string('franquia', 200);
            $table->string('genero', 200);
            $table->string('tags', 200);
            $table->string('diretor', 300);
            $table->string('estrelas', 200);
            $table->string('estudio', 300);
            $table->string('mcu', 20);
            $table->timestamps();
        });

        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->char('codigo', 8)->unique();
            $table->string('titulo', 200);
            $table->enum('audio', ['Dublado', 'Legendado', 'Nacional', 'Desconhecido']);
            $table->string('sinopse', 1000);
            $table->string('titulo_original', 100);
            $table->char('data_lancamento', 10);
            $table->string('titulo_alternativo', 100);
            $table->string('pais_origem', 200);
            $table->string('idioma_original', 200);
            $table->string('serie', 200);
            $table->string('autores', 200);
            $table->string('criadores', 200);
            $table->string('obra_original', 200);
            $table->string('genero', 200);
            $table->string('tags', 200);
            $table->string('diretor', 300);
            $table->string('estrelas', 200);
            $table->string('estudio', 300);
            $table->string('mcu', 20);
            $table->timestamps();
        });

        Schema::create('animes', function (Blueprint $table) {
            $table->id();
            $table->char('codigo', 8)->unique();
            $table->string('titulo', 200);
            $table->enum('audio', ['Dublado', 'Legendado', 'Desconhecido']);
            $table->string('sinopse', 1000);
            $table->string('titulo_original', 100);
            $table->char('data_lancamento', 10);
            $table->string('titulo_alternativo', 100);
            $table->string('franquia', 200);
            $table->string('pais_origem', 200);
            $table->string('idioma_original', 200);
            $table->string('anime', 200);
            $table->string('autores', 200);
            $table->string('genero', 200);
            $table->string('tags', 200);
            $table->string('diretor', 300);
            $table->string('estrelas', 200);
            $table->string('estudio', 300);
            $table->timestamps();
        });

        Schema::create('animes_filmes', function (Blueprint $table) {
            $table->id();
            $table->char('codigo', 8)->unique();
            $table->string('titulo', 200);
            $table->enum('audio', ['Dublado', 'Legendado', 'Nacional', 'Desconhecido']);
            $table->string('sinopse', 1000);
            $table->string('titulo_original', 100);
            $table->char('data_lancamento', 10);
            $table->string('titulo_alternativo', 100);
            $table->string('franquia', 200);
            $table->string('genero', 200);
            $table->string('tags', 200);
            $table->string('diretor', 300);
            $table->string('estrelas', 200);
            $table->string('estudio', 300);
            $table->timestamps();
        });

        Schema::create('gore_filmes', function (Blueprint $table) {
            $table->id();
            $table->char('codigo', 8)->unique();
            $table->string('titulo', 200);
            $table->enum('audio', ['Dublado', 'Legendado', 'Nacional', 'Desconhecido']);
            $table->string('sinopse', 1000);
            $table->string('titulo_original', 100);
            $table->char('data_lancamento', 10);
            $table->string('titulo_alternativo', 100);
            $table->string('franquia', 200);
            $table->string('genero', 200);
            $table->string('tags', 200);
            $table->string('diretor', 300);
            $table->string('estrelas', 200);
            $table->string('estudio', 300);
            $table->string('mcu', 20);
            $table->timestamps();
        });

        Schema::create('gore_series', function (Blueprint $table) {
            $table->id();
            $table->char('codigo', 8)->unique();
            $table->string('titulo', 200);
            $table->enum('audio', ['Dublado', 'Legendado', 'Nacional', 'Desconhecido']);
            $table->string('sinopse', 1000);
            $table->string('titulo_original', 100);
            $table->char('data_lancamento', 10);
            $table->string('titulo_alternativo', 100);
            $table->string('pais_origem', 200);
            $table->string('idioma_original', 200);
            $table->string('serie', 200);
            $table->string('autores', 200);
            $table->string('criadores', 200);
            $table->string('obra_original', 200);
            $table->string('genero', 200);
            $table->string('tags', 200);
            $table->string('diretor', 300);
            $table->string('estrelas', 200);
            $table->string('estudio', 300);
            $table->string('mcu', 20);
            $table->timestamps();
        });

        Schema::create('breakout_filmes', function (Blueprint $table) {
            $table->id();
            $table->char('codigo', 8)->unique();
            $table->string('titulo', 200);
            $table->enum('audio', ['Dublado', 'Legendado', 'Nacional', 'Desconhecido']);
            $table->string('sinopse', 1000);
            $table->string('titulo_original', 100);
            $table->char('data_lancamento', 10);
            $table->string('titulo_alternativo', 100);
            $table->string('franquia', 200);
            $table->string('genero', 200);
            $table->string('tags', 200);
            $table->string('diretor', 300);
            $table->string('estrelas', 200);
            $table->string('estudio', 300);
            $table->timestamps();
        });

        Schema::create('breakout_series', function (Blueprint $table) {
            $table->id();
            $table->char('codigo', 8)->unique();
            $table->string('titulo', 200);
            $table->enum('audio', ['Dublado', 'Legendado', 'Nacional', 'Desconhecido']);
            $table->string('sinopse', 1000);
            $table->string('titulo_original', 100);
            $table->char('data_lancamento', 10);
            $table->string('titulo_alternativo', 100);
            $table->string('pais_origem', 200);
            $table->string('idioma_original', 200);
            $table->string('serie', 200);
            $table->string('autores', 200);
            $table->string('criadores', 200);
            $table->string('obra_original', 200);
            $table->string('genero', 200);
            $table->string('tags', 200);
            $table->string('diretor', 300);
            $table->string('estrelas', 200);
            $table->string('estudio', 300);
            $table->string('mcu', 20);
            $table->timestamps();
        });

        Schema::create('trashflix', function (Blueprint $table) {
            $table->id();
            $table->char('codigo', 8)->unique();
            $table->string('titulo', 200);
            $table->enum('audio', ['Dublado', 'Legendado', 'Nacional', 'Desconhecido']);
            $table->string('sinopse', 1000);
            $table->string('titulo_original', 100);
            $table->char('data_lancamento', 10);
            $table->string('titulo_alternativo', 100);
            $table->string('franquia', 200);
            $table->string('genero', 200);
            $table->string('tags', 200);
            $table->string('diretor', 300);
            $table->string('estrelas', 200);
            $table->string('estudio', 300);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trashflix');
        Schema::dropIfExists('breakout_series');
        Schema::dropIfExists('breakout_filmes');
        Schema::dropIfExists('gore_series');
        Schema::dropIfExists('gore_filmes');
        Schema::dropIfExists('animes_filmes');
        Schema::dropIfExists('animes');
        Schema::dropIfExists('series');
        Schema::dropIfExists('filmes');
    }
};
