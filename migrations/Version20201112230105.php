<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201112230105 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blog_post ADD blog_content VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE blog_post DROP blogcontent');
        $this->addSql('ALTER TABLE blog_post ALTER author TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE blog_post ALTER author DROP DEFAULT');
        $this->addSql('ALTER TABLE blog_post RENAME COLUMN blogtitle TO blog_title');
        $this->addSql('ALTER TABLE user_profile DROP image');
        $this->addSql('ALTER TABLE user_profile ALTER roles TYPE JSON');
        $this->addSql('ALTER TABLE user_profile ALTER roles DROP DEFAULT');
        $this->addSql('ALTER TABLE user_profile ALTER roles SET NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE user_profile ADD image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user_profile ALTER roles TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE user_profile ALTER roles DROP DEFAULT');
        $this->addSql('ALTER TABLE user_profile ALTER roles DROP NOT NULL');
        $this->addSql('ALTER TABLE blog_post ADD blogtitle VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE blog_post ADD blogcontent VARCHAR(2000) NOT NULL');
        $this->addSql('ALTER TABLE blog_post DROP blog_title');
        $this->addSql('ALTER TABLE blog_post DROP blog_content');
        $this->addSql('ALTER TABLE blog_post ALTER author TYPE TEXT');
        $this->addSql('ALTER TABLE blog_post ALTER author DROP DEFAULT');
    }
}
