0) Cloner le projet en saisissant sur votre terminal la commande (positionnez vous dans le dossier où se trouvent vos projets)

```
git clone https://github.com/kingdevscode/itourist.git
```
1) installer les dépendances

```
composer install
```

2) renommer le fichier _.env.axample_ en _.env_

3) créer une base de données nommée _i-tourist_ et modifier la ligne DB_DATABASE=i-tourist dans le fichier _.env_

4) exécuter les migrations etr les seeders via la commande

```
php artisan migrate --seed
```

5) générer la clé de l'application voia la commande

```
php artisan key:generate
```

6)lancer le serveur via la commande

```
php artisan serve
```
