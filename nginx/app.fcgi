#!/usr/bin/env python
# -*- coding: utf-8 -*-

def application(environ, start_response):
    # Récupérer les données de la requête
    data = b"Hello, World!"

    # Définir les en-têtes de la réponse
    status = "200 OK"
    headers = [("Content-type", "text/plain")]

    # Appeler la fonction start_response avec les en-têtes
    start_response(status, headers)

    # Renvoyer les données de la réponse
    return [data]
