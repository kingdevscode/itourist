1) Cloner le projet en saisissant sur votre terminal la commande (positionnez vous dans le dossier où se trouvent vos projets)

```
git clone https://github.com/kingdevscode/itourist.git
```
2) renommere le fichier *.env.axample* en *.env*

3) créer une base de données nommée *i-tourist* et modifier la ligne *DB_DATABASE=i-tourist* dans le fichier *.env*

4) exécuter les migrations etr les seeders via la commande

```
php artisan migrate --seed
```

5)lancer le serveur via la commande

```
php artisan serve
```
