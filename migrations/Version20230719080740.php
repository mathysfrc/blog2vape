<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230719080740 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vape DROP FOREIGN KEY FK_34E26D6A12469DE2');
        $this->addSql('DROP TABLE vape_category');
        $this->addSql('DROP INDEX IDX_34E26D6A12469DE2 ON vape');
        $this->addSql('ALTER TABLE vape ADD category VARCHAR(255) DEFAULT NULL, DROP category_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE vape_category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE vape ADD category_id INT DEFAULT NULL, DROP category');
        $this->addSql('ALTER TABLE vape ADD CONSTRAINT FK_34E26D6A12469DE2 FOREIGN KEY (category_id) REFERENCES vape_category (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_34E26D6A12469DE2 ON vape (category_id)');
    }
}
