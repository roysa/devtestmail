<?php

class m151020_154039_001_user extends CDbMigration
{
	public function up()
	{
            $this->createTable('user', array(
                'id' => 'pk',
                'username' => 'VARCHAR(128) NOT NULL',
                'password' => 'VARCHAR(128) NULL DEFAULT NULL',
                'email' => 'VARCHAR(128) NULL DEFAULT NULL',
                'active' => 'TINYINT NOT NULL DEFAULT 0',
                'registered' => 'TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP',
                'admin' => 'TINYINT NOT NULL DEFAULT 0',
            ));
	}

	public function down()
	{
		$this->dropTable('user');
	}

}