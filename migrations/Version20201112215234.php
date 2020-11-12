<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201112215234 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blog_post DROP CONSTRAINT fk_ba5ae01df675f31b');
        $this->addSql('DROP INDEX idx_ba5ae01df675f31b');
        $this->addSql('ALTER TABLE blog_post ADD author VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE blog_post DROP author_id');
        $this->addSql('ALTER TABLE blog_post ALTER blog_content TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE user_profile DROP image');
        $this->addSql('ALTER TABLE user_profile ALTER roles TYPE JSON');
        $this->addSql('ALTER TABLE user_profile ALTER roles DROP DEFAULT');
        $this->addSql('ALTER TABLE user_profile ALTER roles SET NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE blog_post ADD author_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE blog_post DROP author');
        $this->addSql('ALTER TABLE blog_post ALTER blog_content TYPE VARCHAR(2000)');
        $this->addSql('ALTER TABLE blog_post ADD CONSTRAINT fk_ba5ae01df675f31b FOREIGN KEY (author_id) REFERENCES author (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_ba5ae01df675f31b ON blog_post (author_id)');
        $this->addSql('ALTER TABLE user_profile ADD image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user_profile ALTER roles TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE user_profile ALTER roles DROP DEFAULT');
        $this->addSql('ALTER TABLE user_profile ALTER roles DROP NOT NULL');
    }
}
