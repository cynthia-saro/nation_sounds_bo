<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191217164704 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE artist DROP FOREIGN KEY FK_1599687634CC6B3');
        $this->addSql('ALTER TABLE artist DROP FOREIGN KEY FK_1599687C2C9BD4B');
        $this->addSql('DROP INDEX UNIQ_1599687C2C9BD4B ON artist');
        $this->addSql('DROP INDEX UNIQ_1599687634CC6B3 ON artist');
        $this->addSql('ALTER TABLE artist DROP id_seance_id, DROP id_meeting_id');
        $this->addSql('ALTER TABLE meeting ADD artist_id INT NOT NULL');
        $this->addSql('ALTER TABLE meeting ADD CONSTRAINT FK_F515E139B7970CF8 FOREIGN KEY (artist_id) REFERENCES artist (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F515E139B7970CF8 ON meeting (artist_id)');
        $this->addSql('ALTER TABLE seance ADD artist_id INT NOT NULL');
        $this->addSql('ALTER TABLE seance ADD CONSTRAINT FK_DF7DFD0EB7970CF8 FOREIGN KEY (artist_id) REFERENCES artist (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_DF7DFD0EB7970CF8 ON seance (artist_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE artist ADD id_seance_id INT NOT NULL, ADD id_meeting_id INT NOT NULL');
        $this->addSql('ALTER TABLE artist ADD CONSTRAINT FK_1599687634CC6B3 FOREIGN KEY (id_seance_id) REFERENCES seance (id)');
        $this->addSql('ALTER TABLE artist ADD CONSTRAINT FK_1599687C2C9BD4B FOREIGN KEY (id_meeting_id) REFERENCES meeting (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1599687C2C9BD4B ON artist (id_meeting_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1599687634CC6B3 ON artist (id_seance_id)');
        $this->addSql('ALTER TABLE meeting DROP FOREIGN KEY FK_F515E139B7970CF8');
        $this->addSql('DROP INDEX UNIQ_F515E139B7970CF8 ON meeting');
        $this->addSql('ALTER TABLE meeting DROP artist_id');
        $this->addSql('ALTER TABLE seance DROP FOREIGN KEY FK_DF7DFD0EB7970CF8');
        $this->addSql('DROP INDEX UNIQ_DF7DFD0EB7970CF8 ON seance');
        $this->addSql('ALTER TABLE seance DROP artist_id');
    }
}
