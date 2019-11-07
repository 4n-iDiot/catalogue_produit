<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191107102516 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE marque_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE produit_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE marque (id INT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE produit (id INT NOT NULL, marque_id INT NOT NULL, prix DOUBLE PRECISION NOT NULL, nom VARCHAR(255) NOT NULL, référence VARCHAR(255) NOT NULL, date_mise_en_vente DATE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_29A5EC274827B9B2 ON produit (marque_id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC274827B9B2 FOREIGN KEY (marque_id) REFERENCES marque (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE produit DROP CONSTRAINT FK_29A5EC274827B9B2');
        $this->addSql('DROP SEQUENCE marque_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE produit_id_seq CASCADE');
        $this->addSql('DROP TABLE marque');
        $this->addSql('DROP TABLE produit');
    }
}
