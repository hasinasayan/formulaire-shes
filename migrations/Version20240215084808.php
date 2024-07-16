<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240215084808 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact ADD demarche_rse LONGTEXT NOT NULL, ADD accompagnement_rse LONGTEXT NOT NULL, DROP civility');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact ADD civility VARCHAR(10) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, DROP demarche_rse, DROP accompagnement_rse');
    }
}
