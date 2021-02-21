<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210221150945 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE eskap ALTER themes TYPE TEXT');
        $this->addSql('ALTER TABLE eskap ALTER themes DROP DEFAULT');
        $this->addSql('COMMENT ON COLUMN eskap.themes IS \'(DC2Type:simple_array)\'');
        $this->addSql('ALTER TABLE user_eskap ALTER donelist TYPE TEXT');
        $this->addSql('ALTER TABLE user_eskap ALTER donelist DROP DEFAULT');
        $this->addSql('ALTER TABLE user_eskap ALTER favlist TYPE TEXT');
        $this->addSql('ALTER TABLE user_eskap ALTER favlist DROP DEFAULT');
        $this->addSql('COMMENT ON COLUMN user_eskap.donelist IS \'(DC2Type:simple_array)\'');
        $this->addSql('COMMENT ON COLUMN user_eskap.favlist IS \'(DC2Type:simple_array)\'');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE user_eskap ALTER donelist TYPE TEXT');
        $this->addSql('ALTER TABLE user_eskap ALTER donelist DROP DEFAULT');
        $this->addSql('ALTER TABLE user_eskap ALTER favlist TYPE TEXT');
        $this->addSql('ALTER TABLE user_eskap ALTER favlist DROP DEFAULT');
        $this->addSql('COMMENT ON COLUMN user_eskap.donelist IS \'(DC2Type:array)\'');
        $this->addSql('COMMENT ON COLUMN user_eskap.favlist IS \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE eskap ALTER themes TYPE TEXT');
        $this->addSql('ALTER TABLE eskap ALTER themes DROP DEFAULT');
        $this->addSql('COMMENT ON COLUMN eskap.themes IS \'(DC2Type:array)\'');
    }
}
