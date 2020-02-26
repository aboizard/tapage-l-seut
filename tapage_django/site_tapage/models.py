from django.db import models
from django.utils import timezone

# Create your models here.
class Edito(models.Model):
    date = models.DateTimeField(default=timezone.now,
                                verbose_name="Date de l'édito")
    titre = models.CharField(max_length = 100)
    contenu = models.TextField()

    def __str__(self):
        return self.contenu


    class Meta:
        verbose_name = "Edito"
        ordering = ['date']

    def __str__(self):
        return self.contenu
