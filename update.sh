git reset --hard
git pull
rm .vhost
rm .fpm
rsync -h -v -r -P -t ./ ~/blog.talentedeurope.eu/