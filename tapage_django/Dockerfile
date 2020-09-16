FROM python:3
ENV PYTHONUNBUFFERED 1
RUN mkdir /code
RUN apt-get update -q && apt-get install graphviz libgraphviz-dev libldap2-dev libsasl2-dev -yqq
WORKDIR /code
COPY requirements.txt /code/
RUN pip install -r requirements.txt
COPY . /code/
#RUN python manage.py spiritinstall
