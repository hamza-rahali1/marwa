<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210620211157 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, contenu LONGTEXT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entreprise (id INT AUTO_INCREMENT NOT NULL, code_icb_general VARCHAR(255) NOT NULL, secteur_general VARCHAR(255) NOT NULL, code_icb VARCHAR(255) NOT NULL, secteur VARCHAR(255) NOT NULL, code_isin VARCHAR(255) NOT NULL, libelle VARCHAR(255) NOT NULL, titres_admis DOUBLE PRECISION NOT NULL, titres_emiss DOUBLE PRECISION NOT NULL, cours_au DOUBLE PRECISION NOT NULL, cours_actuel DOUBLE PRECISION NOT NULL, cours_at DATETIME NOT NULL, cb DOUBLE PRECISION NOT NULL, score DOUBLE PRECISION NOT NULL, rnpg DOUBLE PRECISION NOT NULL, fpnds DOUBLE PRECISION NOT NULL, pt_forte LONGTEXT NOT NULL, pt_faible LONGTEXT NOT NULL, actualite LONGTEXT NOT NULL, analyse LONGTEXT NOT NULL, activite LONGTEXT NOT NULL, meca_de_profit LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE opcvm (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, societe VARCHAR(255) NOT NULL, categorie VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, orientation VARCHAR(255) NOT NULL, vl_f DOUBLE PRECISION NOT NULL, vl_au DOUBLE PRECISION NOT NULL, an DOUBLE PRECISION NOT NULL, divvv DOUBLE PRECISION NOT NULL, _date_f DATETIME NOT NULL, _date_au DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, tel VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE entreprise');
        $this->addSql('DROP TABLE opcvm');
        $this->addSql('DROP TABLE utilisateur');
    }
}
