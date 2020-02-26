from django.contrib import admin
from site_tapage.models import Edito
# Register your models here.

class EditoAdmin(admin.ModelAdmin):
    list_display = ('titre', 'date', 'contenu')
    date_hierarchy = 'date'
    ordering = ('-date', )
    search_fields = ('titre', 'contenu')

admin.site.register(Edito, EditoAdmin)
