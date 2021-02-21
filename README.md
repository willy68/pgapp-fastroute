# pgframework-app-fastroute
pgframework with fastroute and route annotation

## Commande après git clone
**lignes de commande**
```bash
composer update
composer run-script post-root-package-install
composer run-script post-create-project-cmd
yarn
```

## Test composer create-project
**ligne de commande**  
```
composer create-project --repository-url={your_dir}/packages.json --remove-vcs willy68/pgapp-fastroute {project_path}
```

**Fichier packages.json**  
```json
{
    "package": {
        "name": "willy68/pgapp-fastroute",
        "version": "0.0.1",
        "source": {
          "url": "https://github.com/willy68/pgapp-fastroute.git",
          "type": "git",
          "reference": "main"
        }
    }
 }
 ```