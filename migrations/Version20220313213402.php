<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220313213402 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE publisher_game (publisher_id INT NOT NULL, game_id INT NOT NULL, INDEX IDX_C232E1DB40C86FCE (publisher_id), INDEX IDX_C232E1DBE48FD905 (game_id), PRIMARY KEY(publisher_id, game_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE publisher_game ADD CONSTRAINT FK_C232E1DB40C86FCE FOREIGN KEY (publisher_id) REFERENCES publisher (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE publisher_game ADD CONSTRAINT FK_C232E1DBE48FD905 FOREIGN KEY (game_id) REFERENCES game (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE publisher_game');
    }
}
