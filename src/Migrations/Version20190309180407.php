<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190309180407 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE material (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(200) NOT NULL, code_material VARCHAR(100) NOT NULL, img VARCHAR(1000) DEFAULT NULL, balance INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE technology_map_position (id INT AUTO_INCREMENT NOT NULL, technology_map_id INT NOT NULL, material_id INT NOT NULL, amount INT NOT NULL, INDEX IDX_84F559E719FA89CF (technology_map_id), INDEX IDX_84F559E7E308AC6F (material_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE technology_map_position ADD CONSTRAINT FK_84F559E719FA89CF FOREIGN KEY (technology_map_id) REFERENCES technology_map (id)');
        $this->addSql('ALTER TABLE technology_map_position ADD CONSTRAINT FK_84F559E7E308AC6F FOREIGN KEY (material_id) REFERENCES material (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE technology_map_position DROP FOREIGN KEY FK_84F559E7E308AC6F');
        $this->addSql('DROP TABLE material');
        $this->addSql('DROP TABLE technology_map_position');
    }
}
