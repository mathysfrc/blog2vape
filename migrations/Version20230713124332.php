<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230713124332 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vape ADD height INT NOT NULL, ADD length INT NOT NULL, ADD width INT NOT NULL, ADD diametre INT NOT NULL, ADD contenance INT NOT NULL, ADD type VARCHAR(255) NOT NULL, ADD accu INT NOT NULL, ADD puissance INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vape DROP height, DROP length, DROP width, DROP diametre, DROP contenance, DROP type, DROP accu, DROP puissance');
    }
}
