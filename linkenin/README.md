# 2223-linkenin

## Instalación

Crear base de datos

```
CREATE DATABASE linkenin;
CREATE USER 'linkenin'@'localhost' IDENTIFIED BY 'linkenin';
GRANT ALL PRIVILEGES ON linkenin.* TO 'linkenin'@'localhost' WITH GRANT OPTION;
```

Comenzar aplicación en limpio
```
mysql -u linkenin -p linkenin < scripts/db.create.sql
```

Cargar ejemplos
```
mysql -u linkenin -p linkenin < scripts/db.ejemplos.sql
```

## Ejecutar servidor dev

```
./rundevserver.sh 8000
```