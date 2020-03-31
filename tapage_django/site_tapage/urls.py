from django.urls import path
from . import views

urlpatterns = [
    path('', views.index, name='index'),
    path('contact/', views.contact, name='contact'),
    path('liens_utiles/', views.liens_utiles, name='liens_utiles'),
    path('edition2017/', views.edition2017, name='edition2017'),
    path('edition2018/', views.edition2018, name='edition2018'),
    path('edition2019/', views.edition2019, name='edition2019'),
    ]
