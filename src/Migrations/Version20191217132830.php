<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191217132830 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE artist (id INT AUTO_INCREMENT NOT NULL, id_seance_id INT NOT NULL, id_meeting_id INT NOT NULL, name VARCHAR(150) NOT NULL, picture VARCHAR(255) NOT NULL, category VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_1599687634CC6B3 (id_seance_id), UNIQUE INDEX UNIQ_1599687C2C9BD4B (id_meeting_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE festival (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(150) NOT NULL, description VARCHAR(255) NOT NULL, date DATE NOT NULL, address VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE meeting (id INT AUTO_INCREMENT NOT NULL, beginning DATETIME NOT NULL, ending DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE scene (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE seance (id INT AUTO_INCREMENT NOT NULL, id_scene_id INT NOT NULL, beginning TIME NOT NULL, ending TIME NOT NULL, date DATE NOT NULL, INDEX IDX_DF7DFD0E46BBBF21 (id_scene_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ticket (id INT AUTO_INCREMENT NOT NULL, id_festival_id INT DEFAULT NULL, beginning DATE NOT NULL, ending DATE NOT NULL, description VARCHAR(255) NOT NULL, INDEX IDX_97A0ADA392F962A0 (id_festival_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE artist ADD CONSTRAINT FK_1599687634CC6B3 FOREIGN KEY (id_seance_id) REFERENCES seance (id)');
        $this->addSql('ALTER TABLE artist ADD CONSTRAINT FK_1599687C2C9BD4B FOREIGN KEY (id_meeting_id) REFERENCES meeting (id)');
        $this->addSql('ALTER TABLE seance ADD CONSTRAINT FK_DF7DFD0E46BBBF21 FOREIGN KEY (id_scene_id) REFERENCES scene (id)');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA392F962A0 FOREIGN KEY (id_festival_id) REFERENCES festival (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA392F962A0');
        $this->addSql('ALTER TABLE artist DROP FOREIGN KEY FK_1599687C2C9BD4B');
        $this->addSql('ALTER TABLE seance DROP FOREIGN KEY FK_DF7DFD0E46BBBF21');
        $this->addSql('ALTER TABLE artist DROP FOREIGN KEY FK_1599687634CC6B3');
        $this->addSql('DROP TABLE artist');
        $this->addSql('DROP TABLE festival');
        $this->addSql('DROP TABLE meeting');
        $this->addSql('DROP TABLE scene');
        $this->addSql('DROP TABLE seance');
        $this->addSql('DROP TABLE ticket');
    }
}
