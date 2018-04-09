<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180409135000 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE chocolate (id INT AUTO_INCREMENT NOT NULL, product_name VARCHAR(255) NOT NULL, ingrediants VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, price INT NOT NULL, reviewby VARCHAR(255) NOT NULL, date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE review (id INT AUTO_INCREMENT NOT NULL, chocolateid VARCHAR(255) NOT NULL, user VARCHAR(255) NOT NULL, review VARCHAR(255) NOT NULL, placeofpurchase VARCHAR(255) NOT NULL, pricepaid INT NOT NULL, numofstar VARCHAR(255) NOT NULL, date DATETIME NOT NULL, INDEX IDX_794381C64F040A03 (chocolateid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C64F040A03 FOREIGN KEY (chocolateid) REFERENCES chocolate (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C64F040A03');
        $this->addSql('DROP TABLE chocolate');
        $this->addSql('DROP TABLE review');
    }
}
