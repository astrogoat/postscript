<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('postscript.enabled', false);
        $this->migrator->add('postscript.enabled', false);
    }

    public function down()
    {
        $this->migrator->delete('postscript.enabled');
    }
};
