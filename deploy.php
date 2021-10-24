<?php
namespace Deployer;

// プロジェクト名
set('application', 'deployer-test');

// Gitリモートリポジトリ
set('repository', 'iuemon83@github.com/iuemon83/php-deployer-test.git');

// リリース先のホスト
host('3.134.102.248')
    ->identityFile('~/.ssh/cauldron-web.pem')
    ->user('ec2-user')
    ->set('deploy_path', '/home/ec2-user/{{application}}');

task('hello', function () {
    run('ls -1');
});