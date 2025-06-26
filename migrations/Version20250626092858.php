<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250626092858 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE chaises ADD user_id INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE chaises ADD CONSTRAINT FK_A6D88B28A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_A6D88B28A76ED395 ON chaises (user_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE commentaires ADD user_id INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE commentaires ADD CONSTRAINT FK_D9BEC0C4A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_D9BEC0C4A76ED395 ON commentaires (user_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE chaises DROP FOREIGN KEY FK_A6D88B28A76ED395
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_A6D88B28A76ED395 ON chaises
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE chaises DROP user_id
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE commentaires DROP FOREIGN KEY FK_D9BEC0C4A76ED395
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_D9BEC0C4A76ED395 ON commentaires
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE commentaires DROP user_id
        SQL);
    }
}
