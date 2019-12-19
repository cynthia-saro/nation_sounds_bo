<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191218164439 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE actuality (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE festival ADD dates VARCHAR(150) NOT NULL, DROP date');
        $this->addSql('ALTER TABLE meeting DROP INDEX UNIQ_F515E139B7970CF8, ADD INDEX IDX_F515E139B7970CF8 (artist_id)');
        $this->addSql('ALTER TABLE security_info DROP link');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE actuality');
        $this->addSql('ALTER TABLE festival ADD date DATE NOT NULL, DROP dates');
        $this->addSql('ALTER TABLE meeting DROP INDEX IDX_F515E139B7970CF8, ADD UNIQUE INDEX UNIQ_F515E139B7970CF8 (artist_id)');
        $this->addSql('ALTER TABLE security_info ADD link VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
