<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210709125756 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE employee (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, age VARCHAR(255) NOT NULL, poste VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employee_experience (employee_id INT NOT NULL, experience_id INT NOT NULL, INDEX IDX_9D4771D78C03F15C (employee_id), INDEX IDX_9D4771D746E90E27 (experience_id), PRIMARY KEY(employee_id, experience_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE experience (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE employee_experience ADD CONSTRAINT FK_9D4771D78C03F15C FOREIGN KEY (employee_id) REFERENCES employee (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE employee_experience ADD CONSTRAINT FK_9D4771D746E90E27 FOREIGN KEY (experience_id) REFERENCES experience (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE employee_experience DROP FOREIGN KEY FK_9D4771D78C03F15C');
        $this->addSql('ALTER TABLE employee_experience DROP FOREIGN KEY FK_9D4771D746E90E27');
        $this->addSql('DROP TABLE employee');
        $this->addSql('DROP TABLE employee_experience');
        $this->addSql('DROP TABLE experience');
        $this->addSql('DROP TABLE user');
    }
}
