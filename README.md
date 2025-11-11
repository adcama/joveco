# joveco
#Projecte creat per Adrià Cabrera Martínez, alumne de SMX 2 de l'Institut de
#Palamós.
Context
Fruites Joan és un supermercat local (~90 m²) nascut de l’experiència de Joan Serra,
que produeix i ven fruita i verdura de proximitat. Ja disposen d’un ERP (Odoo)
per a vendes, estoc, compres i facturació a la botiga, però el camp encara no està
digitalitzat (reg manual, sense sensors ni registres). El propòsit general és
connectar “el camp” amb “la botiga” mitjançant un sistema informatitzat i
automatitzat.

Objectiu del projecte (què es vol assolir)
Connectar la producció agrícola amb Odoo, automatitzar el reg i el control de
maduració, millorar la planificació per reduir minves, desplegar infraestructura
elèctrica i de dades al camp, i fer-ho de manera sostenible (plaques solars
i bateries).
Abast
Fase 1 – Infraestructura: plaques solars + bateries; xarxa de sensors (LoRa
o Wi-Fi) fins a un servidor local; servidor integrat amb Odoo; connexió
segura camp-botiga.
Fase 2 – Sensorització i automatització: sensors d’humitat de sòl,
temperatura i maduració; reg automàtic amb vàlvules i microcontroladors
(Raspberry Pi/Arduino); sistema d’alertes per missatge/correu.	
Fase 3 – Integració amb Odoo: mòdul a Odoo per visualitzar dades IoT; registre 
automàtic de collites i quantitats; vincle amb la previsió d’estoc a la botiga.
Fase 4 – Formació i optimització: formació al personal; ajust d’umbrals de reg
 i sensors segons estació i cultiu.	
El que JO he de fer:

1) Infraestructura

Dimensionar i instal·lar plaques solars i bateries per als equips de camp.


Dissenyar i desplegar la xarxa de dades (LoRa o Wi-Fi) fins al servidor.


Muntar/configurar el servidor i enllaçar-lo amb Odoo.


Configurar una VPN o túnel segur entre camp i supermercat.


2) Sensorització i control

Seleccionar, cablejar i calibrar sensors: humitat de sòl, temperatura i 
maduració.


Instal·lar vàlvules elèctriques i programar el reg automàtic 
(Raspberry Pi/Arduino).


Implementar alertes automàtiques (SMS/correu) davant anomalies.


3) Programari i integració

Desenvolupar un mòdul a Odoo per visualitzar dades IoT en temps (quasi) real.


Automatitzar l’alta de collites/quantitats estimades.


Connectar aquestes dades amb la previsió d’estoc de la botiga.


4) Tancament i millora contínua

Preparar una guia ràpida i formar en Joan i l’equip.


Ajustar umbrals i horaris de reg segons resultats i temporada.


Indicadors d’èxit esperats: fins a un 30 % menys consum d’aigua, menys minves
per collita fora de temps, dades històriques per planificació i una gestió
integrada camp-botiga.


