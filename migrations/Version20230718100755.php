<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230718100755 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_vape (user_id INT NOT NULL, vape_id INT NOT NULL, INDEX IDX_4E6321A3A76ED395 (user_id), INDEX IDX_4E6321A3BD561D4C (vape_id), PRIMARY KEY(user_id, vape_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_vape ADD CONSTRAINT FK_4E6321A3A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_vape ADD CONSTRAINT FK_4E6321A3BD561D4C FOREIGN KEY (vape_id) REFERENCES vape (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_vape DROP FOREIGN KEY FK_4E6321A3A76ED395');
        $this->addSql('ALTER TABLE user_vape DROP FOREIGN KEY FK_4E6321A3BD561D4C');
        $this->addSql('DROP TABLE user_vape');
    }
}
