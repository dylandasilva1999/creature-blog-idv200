<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201111100240 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX uniq_bdafd8c85e237e06');
        $this->addSql('ALTER TABLE author ADD email VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE author ADD image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE author DROP name');
        $this->addSql('ALTER TABLE author DROP title');
        $this->addSql('ALTER TABLE author RENAME COLUMN short_bio TO password');
        $this->addSql('ALTER TABLE blog_post DROP body');
        $this->addSql('ALTER TABLE blog_post RENAME COLUMN title TO blog_title');
        $this->addSql('ALTER TABLE blog_post RENAME COLUMN description TO blog_content');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE author ADD title VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE author DROP image');
        $this->addSql('ALTER TABLE author RENAME COLUMN email TO name');
        $this->addSql('ALTER TABLE author RENAME COLUMN password TO short_bio');
        $this->addSql('CREATE UNIQUE INDEX uniq_bdafd8c85e237e06 ON author (name)');
        $this->addSql('ALTER TABLE blog_post ADD body TEXT NOT NULL');
        $this->addSql('ALTER TABLE blog_post RENAME COLUMN blog_title TO title');
        $this->addSql('ALTER TABLE blog_post RENAME COLUMN blog_content TO description');
    }
}
