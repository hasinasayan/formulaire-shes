<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211026150608 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, civility VARCHAR(10) NOT NULL, lastname VARCHAR(100) NOT NULL, firstname VARCHAR(100) NOT NULL, date_of_birth DATE NOT NULL, email VARCHAR(100) NOT NULL, phone_number VARCHAR(10) NOT NULL, company_concept LONGTEXT DEFAULT NULL, company_composition LONGTEXT DEFAULT NULL, has_instagram TINYINT(1) DEFAULT NULL, instagram_account_id VARCHAR(100) DEFAULT NULL, problematic LONGTEXT DEFAULT NULL, motivation LONGTEXT DEFAULT NULL, mentor1 VARCHAR(100) DEFAULT NULL, mentor2 VARCHAR(100) DEFAULT NULL, mentor3 VARCHAR(100) DEFAULT NULL, mentor4 VARCHAR(100) DEFAULT NULL, mentor5 VARCHAR(100) DEFAULT NULL, future_news LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE contact');
    }
}
