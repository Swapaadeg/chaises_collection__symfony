<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250701072524 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE chaises_couleurs (chaises_id INT NOT NULL, couleurs_id INT NOT NULL, INDEX IDX_858397FD60C9A8 (chaises_id), INDEX IDX_858397FD5ED47289 (couleurs_id), PRIMARY KEY(chaises_id, couleurs_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE couleurs (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE chaises_couleurs ADD CONSTRAINT FK_858397FD60C9A8 FOREIGN KEY (chaises_id) REFERENCES chaises (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE chaises_couleurs ADD CONSTRAINT FK_858397FD5ED47289 FOREIGN KEY (couleurs_id) REFERENCES couleurs (id) ON DELETE CASCADE
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE chaises_couleurs DROP FOREIGN KEY FK_858397FD60C9A8
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE chaises_couleurs DROP FOREIGN KEY FK_858397FD5ED47289
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE chaises_couleurs
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE couleurs
        SQL);
    }
}
