<?php
/**
 * User: suluuboi
 * Date: 7/10/2020
 * Time: 8:07 AM
 */

class m0002_add_password_column {
    public function up()
    {
        $db = \suluuboi\phpmvc\Application::$app->db;
        $db->pdo->exec("ALTER TABLE users ADD COLUMN password VARCHAR(512) NOT NULL");
    }

    public function down()
    {
        $db = \suluuboi\phpmvc\Application::$app->db;
        $db->pdo->exec("ALTER TABLE users ADD COLUMN password VARCHAR(512) NOT NULL");
    }
}