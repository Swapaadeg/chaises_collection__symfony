<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250630155637 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE chaises_tags DROP FOREIGN KEY FK_82B7CE2560C9A8
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE chaises_tags DROP FOREIGN KEY FK_82B7CE258D7B4FB4
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE tags
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE chaises_tags
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE tags (id INT AUTO_INCREMENT NOT NULL, couleur VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, materiaux VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE chaises_tags (chaises_id INT NOT NULL, tags_id INT NOT NULL, INDEX IDX_82B7CE2560C9A8 (chaises_id), INDEX IDX_82B7CE258D7B4FB4 (tags_id), PRIMARY KEY(chaises_id, tags_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE chaises_tags ADD CONSTRAINT FK_82B7CE2560C9A8 FOREIGN KEY (chaises_id) REFERENCES chaises (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE chaises_tags ADD CONSTRAINT FK_82B7CE258D7B4FB4 FOREIGN KEY (tags_id) REFERENCES tags (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
    }
}
