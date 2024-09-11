<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240911171321 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE brand (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, logo VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE color (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE newsletter_email (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, creation_date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sneaker (id INT AUTO_INCREMENT NOT NULL, brand_id INT NOT NULL, category_id INT NOT NULL, color_id INT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, size DOUBLE PRECISION NOT NULL, sneaker_condition INT NOT NULL, price VARCHAR(255) NOT NULL, image VARCHAR(255) DEFAULT NULL, INDEX IDX_4259B88A44F5D008 (brand_id), INDEX IDX_4259B88A12469DE2 (category_id), INDEX IDX_4259B88A7ADA1FB5 (color_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sneaker_sell (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, size DOUBLE PRECISION NOT NULL, sneaker_condition INT NOT NULL, brand VARCHAR(255) NOT NULL, category VARCHAR(255) DEFAULT NULL, color VARCHAR(255) NOT NULL, price VARCHAR(255) NOT NULL, image VARCHAR(255) DEFAULT NULL, proof_of_purchase VARCHAR(255) DEFAULT NULL, pseudo VARCHAR(255) NOT NULL, email_customer VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sneaker ADD CONSTRAINT FK_4259B88A44F5D008 FOREIGN KEY (brand_id) REFERENCES brand (id)');
        $this->addSql('ALTER TABLE sneaker ADD CONSTRAINT FK_4259B88A12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE sneaker ADD CONSTRAINT FK_4259B88A7ADA1FB5 FOREIGN KEY (color_id) REFERENCES color (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sneaker DROP FOREIGN KEY FK_4259B88A44F5D008');
        $this->addSql('ALTER TABLE sneaker DROP FOREIGN KEY FK_4259B88A12469DE2');
        $this->addSql('ALTER TABLE sneaker DROP FOREIGN KEY FK_4259B88A7ADA1FB5');
        $this->addSql('DROP TABLE brand');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE color');
        $this->addSql('DROP TABLE newsletter_email');
        $this->addSql('DROP TABLE sneaker');
        $this->addSql('DROP TABLE sneaker_sell');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
