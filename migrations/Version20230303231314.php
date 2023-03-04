<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230303231314 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE topic (id VARCHAR(255) NOT NULL, type_id VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, subtitle VARCHAR(255) NOT NULL, case_study VARCHAR(255) NOT NULL, location VARCHAR(255) NOT NULL, challenges LONGTEXT NOT NULL, solutions LONGTEXT NOT NULL, highlights LONGTEXT NOT NULL, image VARCHAR(255) NOT NULL, slug VARCHAR(255) DEFAULT NULL, video VARCHAR(255) DEFAULT NULL, link VARCHAR(255) NOT NULL, to_publish TINYINT(1) DEFAULT NULL, INDEX IDX_9D40DE1BC54C8C93 (type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type (id VARCHAR(255) NOT NULL, type VARCHAR(100) NOT NULL, title VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, subtitle VARCHAR(255) NOT NULL, link VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id CHAR(36) NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, created_on DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_on DATETIME NOT NULL, is_active TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE topic ADD CONSTRAINT FK_9D40DE1BC54C8C93 FOREIGN KEY (type_id) REFERENCES type (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE topic DROP FOREIGN KEY FK_9D40DE1BC54C8C93');
        $this->addSql('DROP TABLE topic');
        $this->addSql('DROP TABLE type');
        $this->addSql('DROP TABLE `user`');
    }
}
