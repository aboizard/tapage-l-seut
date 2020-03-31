from django.shortcuts import render
from datetime import datetime
from site_tapage.models import Edito
from .forms import ContactForm, LiensUtiles, EditoForm
# Create your views here.

def index(request):
    edito_list = Edito.objects.order_by('-date')
    date = datetime.now()
    context = {'edito_list' : edito_list}
    form = EditoForm(request.POST)
    if form.is_valid():
        form.save()
        envoi = True
        form = EditoForm()
    return render(request, 'site_tapage/index.html', locals(), context)

def contact(request):
    # Construire le formulaire, soit avec les données postées,
    # soit vide si l'utilisateur accède pour la première fois
    # à la page.
    form = ContactForm(request.POST or None)
    # Nous vérifions que les données envoyées sont valides
    # Cette méthode renvoie False s'il n'y a pas de données 
    # dans le formulaire ou qu'il contient des erreurs.
    if form.is_valid(): 
        # Ici nous pouvons traiter les données du formulaire
        sujet = form.cleaned_data['sujet']
        message = form.cleaned_data['message']
        envoyeur = form.cleaned_data['envoyeur']
        renvoi = form.cleaned_data['renvoi']

        # Nous pourrions ici envoyer l'e-mail grâce aux données 
        # que nous venons de récupérer
        envoi = True
    
    # Quoiqu'il arrive, on affiche la page du formulaire.
    return render(request, 'site_tapage/contact.html', locals())

def liens_utiles(request):
    form = LiensUtiles(request.POST or None)
    if form.is_valid():
        categorie = form.cleaned_data['categorie']
        description = form.cleaned_data['description']
        url = form.cleaned_data['url']
        envoi = True

    return render(request, 'site_tapage/liens_utiles.html', locals())


def edition2017(request):
    return render(request, 'site_tapage/edition2017.html', locals())

def edition2018(request):
    return render(request, 'site_tapage/edition2018.html', locals())

def edition2019(request):
    return render(request, 'site_tapage/edition2019.html', locals())
