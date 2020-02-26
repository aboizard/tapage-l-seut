from django import forms
from .models import Edito

class ContactForm(forms.Form):
    sujet = forms.CharField(max_length=100)
    message = forms.CharField(widget=forms.Textarea)
    envoyeur = forms.EmailField(label="Votre adresse e-mail")
    date = forms.DateField()
    renvoi = forms.BooleanField(help_text="Cochez si vous souhaitez recevoir une réponse", required=False)

    def clean_message(self):
        #on rajoute une méthode qui doit commencer par clean_ suivi du nom de la variable du champ
        #pour creer notre propre validation des données
        message = self.cleaned_data['message']
        if "russe" in message:
            raise forms.ValidationError("Pas de hacker russes ici please")

        # Ne pas oublier de renvoyer le contenu du champ traité
        return message
        # Si la méthode de validation dépend de plusieurs champs, il faut écraser
        # la méthode clean hérité de la classe mère Form
        # voir https://openclassrooms.com/courses/1871271-developpez-votre-site-web-avec-le-framework-django/1872573-les-formulaires

class LiensUtiles(forms.Form):
    CATEGORIES = (('O', 'Organisation'), ('P','Programmation'), ('C', 'Communication'), ('A','Autre'))
    categorie = forms.ChoiceField(choices=CATEGORIES)
    description = forms.CharField(label="Description du lien", max_length=100,
                                  widget=forms.TextInput(attrs={'placeholder':"Description du lien"}))
    url = forms.URLField(initial='https://')

class EditoForm(forms.ModelForm):
    #Creation d'un formulaire selon le modèle d'un modèle
    #ici on prend le modèle edito
    class Meta:
        model = Edito
        fields = '__all__'
