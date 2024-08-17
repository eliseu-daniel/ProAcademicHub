<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateProAcademicHubTables extends AbstractMigration
{
    public function change(): void
    {
        // Tabela Usuarios
        $this->table('Usuarios', ['id' => false, 'primary_key' => ['usuario_id']])
            ->addColumn('usuario_id', 'integer', ['identity' => true])
            ->addColumn('nome', 'string', ['limit' => 100])
            ->addColumn('email', 'string', ['limit' => 100])
            ->addColumn('senha', 'string', ['limit' => 255])
            ->addColumn('permissoes', 'enum', ['values' => ['admin', 'usuario'], 'default' => 'usuario'])
            ->addIndex(['email'], ['unique' => true])
            ->create();

        // Tabela Comentarios
        $this->table('Comentarios', ['id' => false, 'primary_key' => ['comentario_id']])
            ->addColumn('comentario_id', 'integer', ['identity' => true])
            ->addColumn('conteudo', 'text')
            ->addColumn('data', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('usuario_id', 'integer', ['null' => true])
            ->addColumn('tarefa_id', 'integer', ['null' => true])
            ->addForeignKey('usuario_id', 'Usuarios', 'usuario_id', ['delete' => 'SET_NULL', 'update' => 'NO_ACTION'])
            ->addForeignKey('tarefa_id', 'Tarefas', 'tarefa_id', ['delete' => 'SET_NULL', 'update' => 'NO_ACTION'])
            ->create();

        // Tabela Configuracoes
        $this->table('Configuracoes', ['id' => false, 'primary_key' => ['config_id']])
            ->addColumn('config_id', 'integer', ['identity' => true])
            ->addColumn('usuario_id', 'integer', ['null' => true])
            ->addColumn('preferencias', 'text', ['null' => true])
            ->addForeignKey('usuario_id', 'Usuarios', 'usuario_id', ['delete' => 'SET_NULL', 'update' => 'NO_ACTION'])
            ->create();

        // Tabela Projetos
        $this->table('Projetos', ['id' => false, 'primary_key' => ['projeto_id']])
            ->addColumn('projeto_id', 'integer', ['identity' => true])
            ->addColumn('titulo', 'string', ['limit' => 100])
            ->addColumn('descricao', 'text', ['null' => true])
            ->addColumn('data_inicio', 'date', ['null' => true])
            ->addColumn('data_termino', 'date', ['null' => true])
            ->addColumn('criador_id', 'integer', ['null' => true])
            ->addForeignKey('criador_id', 'Usuarios', 'usuario_id', ['delete' => 'SET_NULL', 'update' => 'NO_ACTION'])
            ->create();

        // Tabela Membros
        $this->table('Membros', ['id' => false, 'primary_key' => ['projeto_id', 'usuario_id']])
            ->addColumn('projeto_id', 'integer')
            ->addColumn('usuario_id', 'integer')
            ->addForeignKey('projeto_id', 'Projetos', 'projeto_id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
            ->addForeignKey('usuario_id', 'Usuarios', 'usuario_id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
            ->create();

        // Tabela Tarefas
        $this->table('Tarefas', ['id' => false, 'primary_key' => ['tarefa_id']])
            ->addColumn('tarefa_id', 'integer', ['identity' => true])
            ->addColumn('titulo', 'string', ['limit' => 100])
            ->addColumn('descricao', 'text', ['null' => true])
            ->addColumn('status', 'enum', ['values' => ['pendente', 'concluida'], 'default' => 'pendente'])
            ->addColumn('data_inicio', 'date', ['null' => true])
            ->addColumn('data_termino', 'date', ['null' => true])
            ->addColumn('projeto_id', 'integer', ['null' => true])
            ->addColumn('responsavel_id', 'integer', ['null' => true])
            ->addForeignKey('projeto_id', 'Projetos', 'projeto_id', ['delete' => 'SET_NULL', 'update' => 'NO_ACTION'])
            ->addForeignKey('responsavel_id', 'Usuarios', 'usuario_id', ['delete' => 'SET_NULL', 'update' => 'NO_ACTION'])
            ->create();

        // Tabela Relatorios
        $this->table('Relatorios', ['id' => false, 'primary_key' => ['relatorio_id']])
            ->addColumn('relatorio_id', 'integer', ['identity' => true])
            ->addColumn('tipo', 'enum', ['values' => ['progresso', 'desempenho']])
            ->addColumn('projeto_id', 'integer', ['null' => true])
            ->addColumn('conteudo', 'text')
            ->addColumn('data', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addForeignKey('projeto_id', 'Projetos', 'projeto_id', ['delete' => 'SET_NULL', 'update' => 'NO_ACTION'])
            ->create();
    }
}
