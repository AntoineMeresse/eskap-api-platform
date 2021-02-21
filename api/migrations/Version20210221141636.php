<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210221141636 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE eskap_user_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE user_eskap_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE user_eskap (id INT NOT NULL, userid VARCHAR(255) DEFAULT NULL, firstname VARCHAR(255) DEFAULT NULL, lastname VARCHAR(255) DEFAULT NULL, donelist TEXT NOT NULL, favlist TEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN user_eskap.donelist IS \'(DC2Type:array)\'');
        $this->addSql('COMMENT ON COLUMN user_eskap.favlist IS \'(DC2Type:array)\'');
        $this->addSql('DROP TABLE eskap_user');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE user_eskap_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE eskap_user_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE eskap_user (id INT NOT NULL, userid VARCHAR(255) DEFAULT NULL, firstname VARCHAR(255) DEFAULT NULL, lastname VARCHAR(255) DEFAULT NULL, donelist TEXT NOT NULL, favlist TEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN eskap_user.donelist IS \'(DC2Type:array)\'');
        $this->addSql('COMMENT ON COLUMN eskap_user.favlist IS \'(DC2Type:array)\'');
        $this->addSql('DROP TABLE user_eskap');
    }
}
