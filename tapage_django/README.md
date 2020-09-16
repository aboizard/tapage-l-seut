# Project Title

Tapage l'Seut

## arbre des dossiers

Voir tree.html

### Prerequisites

Pour faire tourner le site, executer :

```
cd tapage_django
source tapage_django/tapage_virtual_env/bin/activate
python manage.py runserver
```


## Authors

* **Gabriel Lahellec** - *Initial work* - [PurpleBooth](https://github.com/PurpleBooth)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
intégrer spirit au site

installer spirit comme si c'etait un nouveau projet dans le dossier du projet du site

executer dans le dossier spirit :
python manage.py spiritinstall
python manage.py createsuperuser
python manage.py runserver

ajouter au settings du site :
- installed apps : tous ce qu'il y a dans base.py sauf les django.
- middleware : tous les middleware en spirit.
- ajouter HAYSTACK_CONNECTIONS
- ajouter LOGIN_URL, LOGIN_REDIRECT_URL, LOGOUT_REDIRECT_URL
- ajouter LOGGING à la fin
- ajouter MEDIA_URL et MEDIA_ROOT
- mettre STATIC_ROOT = os.path.join(BASE_DIR, 'static') et commenter sstaticfiules_dir ou trouver comment on s'en sert

dans url :
- ajouter from django.conf.urls import url en en tête
- Include Spirit URLs into the project by adding import spirit.urls and url(r'^forum/', include(spirit.urls)), into urls.py

executer dans le dossier du projet global:
python manage.py spiritinstall
