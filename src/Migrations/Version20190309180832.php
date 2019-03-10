<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190309180832 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE technology_map DROP FOREIGN KEY FK_2C80C71EDE18E50B');
        $this->addSql('DROP INDEX IDX_2C80C71EDE18E50B ON technology_map');
        $this->addSql('ALTER TABLE technology_map CHANGE product_id_id product_id INT NOT NULL');
        $this->addSql('ALTER TABLE technology_map ADD CONSTRAINT FK_2C80C71E4584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('CREATE INDEX IDX_2C80C71E4584665A ON technology_map (product_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE technology_map DROP FOREIGN KEY FK_2C80C71E4584665A');
        $this->addSql('DROP INDEX IDX_2C80C71E4584665A ON technology_map');
        $this->addSql('ALTER TABLE technology_map CHANGE product_id product_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE technology_map ADD CONSTRAINT FK_2C80C71EDE18E50B FOREIGN KEY (product_id_id) REFERENCES product (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_2C80C71EDE18E50B ON technology_map (product_id_id)');
    }
}
