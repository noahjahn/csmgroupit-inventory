<?php
namespace Deployer;

require 'recipe/codeigniter.php';

// Project name
set('application', 'csmit');

inventory('hosts.yml');
set('writable_use_sudo', true);

// Project repository
set('repository', 'git@github.com:noahjahn/csmit-asset-manager.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

add('shared_dirs', ['uploads']);
add('writable_dirs', ['uploads']);

set('allow_anonymous_stats', false);

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

after('deploy:update_code', 'deploy:move_composer');

task('deploy:move_composer', function () {
    // run ('mv -f /var/www/html/csmit.noahjahn.dev/current/src/composer.json /var/www/html/csmit')
});

after('deploy:move_composer', 'deploy:merge_src');
task('deploy:merge_src', function () {
    run('rsync -abviuzP /var/www/html/csmit.noahjahn.dev/release/src/ /var/www/html/csmit.noahjahn.dev/release/');
});

after('deploy:merge_src', 'update_database');
task('update_database', function () {

});
