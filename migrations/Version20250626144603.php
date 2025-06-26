<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250626144603 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE chaises ADD modified_by_id INT DEFAULT NULL, ADD last_modified_at DATETIME DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE chaises ADD CONSTRAINT FK_A6D88B2899049ECE FOREIGN KEY (modified_by_id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_A6D88B2899049ECE ON chaises (modified_by_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE chaises DROP FOREIGN KEY FK_A6D88B2899049ECE
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_A6D88B2899049ECE ON chaises
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE chaises DROP modified_by_id, DROP last_modified_at
        SQL);
    }
}
