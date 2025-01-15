<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('postscript.enabled', false);
        $this->migrator->add('postscript.shop_id', false);
    }

    public function down()
    {
        $this->migrator->delete('postscript.enabled');
    }
};
