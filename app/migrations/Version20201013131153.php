<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201013131153 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE civilite_num_civilite_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE operations_sur_comptes_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE qualif_num_qualif_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('ALTER TABLE avions ALTER num_avion DROP DEFAULT');
        $this->addSql('ALTER TABLE avions ALTER taux DROP DEFAULT');
        $this->addSql('ALTER TABLE avions ALTER forfait1 DROP DEFAULT');
        $this->addSql('ALTER TABLE avions ALTER forfait2 DROP DEFAULT');
        $this->addSql('ALTER TABLE avions ALTER forfait3 DROP DEFAULT');
        $this->addSql('ALTER TABLE avions ALTER heures_forfait1 DROP DEFAULT');
        $this->addSql('ALTER TABLE avions ALTER heures_forfait2 DROP DEFAULT');
        $this->addSql('ALTER TABLE avions ALTER heures_forfait3 DROP DEFAULT');
        $this->addSql('ALTER TABLE avions ALTER reduction_semaine DROP DEFAULT');
        $this->addSql('ALTER TABLE civilite ALTER num_civilite DROP DEFAULT');
        $this->addSql('ALTER TABLE comptes ALTER num DROP DEFAULT');
        $this->addSql('ALTER TABLE comptes ALTER num_seq DROP DEFAULT');
        $this->addSql('ALTER TABLE comptes ALTER credit DROP DEFAULT');
        $this->addSql('ALTER TABLE comptes ALTER debit DROP DEFAULT');
        $this->addSql('ALTER TABLE comptes ALTER autocreation DROP DEFAULT');
        $this->addSql('ALTER TABLE instructeurs ALTER num_instructeur DROP DEFAULT');
        $this->addSql('ALTER TABLE instructeurs ALTER num_civilite DROP DEFAULT');
        $this->addSql('ALTER TABLE instructeurs ALTER taux_instructeur DROP DEFAULT');
        $this->addSql('ALTER TABLE membres ADD password VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE membres ALTER num_membre DROP DEFAULT');
        $this->addSql('ALTER TABLE membres ALTER num_qualif DROP DEFAULT');
        $this->addSql('ALTER TABLE membres ALTER num_civilite DROP DEFAULT');
        $this->addSql('ALTER TABLE membres ALTER membre_actif DROP DEFAULT');
        $this->addSql('ALTER TABLE operations_sur_comptes ALTER num_seq DROP DEFAULT');
        $this->addSql('ALTER TABLE operations_sur_comptes ALTER credit DROP DEFAULT');
        $this->addSql('ALTER TABLE operations_sur_comptes ALTER debit DROP DEFAULT');
        $this->addSql('ALTER TABLE operations_sur_comptes ALTER autocreation DROP DEFAULT');
        $this->addSql('ALTER TABLE qualif ALTER num_qualif DROP DEFAULT');
        $this->addSql('ALTER TABLE seq_vol ALTER num_seq DROP DEFAULT');
        $this->addSql('ALTER TABLE seq_vol ALTER temps DROP DEFAULT');
        $this->addSql('ALTER TABLE seq_vol ALTER heures_forfait DROP DEFAULT');
        $this->addSql('ALTER TABLE seq_vol ALTER prix_special DROP DEFAULT');
        $this->addSql('ALTER TABLE seq_vol ALTER taux DROP DEFAULT');
        $this->addSql('ALTER TABLE seq_vol ALTER reduction_semaine DROP DEFAULT');
        $this->addSql('ALTER TABLE seq_vol ALTER taux_instructeur DROP DEFAULT');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE civilite_num_civilite_seq CASCADE');
        $this->addSql('DROP SEQUENCE operations_sur_comptes_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE qualif_num_qualif_seq CASCADE');
        $this->addSql('ALTER TABLE operations_sur_comptes ALTER num_seq SET DEFAULT 0');
        $this->addSql('ALTER TABLE operations_sur_comptes ALTER credit SET DEFAULT \'0\'');
        $this->addSql('ALTER TABLE operations_sur_comptes ALTER debit SET DEFAULT \'0\'');
        $this->addSql('ALTER TABLE operations_sur_comptes ALTER autocreation SET DEFAULT \'false\'');
        $this->addSql('CREATE SEQUENCE comptes_num_seq');
        $this->addSql('SELECT setval(\'comptes_num_seq\', (SELECT MAX(num) FROM comptes))');
        $this->addSql('ALTER TABLE comptes ALTER num SET DEFAULT nextval(\'comptes_num_seq\')');
        $this->addSql('ALTER TABLE comptes ALTER num_seq SET DEFAULT 0');
        $this->addSql('ALTER TABLE comptes ALTER credit SET DEFAULT \'0\'');
        $this->addSql('ALTER TABLE comptes ALTER debit SET DEFAULT \'0\'');
        $this->addSql('ALTER TABLE comptes ALTER autocreation SET DEFAULT \'false\'');
        $this->addSql('ALTER TABLE civilite ALTER num_civilite SET DEFAULT 0');
        $this->addSql('CREATE SEQUENCE instructeurs_num_instructeur_seq');
        $this->addSql('SELECT setval(\'instructeurs_num_instructeur_seq\', (SELECT MAX(num_instructeur) FROM instructeurs))');
        $this->addSql('ALTER TABLE instructeurs ALTER num_instructeur SET DEFAULT nextval(\'instructeurs_num_instructeur_seq\')');
        $this->addSql('ALTER TABLE instructeurs ALTER num_civilite SET DEFAULT 0');
        $this->addSql('ALTER TABLE instructeurs ALTER taux_instructeur SET DEFAULT \'0\'');
        $this->addSql('ALTER TABLE membres DROP password');
        $this->addSql('CREATE SEQUENCE membres_num_membre_seq');
        $this->addSql('SELECT setval(\'membres_num_membre_seq\', (SELECT MAX(num_membre) FROM membres))');
        $this->addSql('ALTER TABLE membres ALTER num_membre SET DEFAULT nextval(\'membres_num_membre_seq\')');
        $this->addSql('ALTER TABLE membres ALTER num_qualif SET DEFAULT 0');
        $this->addSql('ALTER TABLE membres ALTER num_civilite SET DEFAULT 0');
        $this->addSql('ALTER TABLE membres ALTER membre_actif SET DEFAULT \'false\'');
        $this->addSql('CREATE SEQUENCE seq_vol_num_seq_seq');
        $this->addSql('SELECT setval(\'seq_vol_num_seq_seq\', (SELECT MAX(num_seq) FROM seq_vol))');
        $this->addSql('ALTER TABLE seq_vol ALTER num_seq SET DEFAULT nextval(\'seq_vol_num_seq_seq\')');
        $this->addSql('ALTER TABLE seq_vol ALTER temps SET DEFAULT 0');
        $this->addSql('ALTER TABLE seq_vol ALTER heures_forfait SET DEFAULT \'0\'');
        $this->addSql('ALTER TABLE seq_vol ALTER prix_special SET DEFAULT \'0\'');
        $this->addSql('ALTER TABLE seq_vol ALTER taux SET DEFAULT \'0\'');
        $this->addSql('ALTER TABLE seq_vol ALTER reduction_semaine SET DEFAULT \'0\'');
        $this->addSql('ALTER TABLE seq_vol ALTER taux_instructeur SET DEFAULT \'0\'');
        $this->addSql('CREATE SEQUENCE avions_num_avion_seq');
        $this->addSql('SELECT setval(\'avions_num_avion_seq\', (SELECT MAX(num_avion) FROM avions))');
        $this->addSql('ALTER TABLE avions ALTER num_avion SET DEFAULT nextval(\'avions_num_avion_seq\')');
        $this->addSql('ALTER TABLE avions ALTER taux SET DEFAULT \'0\'');
        $this->addSql('ALTER TABLE avions ALTER forfait1 SET DEFAULT \'0\'');
        $this->addSql('ALTER TABLE avions ALTER forfait2 SET DEFAULT \'0\'');
        $this->addSql('ALTER TABLE avions ALTER forfait3 SET DEFAULT \'0\'');
        $this->addSql('ALTER TABLE avions ALTER heures_forfait1 SET DEFAULT \'0\'');
        $this->addSql('ALTER TABLE avions ALTER heures_forfait2 SET DEFAULT \'0\'');
        $this->addSql('ALTER TABLE avions ALTER heures_forfait3 SET DEFAULT \'0\'');
        $this->addSql('ALTER TABLE avions ALTER reduction_semaine SET DEFAULT \'0\'');
        $this->addSql('ALTER TABLE qualif ALTER num_qualif SET DEFAULT 0');
    }
}
