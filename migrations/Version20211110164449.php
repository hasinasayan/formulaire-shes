<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211110164449 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact 
        ADD company_name VARCHAR(100) NOT NULL AFTER phone_number, 
        ADD company_website VARCHAR(255) DEFAULT NULL AFTER company_concept, 
        ADD company_creation_date DATE DEFAULT NULL COMMENT \'(DC2Type:date_immutable)\' AFTER company_composition, 
        ADD company_location VARCHAR(100) DEFAULT NULL AFTER company_creation_date, 
        ADD optin_phone_call TINYINT(1) DEFAULT NULL AFTER future_news, 
        ADD optin_email_sms TINYINT(1) DEFAULT NULL AFTER optin_phone_call');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact DROP company_name, DROP company_website, DROP company_creation_date, DROP company_location, DROP optin_phone_call, DROP optin_email_sms');
    }
}
