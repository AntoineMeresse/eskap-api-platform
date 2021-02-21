<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210221141933 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE eskap_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE review_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE eskap (id INT NOT NULL, name VARCHAR(255) DEFAULT NULL, difficulty VARCHAR(255) DEFAULT NULL, minprice VARCHAR(255) DEFAULT NULL, maxprice VARCHAR(255) DEFAULT NULL, imgurl VARCHAR(255) DEFAULT NULL, websiteurl VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, minplayer VARCHAR(255) DEFAULT NULL, maxplayer VARCHAR(255) DEFAULT NULL, roomnumber VARCHAR(255) DEFAULT NULL, number VARCHAR(255) DEFAULT NULL, street VARCHAR(255) DEFAULT NULL, city VARCHAR(255) DEFAULT NULL, country VARCHAR(255) DEFAULT NULL, latitude VARCHAR(255) DEFAULT NULL, longitude VARCHAR(255) DEFAULT NULL, themes TEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN eskap.themes IS \'(DC2Type:array)\'');
        $this->addSql('CREATE TABLE review (id INT NOT NULL, eskap_id INT DEFAULT NULL, userid VARCHAR(255) NOT NULL, text TEXT NOT NULL, rate DOUBLE PRECISION NOT NULL, publication_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_794381C614F7A6DA ON review (eskap_id)');
        $this->addSql('COMMENT ON COLUMN review.publication_date IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C614F7A6DA FOREIGN KEY (eskap_id) REFERENCES eskap (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE review DROP CONSTRAINT FK_794381C614F7A6DA');
        $this->addSql('DROP SEQUENCE eskap_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE review_id_seq CASCADE');
        $this->addSql('DROP TABLE eskap');
        $this->addSql('DROP TABLE review');
    }
}
