<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180410092024 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(25) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json_array)\', UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP INDEX IDX_794381C64F040A03 ON review');
        $this->addSql('ALTER TABLE review ADD chocolate_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C694D3F813 FOREIGN KEY (chocolate_id) REFERENCES chocolate (id)');
        $this->addSql('CREATE INDEX IDX_794381C694D3F813 ON review (chocolate_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C694D3F813');
        $this->addSql('DROP INDEX IDX_794381C694D3F813 ON review');
        $this->addSql('ALTER TABLE review DROP chocolate_id');
        $this->addSql('CREATE INDEX IDX_794381C64F040A03 ON review (chocolateid)');
    }
}
