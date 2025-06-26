<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250626071310 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE type_de_chaise (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE types
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE chaises ADD type_id INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE chaises ADD CONSTRAINT FK_A6D88B28C54C8C93 FOREIGN KEY (type_id) REFERENCES type_de_chaise (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_A6D88B28C54C8C93 ON chaises (type_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE commentaires ADD chaises_id INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE commentaires ADD CONSTRAINT FK_D9BEC0C460C9A8 FOREIGN KEY (chaises_id) REFERENCES chaises (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_D9BEC0C460C9A8 ON commentaires (chaises_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE chaises DROP FOREIGN KEY FK_A6D88B28C54C8C93
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE types (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE type_de_chaise
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_A6D88B28C54C8C93 ON chaises
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE chaises DROP type_id
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE commentaires DROP FOREIGN KEY FK_D9BEC0C460C9A8
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_D9BEC0C460C9A8 ON commentaires
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE commentaires DROP chaises_id
        SQL);
    }
}
