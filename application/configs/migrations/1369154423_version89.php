<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version89 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->removeColumn('oauth_authorization_codes', 'redirect_url');
        $this->addColumn('oauth_authorization_codes', 'redirect_uri', 'string', '500', array(
             'notnull' => '',
             ));
    }

    public function down()
    {
        $this->addColumn('oauth_authorization_codes', 'redirect_url', 'string', '500', array(
             'notnull' => '',
             ));
        $this->removeColumn('oauth_authorization_codes', 'redirect_uri');
    }
}