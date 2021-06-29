import os
import shutil
import datetime as dt

#pegar o dia de hj
hj = dt.date.today()
data_bkp = str(hj).replace('-','.')

#pedir o nome pra dar ao bkp e o nome do usuário
nome_dado = input("digite o nome do backup (ex: cecilia): ")
nome = 'bkp_'+ nome_dado + '_' + str(data_bkp)

usuario = input("digite o nome do usuario:")

#caminhos para o bkp
pasta_imagens = 'C:/Users/'+ usuario +'/Pictures'
#pasta_desktop = 'C:/Users/'+ usuario +'/Desktop'
#pasta_videos = 'C:/Users/'+ usuario +'/Videos'
#pasta_downloads = 'C:/Users/'+ usuario +'/Downloads'
#pasta_documentos = 'C:/Users/'+ usuario +'/Documents'
#pasta_musica = 'C:/Users/'+ usuario +'/Music'

#criar pasta
try:
    os.mkdir(nome)
except FileExistsError as erro:
    pass

#copiar diretorios e arquivos
shutil.copytree(pasta_imagens, nome +'/imagens')
#shutil.copytree(pasta_desktop, nome +'/desktop')
#shutil.copytree(pasta_videos, nome +'/videos')
#shutil.copytree(pasta_downloads, nome +'/downloads')
#shutil.copytree(pasta_documentos, nome +'/documents')
#shutil.copytree(pasta_musica, nome +'/musicas')